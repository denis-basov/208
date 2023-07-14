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

	/**
	 * метод для проверки логина
	 */

	/**
	 * метод для проверки емейла
	 */

	/**
	 * метод для проверки пароля
	 */

	/**
	 * метод для проверки картинки
	 */

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

		DBConnect::d($input);

		/**
		 * проверка данных
		 */
		// проверка имени
		$firstNameError = self::validateFirstName($input['first_name']);
		if($firstNameError){// если есть ошибка
			$errors['first_name'] = $firstNameError; // кладем ее в массив с ошибками
		}




		// возвращаем массив с ошибками и данными пользователя
		return [$errors, $input];
	}
}