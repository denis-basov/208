<?php
require 'DBConnect.php';

class News
{

	/**
	 * Метод для получения новостей
	 * Если лимит передан, выбираем ограниченное кол-во
	 * Если лимит не указан, выбираем все новости
	 */
	public static function getLimitNewsList($limit = 0){
		$pdo = DBConnect::getConnection();

		// если лимита нет, отображаем все новости
		$tail = ';';
		if($limit !== 0){ // если лимит задан
			$tail = "LIMIT :limit;";
		}

		$query = "SELECT news.id AS news_id, news.title, text, add_date, image,
									 authors.id AS author_id, first_name, last_name, avatar,
										 translation, class_name
							FROM news, authors, category
							WHERE author_id = authors.id
								AND category_id = category.id
							ORDER BY RAND() " . $tail;

		if($limit === 0){
			$result = $pdo->query($query);
		}else{
			$result = $pdo->prepare($query);
			$result->bindValue(':limit', $limit, PDO::PARAM_INT);
			$result->execute();
		}

		return $result->fetchAll();
	}

	/**
	 * Метод для получения списка новостей по ID категории
	 */
	public static function getNewsListByCategoryId($id){
		$pdo = DBConnect::getConnection();

		$query = "SELECT news.id AS news_id, news.title, text, add_date, image,
									 authors.id AS author_id, first_name, last_name, avatar,
										 translation, description, class_name
							FROM news, authors, category
							WHERE author_id = authors.id
								AND category_id = category.id
							AND category_id = ?
							ORDER BY add_date DESC;";

		$result = $pdo->prepare($query);
		$result->execute([$id]);

		return $result->fetchAll();
	}


	/**
	 * Метод получения данных об одной новости по ID
	 */
	public static function getNewsItemById($id){
		$pdo = DBConnect::getConnection();

		$query = "SELECT news.id AS news_id, news.title, text, add_date, image,
									 authors.id AS author_id, first_name, last_name, short_info, avatar,
										 category.id AS category_id, translation, class_name
							FROM news, authors, category
							WHERE author_id = authors.id
								AND category_id = category.id
								AND news.id = ?;";
		$result = $pdo->prepare($query);
		$result->execute([$id]);

		return $result->fetch();
	}

	/**
	 * Метод для получения случайных картинок новостей текущей категории
	 *
	 */
	public static function getRandImagesByCategoryID($id, $limit){
		$pdo = DBConnect::getConnection();

		$query = "SELECT title, image
							FROM news
							WHERE category_id = :category_id
							ORDER BY RAND()
							LIMIT :limit;";
		$result = $pdo->prepare($query);
		$result->bindValue(':category_id', $id, PDO::PARAM_INT);
		$result->bindValue(':limit', $limit, PDO::PARAM_INT);
		$result->execute();

		return $result->fetchAll();
	}

	/**
	 * Метод для получения ограниченного списка новостей по ID категории
	 * для вывода в сайдбаре
	 */
	public static function getLimitNewsListByCategoryId($id, $limit){
		$pdo = DBConnect::getConnection();

		$query = "SELECT id, title, add_date, image
							FROM news
							WHERE category_id = :category_id
							ORDER BY add_date DESC
							LIMIT :limit";

		$result = $pdo->prepare($query);
		$result->bindValue(':category_id', $id, PDO::PARAM_INT);
		$result->bindValue(':limit', $limit, PDO::PARAM_INT);
		$result->execute();

		return $result->fetchAll();
	}

	/**
	 * Метод для получения количества новостей по каждой категории
	SELECT home_type, AVG(price) as avg_price FROM Rooms
	GROUP BY home_type
	 */
	public static function getNewsCountByCategories(){
		$pdo = DBConnect::getConnection();

		$query = "SELECT category_id, translation, COUNT(category_id) as count 
							FROM news, category
							WHERE category_id = category.id
							GROUP BY category_id;";

		return $pdo->query($query)->fetchAll();
	}

}