<?php
// страница детального просмотра одной новости
require '../DBConnect.php';
$pdo = DBConnect::getConnection();


// 1. Получить идентификатор новости
$news_id = (int)$_GET['news_id'];
//var_dump($news_id);

if(!$news_id){// если идентификатор не число
	header('Location: /404.html'); // перенаправляем на страницу с ошибкой
    die();
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

/**
 * 4. добавляем в строку с полным текстом статьи переносы
 * <p>Тото Вольфф говорил о задачах на этап…\r\n\r\nТото Вольфф: «Уик-энд в Баку был сложным для нас</p>
 * <p>Тото Вольфф говорил о задачах на этап…</p><p>Тото Вольфф: «Уик-энд в Баку был сложным для нас</p>
 */
//$str = '<h1>a, b, c, d</h1>';
//$str = str_replace(',', ':', $str);
//echo $str;
$news_item['full_text'] = str_replace("\r\n\r\n",'</p><p>', $news_item['full_text']);

/**
 * $news_item['category'] - содержит значение текущей категории (SportNews),
 * category - столбец с категорией новости
 * делаем запрос к бд по категории и получаем несколько новостей
 */
$query = "SELECT id, title, short_text, news_image
          FROM news
          WHERE category = '$news_item[category]'
          ORDER BY add_date DESC
          LIMIT 3;";
$result = $pdo->query($query);
//DBConnect::d($result->fetchAll());
$category_news = $result->fetchAll();

// 5. Отображаем данные
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$news_item['title']?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="news_block">
        <div class="news_detail"><!-- данные о новости  -->
            <h1><?=$news_item['title']?></h1>
            <img src="../<?=$news_item['news_image']?>" alt="<?=$news_item['title']?>">
            <p>Категория: <?=$news_item['category']?></p>
            <div class="full_text">
                <p><?=$news_item['full_text']?></p>
            </div>
            <p>Дата публикации: <?=$news_item['add_date']?></p>
            <a href="/">Главная страница</a>
            <a href="news.php">К списку новостей</a>
        </div>
        <div class="sidebar">
            <div class="author"><!-- данные об авторе  -->
                <img src="../<?=$news_item['avatar']?>" alt="<?=$news_item['first_name'].' '
                .$news_item['last_name']?>">
                <a href="author_detail.php?author_id=<?=$news_item['author_id']?>">
                    <p><?=$news_item['first_name'].' '.$news_item['last_name']?></p>
                </a>
            </div>
            <div class="category_news"><!-- новости категории текущей новости  -->
                <h2>Последние новости категории <?=$news_item['category']?></h2>
                <?php foreach ($category_news as $news_item):?>
                    <div class="category_news_item">
                        <img src="../<?=$news_item['news_image']?>" alt="<?=$news_item['title']?>">
                        <h4><?=$news_item['title']?></h4>
                        <p><?=$news_item['short_text']?></p>
                        <a href="news_detail.php?news_id=<?=$news_item['id']?>">Подробнее...</a>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</body>
</html>


