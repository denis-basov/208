<?php
// Представление страницы детального просмотра новости

require 'components/header.php';?>


<div class="news_block">
	<div class="news_detail"><!-- данные о новости  -->
		<h1><?=$news_item['title']?></h1>
		<img src="<?=$news_item['news_image']?>" alt="<?=$news_item['title']?>">
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
			<img src="<?=$news_item['avatar']?>" alt="<?=$news_item['first_name'].' '
			.$news_item['last_name']?>">
			<a href="author_detail.php?author_id=<?=$news_item['author_id']?>">
				<p><?=$news_item['first_name'].' '.$news_item['last_name']?></p>
			</a>
		</div>
		<div class="category_news"><!-- новости категории текущей новости  -->
			<h2>Последние новости категории <?=$news_item['category']?></h2>
			<?php foreach ($category_news as $news_item):?>
				<div class="category_news_item">
					<img src="<?=$news_item['news_image']?>" alt="<?=$news_item['title']?>">
					<h4><?=$news_item['title']?></h4>
					<p><?=$news_item['short_text']?></p>
					<a href="news_detail.php?news_id=<?=$news_item['id']?>">Подробнее...</a>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>



<?php
require 'components/footer.php';
?>
