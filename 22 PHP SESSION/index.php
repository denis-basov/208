<?php
session_start();// начинаем сессию

function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

if(isset($_SESSION['firstName']) && isset($_SESSION['lastName'])){//если есть данные в сессии
	//выводим приветствие
	echo "<h1>Привет, $_SESSION[firstName] $_SESSION[lastName]</h1>";
	echo "<a href='user.php'>Личный кабинет</a>";
}else{
	if($_SERVER['REQUEST_METHOD'] === 'POST'){//если отправлена форма
		//d($_POST);

		//экранирует данные
		$firstName = htmlspecialchars(trim($_POST['firstName']));
		$lastName = htmlspecialchars(trim($_POST['lastName']));
		//echo "<h1>Привет, $lastName $firstName</h1>";

		// записываем данные в сессию
		$_SESSION['firstName'] = $firstName;
		$_SESSION['lastName'] = $lastName;

		//перезагружаем страницу принудительно
		header("Location: /"); //GET
		exit;

	}else{//если страница загружена первый раз
		echo <<<_HTML_
		<form method="POST">
			<label>Имя: </label>
			<input type="text" name="firstName" placeholder="Введите имя"><br>
			
			<label>Фамилия: </label>
			<input type="text" name="lastName" placeholder="Введите фамилию"><br>
			
			<input type="submit" value="Войти">
		</form>
_HTML_;
	}
}


