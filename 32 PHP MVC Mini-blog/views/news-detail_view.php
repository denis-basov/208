<?php require 'components/header.php';?>

<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url(<?=$news_item['image']?>)">
	<div class="container">
		<div class="row same-height justify-content-center">
			<div class="col-md-12 col-lg-10">
				<div class="post-entry text-center">
					<span class="post-category text-white <?=$news_item['class_name']?> mb-3"><?=$news_item['translation']?></span>
					<h1 class="mb-4"><?=$news_item['title']?></h1>
					<div class="post-meta align-items-center text-center">
						<figure class="author-figure mb-0 mr-3 d-inline-block"><img src="<?=$news_item['avatar']?>" alt="<?=$news_item['first_name'].' '.$news_item['last_name']?>" class="img-fluid" /></figure>
						<span class="d-inline-block mt-1"><?=$news_item['first_name'].' '.$news_item['last_name']?></span>
						<span><?=$news_item['add_date']?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php require 'components/subscribe.php';?>
<?php require 'components/footer.php';?>
