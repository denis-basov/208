<?php
$user = [
	'userName' => 'Ivan111',
	'firstName' =>  'Иван',
	'lastName' => 'Иванов',
	'age' => 22,
	'hobby' => 'Спать',
	'isAdmin' => true,
	'phones' => [345,663,678],
	'avatar' => 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'
];

$isAdmin = $user['isAdmin'] ? 'Да': 'Нет';
$userPhones = implode(', ', $user['phones']); // объединяем массив в строку