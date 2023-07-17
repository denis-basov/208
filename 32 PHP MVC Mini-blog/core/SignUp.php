<?php
// вспомогательный класс для проверки введенных данных при регистрации

class SignUp
{

	/**
	 * метод для проверки имени
	 */
	private static function validateFirstName($firstName){
		$regExp = "/^[а-яё]{2,}$/ui"; // русские буквы от двух штук без учета регистра

		if( strlen($firstName) === 0 ){// если строка пуста
			return 'Введите имя';
		}elseif (!preg_match($regExp, $firstName)){ // если строка НЕ соответствует
			return 'Только русские буквы от двух штук';
		}
	}

	/**
	 * метод для проверки фамилии
	 */
	private static function validateLastName($lastName){
		$regExp = "/^[а-яё]{2,}$/ui";

		if(empty($lastName)){ // если пусто
			return 'Введите фамилию';
		}elseif(!preg_match($regExp, $lastName)){
			return 'Фамилия должна состоять только из русских букв и быть не менее двух символов';
		}
	}

	/**
	 * метод для проверки логина
	 */
	private static function validateLogin($login){
		// только латиница и цифры, первая - буква
		$regExp =  "/^[a-z][a-z0-9]+$/i";

		if(empty($login)){
			return 'Введите логин';
		}elseif(!preg_match($regExp, $login)){
			return 'Логин должен состоять не менее чем из двух символов латиницы или цифр, первая - буква';
		}


		// проверка логина по БД на уникальность
		$rowCount = Users::checkLoginUnique($login);

		if($rowCount){ // если есть хоть одна строка в БД
			return 'Такой логин уже занят';
		}

	}

	/**
	 * метод для проверки емейла
	 */
	private static function validateEmail($email){
		$regExp = "/^.+@.+\..+$/ui";

		if(empty($email)){
			return 'Введите адрес электронной почты';
		}elseif(!preg_match($regExp, $email)){
			return 'Адрес электронной почты введен в неверном формате';
		}

		// проверка по БД
		$rowCount = Users::checkEmailUnique($email);

		if($rowCount){ // если есть хоть одна строка в БД
			return 'Такой адрес электронной почты уже зарегистрирован';
		}
	}

	/**
	 * метод для проверки пароля
	 */
	private static function validatePassword($password){
		$regExp = "/^.{6,}$/";

		if(empty($password)){
			return 'Введите пароль';
		}elseif(!preg_match($regExp, $password)){
			return 'Пароль должен состоять не менее чем из шести произвольных символов';
		}
	}

	/**
	 * метод для проверки картинки
	 */
	private static function validateAvatar($avatar){
		$allowedSize = 2097152; // максимально допустимый размер в байтах
		$allowedExtensions = ['image/gif', 'image/jpeg', 'image/png'];

		if($avatar['size'] === 0){// если размер картинки 0, то она не приложена
			return 'Выберите себе аватар';
		}elseif($avatar['size'] > $allowedSize){ // если картинка более 2Мб
			return 'Размер фото должен быть не более 2 мегабайт';
		}elseif(!in_array($avatar['type'], $allowedExtensions)){ // если в массиве нет указанного элемента
			return 'Только картинки в форматах gif, jpeg, png';
		}
	}



	/**
	 * МЕТОД ДЛЯ ПРОВЕРКИ ВСЕХ ДАННЫХ ФОРМЫ
	 */
	public static function validateForm(){
		//DBConnect::d($_POST);
		//DBConnect::d($_FILES);

		// объявляем массивы для ошибок и введенных данных
		$errors = [];
		$input = [];

		// экранируем данные, обрезаем пробелы с краев строки
		$input['first_name'] = htmlspecialchars(trim($_POST['first_name']));
		$input['last_name'] = htmlspecialchars(trim($_POST['last_name']));
		$input['login'] = htmlspecialchars(trim($_POST['login']));
		$input['email'] = htmlspecialchars(trim($_POST['email']));
		$input['password'] = htmlspecialchars(trim($_POST['password']));
		$input['avatar'] = $_FILES['avatar'];

		//DBConnect::d($input);

		/**
		 * проверка данных
		 */
		// проверка имени
		$firstNameError = self::validateFirstName($input['first_name']);
		if($firstNameError){// если есть ошибка
			$errors['first_name'] = $firstNameError; // кладем ее в массив с ошибками
		}

		// проверка фамилии
		$lastNameError = self::validateLastName($input['last_name']);
		if($lastNameError){
			$errors['last_name'] = $lastNameError;
		}

		// проверка логина
		$loginError = self::validateLogin($input['login']);
		if($loginError){
			$errors['login'] = $loginError;
		}

		// проверка емейла
		$emailError = self::validateEmail($input['email']);
		if($emailError){
			$errors['email'] = $emailError;
		}

		// проверка пароля
		$passwordError = self::validatePassword($input['password']);
		if($passwordError){
			$errors['password'] = $passwordError;
		}

		// поверка аватарки
		$avatarError = self::validateAvatar($input['avatar']);
		if($avatarError){
			$errors['avatar'] = $avatarError;
		}


		//DBConnect::d($errors);
		// возвращаем массив с ошибками и данными пользователя
		return [$errors, $input];
	} // validateForm()


	/**
	 * метод для сохранения аватарки при успешной проверке
	 */
	private static function saveAvatar($avatar){
		// создаем путь, куда сохранить аватар
		$avatarPath = 'template/images/users/'.time().'_'.$avatar['size'].'_'.$avatar['name'];

		// перемещаем аватар
		move_uploaded_file($avatar['tmp_name'], $avatarPath);

		return $avatarPath;// возвращаем сформированный путь для сохранения в бд
	}


	/**
	 * метод для обработки данных при успешной проверке
	 */
	public static function processForm($input){
		// шифрование пароля
		$input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);

		// перемещаем аватар
		$input['avatar'] = self::saveAvatar($input['avatar']);

		// добавление пользователя в БД
		$input['user_id'] = Users::addNewUser($input);

		//записываем данные в сессию
		session_start();
		$_SESSION['user_id'] = $input['user_id'];
		$_SESSION['valid_user'] = $input['login'];

		// перенаправляем на главную
		header('Location: /');
		die();

	}
}