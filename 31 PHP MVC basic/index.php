<?php
// контроллер главной страницы

// подключаем модель для работы с новостями
require 'models/News.php';

$limit = 3;
// вызываем метод для получения списка новостей
$newsLimitList = News::getLimitNewsList($limit);
//DBConnect::d($newsLimitList);

$title = 'Главная страница';

// отображаем разметку главной страницы (подключаем View(вид) главной страницы)
require 'views/index_view.php';
