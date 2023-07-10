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
}