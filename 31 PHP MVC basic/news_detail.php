<?php
// контроллер страницы детального просмотра новости

// подключаем модель для работы с новостями
require 'models/News.php';

// получаем ID новости
$newsId = (int)$_GET['news_id'];

// получаем данные о новости по ID
$news_item = News::getNewsItemById($newsId);

// добавляем в строку с полным текстом статьи переносы
$news_item['full_text'] = str_replace("\r\n\r\n",'</p><p>', $news_item['full_text']);
// задаем title для страницы с новостью
$title = $news_item['title'];
//DBConnect::d($news_item);

// получаем новости категории текущей новости
$category_news = News::getLimitNewsListByCategory($news_item['category'], 3);
//DBConnect::d($category_news);

// вид страницы детального просмотра новости
require 'views/news_detail_view.php';