<?php
$menu = require 'menu.php';
// var_dump($menu);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$title ?? 'Сайт с новостями'?></title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>

<header>
	<div class="logo">LOGO</div>
	<h1><?=$title ?? 'Сайт с новостями'?></h1>
	<nav>
        <?php
            //echo $_SERVER['REQUEST_URI'].'<br>';
        ?>

        <!-- если URI равен ссылке в ключе массива -->
		<?php foreach ($menu as $key => $value):?>
            <?php if($_SERVER['REQUEST_URI'] ===  $key):?>
                <span class="active-link"><?=$value?></span>
            <?php else:?>
                <a href="<?=$key?>"><?=$value?></a>
            <?php endif;?>
		<?php endforeach;?>
	</nav>
</header>

