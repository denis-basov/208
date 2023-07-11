<?php
// модель для работы с новостями
require 'DBConnect.php';

class News
{

	/**
	 * метод для получения ограниченного списка новостей
	 * @param $limit - количество запрашиваемых новостей
	 * @return bool|array - массив с новостями или false
	 */
	public static function getLimitNewsList($limit){
		$pdo = DBConnect::getConnection();

		$query = "SELECT news.id AS news_id, category, title, short_text, news_image, add_date,
							authors.id AS author_id, first_name, last_name
							FROM news, authors
							WHERE author_id = authors.id
							ORDER BY add_date DESC
							LIMIT $limit;";

//		$result = $pdo->query($query);
//		$newsList = $result->fetchAll();
//		return $newsList;

		return $pdo->query($query)->fetchAll();
	}
	
	/**
	 * метод для получения всего списка новостей
	 */
	public static function getNewsList(){
		$pdo = DBConnect::getConnection();

		$query = "SELECT news.id AS news_id, category, title, short_text, news_image, add_date,
							authors.id AS author_id, first_name, last_name
							FROM news, authors
							WHERE author_id = authors.id
							ORDER BY add_date DESC;";
		return $pdo->query($query)->fetchAll();
	}

	/**
	 * метод для получения одной новости по ID
	 */
	public static function getNewsItemById($id){
		$pdo = DBConnect::getConnection();

		$query = "SELECT news.id AS news_id, category, title, full_text, news_image, add_date,
					authors.id AS author_id, first_name, last_name, avatar
					FROM news, authors
					WHERE author_id = authors.id
					AND news.id = ?;";
		$result = $pdo->prepare($query);
		$result->execute([$id]);
		return $result->fetch();
	}

	/**
	 * метод для получения нескольких новостей категории новости
	 */
	public static function getLimitNewsListByCategory($category, $limit){
		$pdo = DBConnect::getConnection();

		$query = "SELECT id, title, short_text, news_image
          FROM news
          WHERE category = '$category'
          ORDER BY add_date DESC
          LIMIT $limit;";

		return $pdo->query($query)->fetchAll();
	}
}