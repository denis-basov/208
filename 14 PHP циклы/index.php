<?php
// циклы
function d($value){
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}
$fruits = ["Банан", "Ананас", "Слива", "Кокос", "Виноград", 'Апельсин'];
$days = [1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$user = [
	'userName' => 'Ivan111',
	'firstName' =>  'Иван',
	'lastName' => 'Иванов',
	'age' => 22,
	'hobby' => 'Спать',
	'isAdmin' => true,
//	'phones' => [345,663,678,234],
];
$cars = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'https://images.unsplash.com/photo-1657451237796-dbd987527781?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'https://images.unsplash.com/photo-1622058232252-a8657f5b2979?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'https://images.unsplash.com/photo-1596906673164-fffb05b8333d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80']
];

// while
//$i = 0;
//while($i < 10){
//	echo "<p>$i</p>";
//	$i++;
//}
//
//$i = 0;
//while($i < count($fruits)){
//	echo "<p>$fruits[$i]</p>";
//	$i++;
//}

// for
//echo '<div class="cars">';
//for($i = 0; $i < count($cars); $i++){
//	echo "<div class='car'>";
//		echo "<p>Производитель: {$cars[$i]['maker']}</p>";
//		echo "<p>Модель: {$cars[$i]['model']}</p>";
//	echo "</div>";
//}
//echo '</div>';

// foreach
//foreach ($fruits as $fruit){
//	echo "<p>$fruit</p>";
//}

/*
//foreach ($days as $day){
//	echo "<p>$day</p>";
//}

//foreach ($user as $value){
//	echo "<p>Ключ: $value</p>";
//}

//foreach ($user as $key => $value){
//	echo "<p>$key: $value</p>";
//}
*/

//echo '<div class="cars">';
//foreach($cars as $key => $car){
//	echo "<div class='car car-". $key+1 ."'>";
//		echo "<h2>Производитель: $car[maker]</h2>";
//		echo "<p>Модель: $car[model]</p>";
//		echo "<p>Год производства: $car[made_year]</p>";
//	echo "<hr></div>";
//}
//echo '</div>';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cars</title>
	<style>
		.cars{
				max-width: 1200px;
				background: lightgray;
				margin: auto;
				padding: 20px;
				display: flex;
				justify-content: space-evenly;
				gap: 20px;
		}
		.cars .car{
				max-width: 300px;
				background: skyblue;
				padding: 15px;
		}
    .cars .car span{
				color: brown;
				font-weight: bold;
		}

		img{
				width: 100%;
		}
	</style>
</head>
<body>

	<div class="cars">
		<?php foreach($cars as $key => $car):?>
			<div class="car car-<?=$key+1?>">
				<img src="<?=$car['image']?>" alt="<?=$car['maker']. ' ' .$car['model']?>">
				<h2>Производитель: <span><?=$car['maker']?></span></h2>
				<p>Модель: <span><?=$car['model']?></span></p>
				<p>Год производства: <span class="made_year"><?=$car['made_year']?></span></p>
				<p>Максимальная скорость: <span><?=$car['top_speed']?></span></p>
				<p>Ускорение до 100 км/ч: <span><?=$car['acceleration_to_100']?></span></p>
				<p>Мощность: <span><?=$car['power']?></span></p>
				<p>Масса: <span><?=$car['weight']?></span></p>
			</div>
		<?php endforeach;?>
	</div>

	<script>
      let year = document.querySelector('.car-3 .made_year');
      year.textContent = '2011';
			//year.style.display = 'none';
	</script>
</body>
</html>
