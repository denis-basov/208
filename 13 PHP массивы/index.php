<?php
// массивы
function d($value){
	echo '<pre>';
	print_r($value);
	echo '</pre>';
}

$fruits = ["Банан", "Ананас", "Слива", "Кокос", "Виноград"];
$days = [1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$user = [
	'userName' => 'Ivan111',
	'firstName' =>  'Иван',
	'lastName' => 'Иванов',
	'age' => 22,
	'hobby' => 'Спать',
	'isAdmin' => true,
	'phones' => [345,663,678,234],
];

//d($fruits);
//d($days);

//$user['age'] = 32;
////d($user['phones'][1]);
//d($user);

//echo "<h3>Login: $user[userName].</h3>";
//echo "<h3>Login: {$user['userName']}.</h3>";

//$fruits[] = 'Апельсин'; // добавление элемента в массив
//d($fruits);


$cars = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'https://images.unsplash.com/photo-1657451237796-dbd987527781?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg']
];

//echo $cars[0]['model'];
//echo $cars[2]['image'];
//d($cars);

// сформируйте строку
// ' ID: 2. Maker: Ferrari. Model: Agera R. Made year: 1995. Top speed: 325'

//$some_str = 'ID: ' . $cars[1]['id'] . ' Maker: ' . $cars[0]['maker'] . ' Model: ' . $cars[2]['model'] .
//	' Made year: ' . $cars[0]['made_year'] . ' Top speed: ' . $cars[0]['top_speed'];
//echo $some_str;

//echo 'ID: '.$cars[1]['id'].'. Maker: '.$cars[0]['maker'].'. Model: '.$cars[2]['model'].'.
//Made year: '.$cars[2]['made_year'].'. Top speed: '.$cars[2]['top_speed'].'.';

//echo "<h2>ID: {$cars[1]['id']}.</h2>
//			<p>Maker: {$cars[0]['maker']}.</p>
//			<p>Model: {$cars[2]['model']}.</p>
//			<p>Made year: {$cars[2]['made_year']}.</p>
//			<p>Top speed: {$cars[2]['top_speed']}.</p>
//			<img src='{$cars[0]['image']}' width='300'>";