<?php
	$firstName = 'Иван';
	$lastName = 'Петров';
    $age = 25;
    $weight = 65.3;
    $isAdmin = false;

    // var_dump($weight);
    // <h1>Привет, Иван Петров</h1>
    //$greet = '<h1>Привет ' . $firstName . ' ' . $lastName . '</h1>';
    $greet = "<h1>Привет $firstName $lastName</h1>";

    $output = "<h1>Привет, $firstName $lastName</h1>
               <p>Возраст: $age лет</p>
               <p>Вес: $weight кг</p>";

//    if($isAdmin){
//        $isAdmin = 'Да';
//    }else{
//        $isAdmin = 'Нет';
//    }


?>
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
    <?php echo $output?>
    <p>Админ: <?php echo $isAdmin ? 'Да': 'Нет' ?></p>
    <a href="strings.php">Строки</a>
</body>
</html>
