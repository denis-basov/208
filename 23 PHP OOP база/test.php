<?php

/*
class Cats{
	public $name;
	public $breed;
	public $color;
	public $sex;
	public $age;

	public function getInfo(){
		echo "<h4>Name: $this->name, breed: $this->breed, color $this->color, sex $this->sex.";
	}
}

$cat1 = new Cats();
$cat1->name = 'Vaska';
$cat1->breed = 'British';
$cat1->color = 'grey';
$cat1->sex = 'boy';
$cat1->age = '5';
$cat1->getInfo();*/



/*
class Dog{
	public $name;
	public $weight;
	public $age;
	public $color;

	public function woof(){
		echo "<h3>гав-гав!</h3><br>";
	}

	public function getInfo(){
		echo "<h2>Name: $this->name . Color: $this->color. Age: $this->age года. Weight: $this->weight кг</h2>";
	}
}

$dog1 = new Dog();

$dog1->name = "Жора";
$dog1->color = "Белый";
$dog1->age = 3;
$dog1->weight = 17.3;
$dog1->woof();
$dog1->getInfo();*/


/*
class Pet {
	public $name;
	public $age;
	public $type;

	public function call() {
		if($this->type == 'cat') {
			echo "Кис-кис, $this->name";
		} else {
			echo "Ко мне, $this->name";
		};
	}
};

$cat = new Pet();
$cat->name = 'Барсик';
$cat->type = 'cat';
$cat->age = 10;
$cat->call();*/


/*
class Notebook {
	public $vendor;
	public $model;
	public $cpu;
	public $ram;
	public $ssd;

	public function getInfo() {
		return [
			"Vendor" => $this->vendor,
			"Model" => $this->model,
			"CPU" => $this->cpu,
			"RAM" => $this->ram,
			"SSD" => $this->ssd
		];
	}
	public function echoInfo() {
		foreach ($this->getInfo() as $key => $value) {
			echo $key. " " .$value. "<br>";
		}
	}
}
$notebook = new Notebook();
$notebook->vendor = "Acer";
$notebook->model = "Nitro 5";
$notebook->cpu = "Core i-5";
$notebook->ram = 16;
$notebook->ssd = 256;

var_dump($notebook->getInfo());
echo "<br>";
$notebook->echoInfo();*/



/*
class Home{
	// свойства класса (переменные)
	public $color;
	public $squareX;

	// методы класса (функции)
	public function getInfo(){
		echo "<h3>Color: $this->color. Square: $this->squareX</h3>";
	}

	public function __construct(){

	}
}
$home = new Home();

$home->color = 'green';
$home->squareX = '200';
$home->getInfo();*/


/*
class Dogs
{
	public $name;
	public $age;
	public $weight;
	public $color;

	public function getInfo()
	{
		echo "<h2>Name: $this->name. Age: $this->age. Weight: $this->weight. Color: $this->color.</h2>";
	}
}


$dog1 = new Dogs();
$dog2 = new Dogs();

$dog1->name = 'Nancy';
$dog1->age = '2';
$dog1->weight = '3';
$dog1->color = 'cream';
$dog1->getInfo();

$dog2->name = 'Leslie';
$dog2->age = '1';
$dog2->weight = '2';
$dog2->color = 'ginger';
$dog2->getInfo();*/


// конструктор

/*
class Dog{
	public $name;
	public $color;
	public $age;
	public $weight;

	public function woof(){
		echo "<h3>гав-гав!</h3>";
	}

	public function getInfo(){
		echo "<h2>Name: $this->name. Color: $this->color. Age: $this->age года. Weight: $this->weight кг</h2>";
	}

	public function __construct($name, $color, $age, $weight){
		$this->name = $name;
		$this->color = $color;
		$this->age = $age;
		$this->weight = $weight;
	}
}


$dog1 = new Dog("Жора", "Белый", 3, 17.3);
$dog1->woof();
$dog1->getInfo();*/

/*
class Cats{
	public $name;
	public $owner;
	public $age;

	public function getInfoCat(){
		echo "<h2>Кличка: $this->name </br>Хозяин: $this->owner </br> Возраст: $this->age года</h2>";
	}

	public function __construct($parName='',$parOwner='',$parAge=0){
		$this->name=$parName;
		$this->owner=$parOwner;
		$this->age=$parAge;
	}
}

$cat1 = new Cats('Барсик','Вася',22);
$cat2 = new Cats();

$cat1->getInfoCat();

$cat2->name = 'Пушок';
$cat2->owner = 'Василиса';
$cat2->age = 3;
$cat2->getInfoCat();*/

/*
class Pet {
	public $name;
	public $age;
	public $type;

	public function call() {
		if($this->type == 'cat') {
			echo "Кис-кис, $this->name!";
		} else {
			echo "Ко мне, $this->name!";
		};
	}

	public function __construct($petName, $petType, $petAge) {
		$this->name = $petName;
		$this->type = $petType;
		$this->age = $petAge;
		echo "Привет, $this->name! \n";
	}
};

$cat = new Pet('Барсик', 'cat', 10);
$cat->call();*/

/*
class Notebook {
	public $vendor;
	public $model;
	public $cpu;
	public $ram;
	public $ssd;

	public function __construct($vendor, $model, $cpu, $ram, $ssd)
	{
		$this->vendor = $vendor;
		$this->model = $model;
		$this->cpu = $cpu;
		$this->ram = $ram;
		$this->ssd = $ssd;
	}

	public function getInfo() {
		return [
			"Vendor" => $this->vendor,
			"Model" => $this->model,
			"CPU" => $this->cpu,
			"RAM" => $this->ram,
			"SSD" => $this->ssd
		];
	}

	public function echoInfo() {
		foreach ($this->getInfo() as $key => $value) {
			echo $key. " " .$value. "<br>";
		}
	}
}
$notebook = new Notebook("Acer","Nitro 5","Core i-5",16,256);

var_dump($notebook->getInfo());
echo "<br>";
$notebook->echoInfo();*/


/*
class Cars {
	public $color;
	public $model;
	public $weight;

	public function __construct($arr)
	{
		$this->color = $arr['color'];
		$this->model = $arr['model'];
		$this->weight = $arr['weight'];
	}

	public function getColor() {
		echo "Color: $this->color";
		return $this->color;
	}
	public function getInfo() {
		echo "<h2>Color: $this->color. Model: $this->model. Weight: $this->weight.</h2>";
	}
}
$arr = ['color' => "red", 'model' => "S234", 'weight' => 1450];
$car = new Cars($arr);*/