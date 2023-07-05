<?php
// страница детального просмотра одной новости
require '../DBConnect.php';
$pdo = DBConnect::getConnection();


// 1. Получить идентификатор новости
$news_id = (int)$_GET['news_id'];
//var_dump($news_id);

if(!$news_id){// если идентификатор не число
	header('Location: /404.html'); // перенаправляем на страницу с ошибкой
}
//var_dump($news_id);

// 2. Получить данные о новости и авторе этой новости из БД по идентификатору
// id, category, title, full_text, news_image, add_date
// id, first_name, last_name, avatar
$query = "SELECT news.id AS news_id, category, title, full_text, news_image, add_date,
					authors.id AS author_id, first_name, last_name, avatar
					FROM news, authors
					WHERE author_id = authors.id
					AND news.id = ?;";

// 2.1 Подготовка запроса
$result = $pdo->prepare($query);
// 2.2 Выполнение
$result->execute([$news_id]);
// 3 Получаем данные
$news_item = $result->fetch();
//DBConnect::d($news_item);

// 4. Отображаем данные
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$news_item['title']?></title>
</head>
<body>
	<h1><?=$news_item['title']?></h1>
</body>
</html>


