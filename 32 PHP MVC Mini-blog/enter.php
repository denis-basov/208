<?php
// контроллер страницы входа на сайт

require 'models/Users.php';
require 'core/SignIn.php';


/**
 * обработка формы входа
 */
if($_SERVER['REQUEST_METHOD'] === 'POST'){// если форма отправлена
	//	DBConnect::d($_POST);

	// проверяем данные
	list($errors, $input) = SignIn::validateForm();
	//DBConnect::d($errors);
	//DBConnect::d($input);

	// если есть ошибки при заполнении
	if($errors){// показываем форму снова
		require 'views/enter_view.php';
	}else{// если ошибок нет
		// пускаем пользователя на сайт
		SignIn::processForm($input);
	}

}else{ // если страница загружена впервые
	// показываем форму
	require 'views/enter_view.php';
}