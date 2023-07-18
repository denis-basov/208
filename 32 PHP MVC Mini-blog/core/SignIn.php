<?php
// вспомогательный класс для проверки введенных данных при входе на сайт

class SignIn
{

	/**
	 * метод для проверки логина
	 */
	private static function validateLogin($login){

		if(empty($login)){
			return 'Введите логин';
		}

		// проверка логина по БД
		$rowCount = Users::checkLoginUnique($login);

		// если такой логин есть в БД, пускаем
		if($rowCount === 0){// если логина нет в БД
			return 'Указанный логин не зарегистрирован';
		}
	}

	/**
	 * метод для проверки пароля
	 */
	private static function validatePassword($password, $login){

		if(empty($password)){
			return 'Введите пароль';
		}

		// получаем текущий пароль пользователя из БД
		$passwordDB = Users::getPasswordByLogin($login);

		// сравниваем пароли
		if(!password_verify($password, $passwordDB)){// если пароль НЕ соответствует хешу в бд
			return 'Пароль неверен';
		}

	}





	/**
	 * МЕТОД ДЛЯ ПРОВЕРКИ ВСЕХ ДАННЫХ ФОРМЫ ВХОДА
	 */
	public static function validateForm(){

		$errors = [];
		$input = [];

		$input['login'] = htmlspecialchars(trim($_POST['login']));
		$input['password'] = htmlspecialchars(trim($_POST['password']));

		// проверяем логин
		$loginError = self::validateLogin($input['login']);
		if($loginError){// если логин неверный
			$errors['login'] = $loginError;
		}else{ // только если логин найден в БД, проверяем пароль
			$passwordError = self::validatePassword($input['password'], $input['login']);
			if($passwordError){
				$errors['password'] = $passwordError;
			}
		}

		return [$errors, $input];
	}

	/**
	 * метод для обработки данных при успешной проверке
	 */
	public static function processForm($input){

		// делаем запрос к БД на получение id, first_name пользователя
		$userInfo = Users::getUserInfoSession($input['login']);

		// записываем данные в сессию
		session_start();
		$_SESSION['user_id'] = $userInfo['id'];
		$_SESSION['valid_user'] = $input['login'];
		$_SESSION['first_name'] = $userInfo['first_name'];

		// перенаправляем на главную
		header('Location: /');
		die();
	}


}