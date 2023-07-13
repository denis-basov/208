<?php
// контроллер страницы просмотра новостей по категории

require 'models/News.php';
$id = 1;

$news_list = News::getNewsListByCategoryId($id);
DBConnect::d($news_list);
?>



<div class="py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<span>Category</span>
				<h3>Sports</h3>
				<p>Category description here.. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam error eius quo, officiis non maxime quos reiciendis perferendis doloremque maiores!</p>
			</div>
		</div>
	</div>
</div>
