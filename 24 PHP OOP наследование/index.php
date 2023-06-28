<?php
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// Основные принципы ООП: Наследование, Инкапсуляция, Полиморфизм
// Класс - шаблон, каркас для создания объектов
// Объект - экземпляр класса
// Свойства - переменные класса
// Методы - функции класса
// Модификаторы доступа - public, private, protected
// public - общедоступное свойство
// private - возможно обращение только в текущем классе
// protected - возможно обращение в текущем классе и в наследниках
// Наследование классов
// $this - указатель на текущий объект
// self - указатель на текущий класс
// parent - указатель на класс родителя

/**
 * class Dogs
 * Родительский класс (суперкласс)
 */
class Dogs{

	// свойства
	protected $name;
	protected $age;
	protected $weight;
	protected $color;

	// методы
	// конструктор - вызывается автоматически при создании объекта
	public function __construct($name, $age, $weight, $color){
		$this->name = $name;
		$this->age = $age;
		$this->weight = $weight;
		$this->color = $color;
	}

	// заготовка для вывода базовых свойств
	protected function getBasicSummary(){
		echo <<<_HTML_
				<h3>Кличка: $this->name</h3>
				<p>Возраст: $this->age лет</p>
				<p>Вес: $this->weight кг</p>
				<p>Цвет шерсти: $this->color</p>
_HTML_;
	}

	// метод для получения инфы о собаке
	public function getSummary(){
			echo "<div class='dog'>";
				self::getBasicSummary();
			echo "</div>";
	}


	// метод для получения базовой информации об объекте
	public function getBasicInfo(){
		echo <<<_HTML_
			<div class="basic-dog">
				<h3>Кличка: $this->name</h3>
				<p>Цвет шерсти: $this->color</p>
			</div>
_HTML_;
	}

}// конец класса Dogs

// объекты родительского класса Dogs
$bobik = new Dogs('Бобик', 11, 6, 'Белый');
//$bobik->getSummary();
//$bobik->getBasicInfo();
//d($bobik);
//echo $bobik->name;
//$bobik->name = 'Шарик';
$bobik->getSummary();
//$bobik->getBasicSummary();


/**
 * Дочерний класс гончих собак
 */
class RaceDogs extends Dogs{
	public $speed; // уникальное свойство для объектов класса RaceDogs

	// конструктор - вызывается автоматически при создании объекта
	public function __construct($name, $age, $weight, $color, $speed){
		parent::__construct($name, $age, $weight, $color);
		$this->speed = $speed;
	}

	public function getSummary(){
		echo <<<_HTML_
			<div class="dog race-dog">
				<h3>Кличка: $this->name</h3>
				<p>Возраст: $this->age лет</p>
				<p>Вес: $this->weight кг</p>
				<p>Цвет шерсти: $this->color</p>
				<p>Скорость погони: $this->speed км/ч</p>
			</div>
_HTML_;
	}

}
$belka = new RaceDogs('Белка', 3, 4, 'Черный', 55);
//$belka->getSummary();
//d($belka);


/**
 * Дочерний класс выставочных собак
 */
class ExDogs extends Dogs{
	public $breed;

	// конструктор - вызывается автоматически при создании объекта
	public function __construct($name, $age, $weight, $color, $breed){
		parent::__construct($name, $age, $weight, $color);
		$this->breed = $breed;
	}

	public function getSummary(){
		echo "<div class='dog ex-dog'>";
			parent::getBasicSummary();
			echo "<p>Порода: $this->breed</p>";
		echo "</div>";
	}

}
$vasilek = new ExDogs('Василек', 4, 3, 'Коричневый', 'Пудель');
//d($vasilek);
//$vasilek->getSummary();