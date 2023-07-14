<?php require 'components/header.php';?>

<div class="pt-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<span>Категория</span>
				<h3><?=$news_list[0]['translation']?></h3>
				<p><?=$news_list[0]['description']?></p>
			</div>
		</div>
	</div>
</div>

<!-- блок с новостями -->
<?php require 'components/news-list.php';?>
<!-- /блок с новостями -->


<?php require 'components/subscribe.php';?>
<?php require 'components/footer.php';?>
