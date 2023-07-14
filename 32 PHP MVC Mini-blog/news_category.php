<?php
// контроллер страницы просмотра новостей по категории

require 'models/News.php';
$id = (int)$_GET['category_id'];// получаем ID категории


$news_list = News::getNewsListByCategoryId($id);
//DBConnect::d($news_list);

$title = 'Категория ' . $news_list[0]['translation'];
$news_list_title = 'Новости категории ' . $news_list[0]['translation'];

require 'views/news-category_view.php';





