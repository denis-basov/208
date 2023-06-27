<?php

function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

//d($_COOKIE);

if(isset($_COOKIE['firstName']) && isset($_COOKIE['lastName'])){//если куки есть
	//выводим приветствие
	echo "<h1>Привет, $_COOKIE[lastName] $_COOKIE[firstName]</h1>";
	echo "<a href='user.php'>Личный кабинет</a>";
}else{
	if($_SERVER['REQUEST_METHOD'] === 'POST'){//если отправлена форма
		//d($_POST);

		//экранирует данные
		$firstName = htmlspecialchars(trim($_POST['firstName']));
		$lastName = htmlspecialchars(trim($_POST['lastName']));
		//echo "<h1>Привет, $lastName $firstName</h1>";

		//устанавливаем cookies (сохраняем на пк клиента нужные данные)
		setcookie("firstName", $firstName, time() + 60); //устанавливаем куки на минуту
		setcookie("lastName", $lastName, time() + 60);
		//setcookie("firstName", $firstName,time() + 60 * 60 * 24 * 30); //устанавливаем куки на месяц

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


