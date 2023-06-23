<?php
/**
 * страница детального просмотра одного авто
 */

//echo "<h1>ID: $_GET[carId]</h1>";

$cars = [
	[
		'id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'
	],
	[
		'id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'
	],
	[
		'id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg'
	],
    [
		'id' => 4, 'maker' => 'Bugatti', 'model' => 'Bugatti Chiron', 'made_year' => '2016', 'top_speed' => 420, 'acceleration_to_100' => 3,
		'power' => 1000, 'weight' => 1888, 'image' => 'img/bugatti.jpg'
	],

];

// получаем ID и обезвреживаем
$id = (int)$_GET['carId'];// приводим к INT

// если передана строка в ID
if(!$id){
	//die('Попытка взлома аааа');// прерываем выполнение файла
	exit('Попытка взлома аааа');// прерываем выполнение файла
}

// получение автомобиля по индексу в массиве
// $car = $cars[$id-1];

$car = [];
foreach ($cars as $key => $value) {
	if ($id === $value["id"]) {
		$car = $value;
	}
}

//$car = in_array($id, $cars);
//var_dump($car);


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$car['maker'].' '.$car['model']?></title>
    <style>
        .car{
            max-width: 600px;
            padding: 20px;
            background: skyblue;
            border-radius: 10px;
            margin: auto;
        }
        .car img{
            width: 100%;
        }
    </style>
</head>
<body>
	<div class="car">
        <img src="<?=$car['image']?>" alt="<?=$car['maker'].' '.$car['model']?>">
        <h2>Производитель: <?=$car['maker']?></h2>
        <h3>Модель: <?=$car['model']?></h3>
        <p>Год выпуска: <?=$car['made_year']?></p>
        <p>Максимальная скорость: <?=$car['top_speed']?></p>
        <p>Ускорение до 100 км/ч: <?=$car['acceleration_to_100']?></p>
        <p>Мощность: <?=$car['power']?></p>
        <p>Масса: <?=$car['weight']?></p>
        <a href="/">К списку авто</a>
    </div>
</body>
</html>
