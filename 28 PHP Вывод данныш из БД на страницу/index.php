<?php

require 'DBConnect.php';

try{
	// создаем объект подключения к БД (PDO)
	$pdo = DBConnect::getConnection();
}catch(PDOException $exception){
//	echo '<h3>'.$exception->getMessage().'</h3>';
//	echo '<p><b>Файл:</b> '.$exception->getFile().'</p>';
//	echo '<p><b>Строка:</b> '.$exception->getLine().'</p>';
//	echo '<p><b>Код ошибки:</b> '.$exception->getCode().'</p>';
	die('Не удалось получить данные');
}
//DBConnect::d($pdo);

// 1. Написать запрос для получения данных об офисах
$query = "SELECT OFFICE, CITY, REGION, TARGET, offices.SALES AS OFFICE_SALES, NAME
					FROM offices, salesreps
					WHERE MGR = EMPL_NUM;";

// 2. Отправить запрос на выборку в БД и сохранить полученные данные
$result = $pdo->query($query); // $result - объект класса PDOStatement
//DBConnect::d($result->fetch());
//echo '<hr>';

//$offices = $result->fetchAll();
//echo json_encode($offices);

// 3. Отобразить полученные данные из БД на странице
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Офисы</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<nav>
		<a href="/">Главная</a>
		<a href="customers.php">Клиенты</a>
        <a href="orders.php">Заказы</a>
        <a href="salesreps.php">Сотрудники</a>
		<a href="products.php">Продукция</a>
	</nav>

	<!-- OFFICE, CITY, REGION, MGR, TARGET, SALES	-->
	<div class="container offices">
		<?php while($office = $result->fetch()):?>
			<div class="box office">
				<h1>Идентификатор офиса: <?php echo $office['OFFICE']?></h1>
				<p>Город: <?= $office['CITY']?></p>
				<p>Регион: <?= $office['REGION']?></p>
				<p>Менеджер: <?= $office['NAME']?></p>
				<p>План продаж: <?= $office['TARGET']?></p>
				<p>Продажи: <?= $office['OFFICE_SALES']?></p>
			</div>
		<?php endwhile;?>
	</div>

</body>
</html>
