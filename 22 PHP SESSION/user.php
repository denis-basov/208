<?php
    session_start();// начинаем сессию
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
</head>
<body>
    <?php if(isset($_SESSION['firstName']) && isset($_SESSION['lastName'])):?><!--если клиент авторизован-->
        <!--выводим инфу о клиенте-->
        <h2>Личный кабинет пользователя</h2>
        <p>Добро пожаловать, <?= $_SESSION['firstName'] .' '. $_SESSION['lastName']?></p>
        <a href="index.php">На главную</a>
        <a href="exit.php">Выйти</a>
    <?php else:?><!--если клиент не авторизован-->
        <!--выводим инфу, что страница только для авторизованных-->
        <h2>Страница доступна только для авторизованных пользователей</h2>
        <a href="index.php">На главную</a>
    <?php endif;?>
</body>
</html>