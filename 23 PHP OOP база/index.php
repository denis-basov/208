<?php
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// Класс - шаблон, каркас для создания объектов
// Объект - экземпляр класса
// Свойства - переменные класса
// Методы - функции класса
// Модификаторы доступа - public, private, protected


/**
 * класс Cars
 */
class Cars{
	// свойства класса (переменные)
	public $color;
	public $model;
	public $weight;

	// методы класса (функции)
	public function getInfo(){
		echo "<h2>Color: $this->color. Model: $this->model. Weight: $this->weight</h2>";
	}

	public function __construct($parColor, $parModel, $parWeight){
		$this->color = $parColor;
		$this->model = $parModel;
		$this->weight = $parWeight;
	}

}

// создаем объект класса Cars
$car1 = new Cars('red', 'S234', 1450);  // $car1->__construct();
$car2 = new Cars('silver', 't1000', 2541);

// задаем значения свойствам объекта
//$car1->color = 'red';
//$car1->model = 'S234';
//$car1->weight = 1450;
$car1->getInfo();

//$car2->color = 'silver';
//$car2->model = 't1000';
//$car2->weight = 2541;
$car2->getInfo();

//  Fatal error: Uncaught ArgumentCountError: Too few arguments to function Cats::__construct(),
// 0 passed in C:\xampp\htdocs\index.php on line 71 and exactly 3 expected in