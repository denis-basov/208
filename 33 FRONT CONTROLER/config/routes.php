<?php
// файл с маршрутами - аналог ссылок на сайте
return [
	'news/([0-9]+)' => 'news/view/$1', // путь просмотра новости детально
	'news' => 'news/index', // путь для главной страницы новостного раздела
	'shop' => 'shop/index',
//	'shop/([0-9]+)' => 'shop/view/$1',
//	'shop/([a-z]+)' => 'shop/category/$1',
//  'news/([a-z]+)/([0-9]+)/([0-9]+)' => 'news/category/$1/$2/$3'

];
// 'news/index' => NewsController.php - контроллер / actionIndex - метод контроллера
// 'news/1' => 'news/view/1'
// 'news/2' => 'news/view/2'
// 'news/3' => 'news/view/3'
// 'news/4' => 'news/view/4'