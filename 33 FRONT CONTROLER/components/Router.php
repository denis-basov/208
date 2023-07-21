<?php

/**
 * Class Router
 * маршрутизатор, который отвечает за обработку путей
 * получаем путь (URL), подключаем нужный контроллер, вызываем нужный метод
 */

class Router
{
	private $routes; // свойство для хранения маршрутов

	/**
	 * Получаем массив с маршрутами
	 */
	public function __construct(){
		$this->routes = require ROOT.'/config/routes.php';
	}

	/**
	 * получаем URI
	 */
	private function getUri(){
		if(!empty($_SERVER['REQUEST_URI'])){
			return trim($_SERVER['REQUEST_URI'], '/');
		}else{
			die('URI некорректен');
		}
	}

	/**
	 * метод для подключения нужного контроллера и вызова его метода
	 */
	public function run(){

		// получаем строку запроса
		$uri = $this->getUri();

		// перебираем массив с маршрутами
		// DBConnect::d($this->routes);
		foreach ($this->routes as $uriPattern => $path){

			// если есть совпадение ключа в массиве и строки запроса
			if(preg_match("#^$uriPattern$#", $uri)){ // news/([0-9]+) => news/33

				// получаем внутренний маршрут подставляя из строки запроса данные в значение текущего маршрута
				// #$uriPattern# - news/([0-9]+) - pattern
				// $path - news/view/$1 - replacement
				// $uri - news/23 - subject

//				echo '$uriPattern: ' . $uriPattern .'<br>';
//				echo '$path: ' . $path .'<br>';
//				echo '$uri: ' . $uri .'<hr>';

				// задача сформировать внутренний маршрут: news/view/23
				$internalRoute = preg_replace("#$uriPattern#", $path, $uri);

				// разделяем строку на массив по '/'
				$segments = explode('/', $internalRoute);
				//DBConnect::d($segments);

				// определяем название контроллера, который нужно подключить
				$controllerName = ucfirst(array_shift($segments)).'Controller';
				//echo $controllerName.'<br>';

				// определяем название метода, который будет обрабатывать запрос
				$actionName = 'action'.ucfirst(array_shift($segments));
				//echo $actionName;

				// если остались элементы в массиве, забираем как параметры для метода
				$parameters = &$segments;

				// подключаем контроллер
				$controllerFile = ROOT."/controllers/$controllerName.php";
				if(file_exists($controllerFile)){
					require $controllerFile;
				}else{
					die('Контроллер не найден');
				}

				// вызываем метод
				$controllerObj = new $controllerName();
				$controllerObj->$actionName(...$parameters);


			}// if
		} // foreach
	}// run

}