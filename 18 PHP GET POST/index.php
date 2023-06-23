<?php
function consoleLog($value) {
	echo "<script>console.log('".json_encode(print_r($value, true))."')</script>";
}

//echo '<h1>$_SERVER: '. $_SERVER['REQUEST_METHOD'] . '</h1>';

//echo '$_GET';
//d($_GET);

consoleLog($_POST);
//echo '$_POST';
//d($_POST);

// если страница загружена впервые
    // показываем форму
// если отправлена форма
    // обрабатываем данные



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>

    <!-- если отправлена форма -->
    <?php if($_SERVER['REQUEST_METHOD'] === 'POST'):?>
    <!-- обрабатываем данные  -->
        <h2>Добро пожаловать, <?php echo $_POST['login']?></h2>
        <p>Ваш адрес электронной почты: <?php echo $_POST['email']?></p>
        <p>Ваш пароль: <?php echo $_POST['password']?></p>
    <!-- если страница загружена впервые -->
    <?php else:?>
    <!-- показываем форму -->
        <form method="POST">
            <div>
                <label>Логин:</label>
                <input type="text" name="login" placeholder="Только латинские буквы и цифры">
            </div>

            <div>
                <label>Электронная почта:</label>
                <input type="email" name="email" placeholder="example@email.ru">
            </div>

            <div>
                <label>Пароль:</label>
                <input type="password" name="password" placeholder="Не менее 6 символов">
            </div>

            <input type="submit" value="Зарегистрироваться">

        </form>
    <?php endif;?>

    <a href="news.php?id=1">Новость 1</a>
</body>
</html>

<!--1 запрос-->
<!--https://www.google.ru  // GET-->
<!---->
<!--2 запрос-->
<!--https://www.google.ru/search ? q=wikipedia  // GET-->
<!--$GET['q'] = 'wikipedia';-->
<!---->
<!--https://ru.wiktionary.org/w/index.php ? search=car // GET-->
<!--$GET['search'] = 'car';-->

<!--http://localhost/ ? login=Ivan111 & email=ivan%40test.ru & password=123456789-->
<!--http://localhost/ ? login= & email= & password=-->









