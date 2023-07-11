<?php
// контроллер страницы с новостями

// подключаем модель для работы с новостями
require 'models/News.php';

$newsList = News::getNewsList();
//DBConnect::d($newsList);

$title = 'Новости';

// подключаем вид для отображения страницы с новостями
require 'views/news_list_view.php';
