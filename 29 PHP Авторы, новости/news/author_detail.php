<?php
// страница просмотра автора

require '../DBConnect.php';
$pdo = DBConnect::getConnection();

// 1. Получаем ID автора
$author_id = (int)$_GET['author_id'];

if(!$author_id){// если идентификатор не число
	header('Location: /404.html'); // перенаправляем на страницу с ошибкой
	die();
}

// 2. Получение данных об авторе
$query = "SELECT id, first_name, last_name, age, country, avatar
					FROM authors
					WHERE id = ?";
$result	= $pdo->prepare($query);
$result->execute([$author_id]);

$author = $result->fetch();
//DBConnect::d($author);

// 3 Получаем новости текущего автора
$query = "SELECT id, category, title, short_text, news_image, add_date
					FROM news
					WHERE author_id = ?";
$result = $pdo->prepare($query);
$result->execute([$author_id]);

$author_news = $result->fetchAll();
//DBConnect::d($result->fetchAll());
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$author['first_name'].' '.$author['last_name']?></title>
</head>
<body>
<!-- данные об авторе-->
	<div class="author_info">
		<h1><?=$author['first_name'].' '.$author['last_name']?></h1>
		<p>Возраст: <?=$author['age']?></p>
		<p>Страна проживания: <?=$author['country']?></p>
		<img src="../<?=$author['avatar']?>" width="500" alt="<?=$author['first_name'].' '.$author['last_name']?>">
	</div>

<!-- данные о новостях автора-->
	<div class="author_news">
		<?php foreach ($author_news as $news_item):?>
			<a class="link" href="news_detail.php?news_id=<?=$news_item['id']?>">
				<h2><?=$news_item['title']?></h2>
			</a>
		<?php endforeach;?>
	</div>
	</body>
</html>
