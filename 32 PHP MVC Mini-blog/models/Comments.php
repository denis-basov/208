<?php
// модель для работы с комментариями


class Comments
{

	/**
	 * Метод для получения комментариев конкретной новости по ID
	 */
	public static function getCommentsByNewsId($id){
		$pdo = DBConnect::getConnection();

		$query = "SELECT comment, comments.add_date,
       				first_name, last_name, image
							FROM comments, users
							WHERE user_id = users.id
							AND news_id = ?;";
		$result = $pdo->prepare($query);
		$result->execute([$id]);

		return $result->fetchAll();
	}

	/**
	 * Метод для получения количества комментариев к указанной новости
	 */
	public static function getCountCommentsByNewsId($id){
		$pdo = DBConnect::getConnection();

		$query = "SELECT COUNT(news_id) AS news_count
							FROM comments
							WHERE news_id = ?;";
		$result = $pdo->prepare($query);
		$result->execute([$id]);

		return $result->fetch()['news_count'];
	}

	/**
	 * метод для добавления нового комментария к новости от пользователя
	 */
}