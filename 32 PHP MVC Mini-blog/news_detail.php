<?php
// контроллер страницы детального просмотра новости

require 'models/News.php';
require 'models/Comments.php';

$id = (int)$_GET['news_id'];// получаем ID новости
$limit = 3; // количество новостей в боковой панели
$limit_images = 3; // количество картинок новостей категории

$news_item = News::getNewsItemById($id);// получаем новость по ID
//DBConnect::d($news_item);

// получаем картинки для отображения в тексте новости
$rand_images = News::getRandImagesByCategoryID($news_item['category_id'], $limit_images);

// получаем комментарии к текущей новости
$comments = Comments::getCommentsByNewsId($id);
//$commentsCount = Comments::getCountCommentsByNewsId($id);
$commentsCount = count($comments);

// получаем несколько новостей категории текущей новости
$limit_news_list_by_category_id = News::getLimitNewsListByCategoryId($news_item['category_id'], $limit);
//DBConnect::d($limit_news_list_by_category_id);

// получаем кол-во новостей по категориям
$news_count_by_categories = News::getNewsCountByCategories();
//DBConnect::d($news_count_by_categories);



// разделяем строку на массив
$news_item['text'] = explode("\r\n\r\n", $news_item['text']);


require 'views/news-detail_view.php';