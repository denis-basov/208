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


}