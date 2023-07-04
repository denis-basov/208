<?php
require 'DBConnect.php';
$pdo = DBConnect::getConnection();

$query = "SELECT CUST_NUM, COMPANY, CREDIT_LIMIT, NAME AS MANAGER
					FROM customers, salesreps
					WHERE CUST_REP = EMPL_NUM;";
$result = $pdo->query($query);
$customers = $result->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Клиенты</title>
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

	<!-- CUST_NUM, COMPANY, CREDIT_LIMIT, MANAGER	-->
	<div class="container customers">
		<?php foreach ($customers as $customer):?>
			<div class="box customer">
				<h1>Идентификатор клиента: <?=$customer['CUST_NUM']?></h1>
				<h2>Название компании: <?=$customer['COMPANY']?></h2>
				<p>Кредитный лимит: <?=$customer['CREDIT_LIMIT']?></p>
				<p>Менеджер: <?=$customer['MANAGER']?></p>
			</div>
		<?php endforeach;?>
	</div>
</body>
</html>
