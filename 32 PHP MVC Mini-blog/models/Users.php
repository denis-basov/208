<?php
// модель для работы с пользователями
require 'DBConnect.php';

class Users
{
	/**
	 * проверка логина по БД на уникальность при регистрации
	 */
	public static function checkLoginUnique($login){
		$pdo = DBConnect::getConnection();

		$query  ="SELECT login
							FROM users
							WHERE login = ?";
		$result = $pdo->prepare($query);
		$result->execute([$login]);

		return $result->rowCount();
	}

	/**
	 * проверка почты по БД на уникальность при регистрации
	 */
	public static function checkEmailUnique($email){
		$pdo = DBConnect::getConnection();

		$query = "SELECT email
							FROM users
							WHERE email = ?";

		$result = $pdo->prepare($query);
		$result->execute([$email]);

		return $result->rowCount();
	}

	/**
	 * добавление нового юзера в БД
	 */
	public static function addNewUser($user){
		$pdo = DBConnect::getConnection();

		$query = "INSERT INTO users(first_name, last_name, login, email, password, image)
							VALUES(?,?,?,?,?,?);";

		$result = $pdo->prepare($query);
		$result->execute([$user['first_name'], $user['last_name'], $user['login'],
			$user['email'], $user['password'], $user['avatar']]);

		return $pdo->lastInsertId();// получаем id добавленного юзера
	}


}