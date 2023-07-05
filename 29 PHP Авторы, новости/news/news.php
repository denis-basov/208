<?php
// страница просмотра списка новостей

require '../DBConnect.php';
$pdo = DBConnect::getConnection();

$query = "SELECT news.id AS news_id, category, title, short_text, news_image, add_date,
					authors.id AS author_id, first_name, last_name
					FROM news, authors
					WHERE author_id = authors.id
        	ORDER BY add_date DESC;";
$result = $pdo->query($query);
//DBConnect::d($result->fetchAll());


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Новости</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="news">
		<h1>Новости</h1>
		<?php while($news_item = $result->fetch()):?>
			<div class="news_item">
                <a class="link" href="news_detail.php?news_id=<?=$news_item['news_id']?>">
				    <h2><?=$news_item['title']?>. Идентификатор: <?=$news_item['news_id']?> </h2>
                </a>
				<div class="news_preview">
                    <a href="news_detail.php?news_id=<?=$news_item['news_id']?>">
					    <img src="../<?=$news_item['news_image']?>" alt="<?=$news_item['title']?>">
                    </a>
					<p><?=$news_item['short_text']?>...</p>
				</div>
				<?php $date_time = explode(' ', $news_item['add_date'])?>
                <span>Дата: <strong><?= $date_time[0]; ?></strong></span>
				<span>Время: <strong><?= $date_time[1]; ?></strong></span>
				<span>Автор:
                    <a class="link" href="author_detail.php?author_id=<?=$news_item['author_id']?>">
                        <strong><?=$news_item['first_name'].' '.$news_item['last_name']?></strong>
                    </a>
                </span>
				<span>Категория: <strong><?=$news_item['category']?></strong></span>
				<a class="news_link" href="news_detail.php?news_id=<?=$news_item['news_id']?>">Подробнее...</a>

			</div>
		<?php endwhile;?>
	</div>
</body>
</html>
