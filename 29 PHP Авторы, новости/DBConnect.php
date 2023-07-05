<?php


class DBConnect
{
	// статические свойства
	private static $dbName = '208_news';
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
		return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword, [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		]);
		//return new PDO('mysql:dbname=test_db;host=localhost', 'root', '');
	}

	public static function d($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}
}