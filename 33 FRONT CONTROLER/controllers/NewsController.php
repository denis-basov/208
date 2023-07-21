<?php
 require ROOT.'/models/News.php';

class NewsController
{
	/**
	 * метод для работы главной страницы с новостями
	 */
	public function actionIndex(){

		// выбор новостей из бд
		$newsList = News::getAllNews();
		echo $newsList;
		// отображение в документе
		//		require 'views/news_list_view.php';
	}

	/**
	 * метод для одной новости
	 */
	public static function actionView($id){
		echo 'метод для одной новости ' . $id;
	}
}