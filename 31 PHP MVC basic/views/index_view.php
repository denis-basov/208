<?php
// Представление главной страницы

require 'components/header.php';?>

<div class="news">
    <!-- выводим список новостей через цикл   -->
    <?php foreach ($newsLimitList as $news_item):?>
        <div class="news_item">
            <a class="link" href="news_detail.php?news_id=<?=$news_item['news_id']?>">
                <h2><?=$news_item['title']?>. Идентификатор: <?=$news_item['news_id']?> </h2>
            </a>
            <div class="news_preview">
                <a href="news_detail.php?news_id=<?=$news_item['news_id']?>">
                    <img src="<?=$news_item['news_image']?>" alt="<?=$news_item['title']?>">
                </a>
                <p><?=$news_item['short_text']?>...</p>
            </div>
					<?php $date_time = explode(' ', $news_item['add_date'])?>
            <span>Дата: <strong><?= $date_time[0]; ?></strong></span>
            <span>Время: <strong><?= $date_time[1]; ?></strong></span>
            <span>Автор:
                    <a class="link" href="author_detail.php?author_id=<?=$news_item['author_id']?>">
                        <strong><?=$news_item['first_name'].' '.$news_item['last_name']?></strong>
                    </a>
                </span>
            <span>Категория: <strong><?=$news_item['category']?></strong></span>
            <a class="news_link" href="news_detail.php?news_id=<?=$news_item['news_id']?>">Подробнее...</a>

        </div>
    <?php endforeach;?>
</div>


<?php
require 'components/footer.php';
?>