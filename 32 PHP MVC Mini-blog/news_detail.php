<?php
// контроллер страницы детального просмотра новости

require 'models/News.php';

$id = (int)$_GET['news_id'];// получаем ID новости
$limit = 3; // количество новостей в боковой панели

$news_item = News::getNewsItemById($id);// получаем новость по ID
DBConnect::d($news_item);


require 'views/news-detail_view.php';