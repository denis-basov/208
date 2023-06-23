<?php
function consoleLog($value) {
	echo "<script>console.log('".json_encode(print_r($value, true))."')</script>";
}

//consoleLog($_POST);

// экранируем, удаляем пробелы с концов строки
$firstName = htmlspecialchars(trim($_POST['firstName']));
$lastName = htmlspecialchars(trim($_POST['lastName']));
$login = htmlspecialchars(trim($_POST['login']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));
$message = htmlspecialchars(trim($_POST['message']));


//$arr = ["firstName", "lastName", "login", "email", "password", "message"];
//$user = [];
//foreach ($arr as $el) {
//	$user[$el] = htmlspecialchars(trim($_POST[$el]));
//}
//consoleLog($user);

//$user = [];
//foreach($_POST as $key => $value){
//	$user[$key] = htmlspecialchars(trim($value));
//}
//consoleLog($user);


// foreach($_POST as $key => $value)	$$key = htmlspecialchars(trim($value));


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<div class="user">
		<h2>Добро пожаловать, <?=$firstName.' '.$lastName?></h2>
		<p>Ваш логин: <?=$login?></p>
		<p>Ваш адрес электронной почты: <?=$email?></p>
		<p>Ваш пароль: <?=$password?></p>
		<p>Ваше сообщение: <?=$message?></p>
	</div>
</body>
</html>