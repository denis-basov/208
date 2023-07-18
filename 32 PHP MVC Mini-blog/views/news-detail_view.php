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

<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="post-content-body">
                    <!-- текст новости  -->
                    <?php foreach ($news_item['text'] as $parKey => $par):?>
                       <?php if($parKey === 0):?>
                            <?="<p>$par</p>"?>
                            <div class="row mb-5 mt-5">
                                <?php foreach($rand_images as $key => $image):?>
                                      <!-- если первая картинка, растягиваем на всю ширину -->
                                    <?php if ($key === 0 && count($rand_images) % 2 === 1): ?>
                                          <div class="col-md-12 mb-4">
                                              <img src="<?=$image['image']?>" alt="<?=$image['title']?>"
                                                   class="img-fluid
                                        rounded" />
                                          </div>
                                    <?php else:?>
                                          <div class="col-md-6 mb-4">
                                              <img src="<?=$image['image']?>" alt="<?=$image['title']?>" class="img-fluid rounded" />
                                          </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>
                       <?php else:?>
                            <?="<p>$par</p>"?>
                       <?php endif;?>
                    <?php endforeach;?>
                </div>

                <div class="pt-5">
                    <p>Категория:
                        <a href="news_category.php?category_id=<?=$news_item['category_id']?>"><?=$news_item['translation']?></a>
                    </p>
                </div>

                <!-- комментарии к новости -->
                <div class="pt-5">
                    <h3 class="mb-5">Комментариев: <?=$commentsCount?></h3>
                    <ul class="comment-list">
                        <?php foreach($comments as $comment):?>
                            <li class="comment">
                                <div class="vcard">
                                    <img src="<?=$comment['image']?>" alt="<?=$comment['first_name'].' '.$comment['last_name']?>" />
                                </div>
                                <div class="comment-body">
                                    <h3><?=$comment['first_name'].' '.$comment['last_name']?></h3>
                                    <div class="meta"><?=$comment['add_date']?></div>
                                    <p><?= str_replace("\r\n", "</p><p>", $comment['comment'])?></p>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                    <!-- END comment-list -->

                    <!-- если пользователь авторизован, показываем форму для комментирования   -->
					<?php if( isset($_SESSION['valid_user']) ):?>
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Оставить комментарий</h3>
                            <form method="POST" class="p-5 bg-light">

                                <div class="form-group">
                                    <label for="message">Комментарий</label>
                                    <textarea name="message" id="message" cols="30" rows="10"
                                              class="form-control"></textarea>
                                </div>
                                <span class="input-error"><?=$commentError ?? ''?></span>

                                <div class="form-group">
                                    <input type="submit" value="Отправить комментарий" class="btn btn-primary" />
                                </div>

                            </form>
                        </div>
                    <?php endif;?>

                </div>
                <!-- /комментарии к новости -->

            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box search-form-wrap">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter" />
                        </div>
                    </form>
                </div>
                <!-- END sidebar-box -->

                <!-- автор  -->
                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="<?=$news_item['avatar']?>" alt="<?=$news_item['first_name'].' '.$news_item['last_name']?>" class="img-fluid mb-5" />
                        <div class="bio-body">
                            <h2><?=$news_item['first_name'].' '.$news_item['last_name']?></h2>
                            <p class="mb-4">
								<?=$news_item['short_info']?>
                            </p>
                            <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Читать биографию</a></p>
                            <p class="social">
                                <a href="#" class="p-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="p-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="p-3"><span class="icon-twitter"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END sidebar-box -->

                <!-- новости -->
                <div class="sidebar-box">
                    <h3 class="heading">Последние новости категории <?=$news_item['translation']?></h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            <?php foreach ($limit_news_list_by_category_id as $news_item):?>
                                <li>
                                    <a href="news_detail.php?news_id=<?=$news_item['id']?>">
                                        <img src="<?=$news_item['image']?>" alt="<?=$news_item['title']?>" class="mr-4" />
                                        <div class="text">
                                            <h4><?=$news_item['title']?></h4>
                                            <div class="post-meta">
                                                <span class="mr-2"><?=$news_item['add_date']?></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->

                <!-- кол-во новостей по категориям  -->
                <div class="sidebar-box">
                    <h3 class="heading">Категории</h3>
                    <ul class="categories">
                        <?php foreach ($news_count_by_categories as $category_info):?>
                            <li>
                                <a href="news_category.php?category_id=<?=$category_info['category_id']?>">
                                  <?=$category_info['translation']?>
                                    <span>(<?=$category_info['count']?>)</span>
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <!-- END sidebar-box -->

            </div>
            <!-- END sidebar -->
        </div>
    </div>
</section>


<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2>More Related Posts</h2>
            </div>
        </div>

        <div class="row align-items-stretch retro-layout">
            <div class="col-md-5 order-md-2">
                <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/img_4.jpg')">
                    <span class="post-category text-white bg-danger">Travel</span>
                    <div class="text">
                        <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                        <span>February 12, 2019</span>
                    </div>
                </a>
            </div>

            <div class="col-md-7">
                <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/img_1.jpg')">
                    <span class="post-category text-white bg-success">Nature</span>
                    <div class="text text-sm">
                        <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                        <span>February 12, 2019</span>
                    </div>
                </a>

                <div class="two-col d-block d-md-flex">
                    <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/img_2.jpg')">
                        <span class="post-category text-white bg-primary">Sports</span>
                        <div class="text text-sm">
                            <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                            <span>February 12, 2019</span>
                        </div>
                    </a>
                    <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg')">
                        <span class="post-category text-white bg-warning">Lifestyle</span>
                        <div class="text text-sm">
                            <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                            <span>February 12, 2019</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require 'components/subscribe.php';?>
<?php require 'components/footer.php';?>
