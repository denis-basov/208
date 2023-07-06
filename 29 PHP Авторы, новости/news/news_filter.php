<?php
// страница просмотра списка новостей с фильтром по категории

require '../DBConnect.php';
$pdo = DBConnect::getConnection();


/**
 * получаем список категорий для вывода в фильтре
 */
$query = "SELECT DISTINCT category FROM news;";
$categories = $pdo->query($query)->fetchAll();
//DBConnect::d($categories);


/**
 * Если категория выбрана, получаем новости по указанной категории
 * Если категория не выбрана, получаем все новости
 */

// если отправлена форма с выбором по категории и категория не пуста
if(isset($_POST['category']) && $_POST['category']){
	//DBConnect::d($_POST);

	// обезвредить данные
	$category = htmlspecialchars(trim($_POST['category']));

	// получаем новости по указанной категории
	$query = "SELECT news.id AS news_id, category, title, short_text, news_image, add_date,
                authors.id AS author_id, first_name, last_name
                FROM news, authors
                WHERE author_id = authors.id
                AND category = ?
        	    ORDER BY add_date DESC;";
	$result = $pdo->prepare($query);
	$result->execute([$category]);
}else{ // если первая загрузка страницы, категория не выбрана

    // выбираем все новости
	$query = "SELECT news.id AS news_id, category, title, short_text, news_image, add_date,
					authors.id AS author_id, first_name, last_name
					FROM news, authors
					WHERE author_id = authors.id
        	        ORDER BY add_date DESC;";
	$result = $pdo->query($query);
}



?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Новости с фильтром</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="news">
		<h1>Новости</h1>
		<a href="/">На главную</a>

		<!--	фильтр по категориям новостей	-->
		<form method="POST" class="filter_category">
			<label>Фильтр по категории</label><br>
			<select name="category">
				<option value="">--Выберите категорию--</option>
				<?php foreach ($categories as $category):?>
					<option value="<?=$category['category']?>"><?=$category['category']?></option>
				<?php endforeach;?>
			</select>

			<input type="submit" value="Выбрать">
		</form>

		<!--	фильтр по авторам	-->
		<form method="POST" class="filter_author">
			<label>Фильтр по автору</label><br>
			<select name="author">
				<option value="">--Выберите автора--</option>
				<option value="1">Иван Петров</option>
				<option value="2">Алексей Сергеев</option>
			</select>

			<input type="submit" value="Выбрать">
		</form>

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
        <a href="/">На главную</a>
	</div>
</body>
</html>
