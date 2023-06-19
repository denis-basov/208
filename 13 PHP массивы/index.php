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
	'firstName' =>  'Иван',
	'lastName' => 'Иванов',
	'age' => 22,
	'hobby' => 'Спать'
];

//d($fruits);
//d($days);
d($user);
