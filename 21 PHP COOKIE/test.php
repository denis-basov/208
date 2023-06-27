<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<?php if(isset($_COOKIE['firstName']) && isset($_COOKIE['lastName'])):?><!--если клиент авторизован-->
		<!--выводим инфу о клиенте-->
		<p>Добро пожаловать, <?= $_COOKIE['lastName'] . ' ' . $_COOKIE['firstName']?></p>
	<?php else:?><!--если клиент не авторизован-->
		<!--выводим инфу, что страница только для авторизованных-->
		<a href="index.php">На главную</a>
	<?php endif;?>
</body>
</html>