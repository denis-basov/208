<?php
require 'DBConnect.php';
$pdo = DBConnect::getConnection();

$query = "SELECT order_num, order_date, company, name as manager, title, city, region,
					description, price, qty, amount
					FROM orders, customers, salesreps, products, offices
					WHERE
					cust = cust_num
					AND
					rep = empl_num
					AND
					rep_office = office
					AND
					mfr = mfr_id
					AND
					product = product_id;";
$result = $pdo->query($query);
$orders = $result->fetchAll();
//DBConnect::d($orders);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Заказы</title>
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

<!-- order_num, order_date, company, name as manager, title, city, region,
					description, price, qty, amount	-->
	<div class="orders">
		<?php foreach ($orders as $order):?>
			<div class="order">
				<div>
					<h2>Идентификатор:</h2>
					<p><?=$order['order_num']?></p>
				</div>
				<div>
					<h2>Дата:</h2>
					<p><?=$order['order_date']?></p>
				</div>
				<div>
					<h2>Клиент:</h2>
					<p><?=$order['company']?></p>
				</div>
				<div>
					<h2>Менеджер:</h2>
					<p><?=$order['manager']?></p>
				</div>
				<div>
					<h2>Должность:</h2>
					<p><?=$order['title']?></p>
				</div>
				<div>
					<h2>Город:</h2>
					<p><?=$order['city']?></p>
				</div>
				<div>
					<h2>Регион:</h2>
					<p><?=$order['region']?></p>
				</div>
				<div>
					<h2>Описание:</h2>
					<p><?=$order['description']?></p>
				</div>
				<div>
					<h2>Цена:</h2>
					<p><?=$order['price']?></p>
				</div>
				<div>
					<h2>Количество:</h2>
					<p><?=$order['qty']?></p>
				</div>
				<div>
					<h2>Стоимость:</h2>
					<p><?=$order['amount']?></p>
				</div>
			</div>
		<?php endforeach;?>
	</div>
</body>
</html>

