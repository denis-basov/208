<?php

// название бд - test_db
// адрес сервера бд - localhost
// логин пользователя - root
// пароль пользователя - ''

class DBConnect
{
	// статические свойства
	private static $dbName = 'test_db';
	private static $dbHost = 'localhost';
	private static $dbLogin = 'root';
	private static $dbPassword = '';

	// приватный статический метод для формирования dsn
	private static function getDSN(){
		return 'mysql:dbname='.self::$dbName.';host='.self::$dbHost;
	}

	// метод для получения объекта соединения с бд
	//$dsn = 'mysql:dbname=test_db;host=localhost';
	public static function getConnection(){
		return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword );
		//return new PDO('mysql:dbname=test_db;host=localhost', 'root', '');
	}

	public static function d($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
}