<?php
 require 'user-data.php'; // требуется
// include 'user-data.php'; // включение
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $user['userName']?></title>
	<style>
		.users{
				display: flex;
				gap: 20px;
		}
		.user{
				background: skyblue;
				padding: 10px;
				border-radius: 8px;
		}
		.user img{
				width: 200px;
		}
	</style>
</head>
<body>
	<div class="users">
		<div class="user">
			<?php
			echo "
				<img src='$user[avatar]' alt='$user[firstName] $user[lastName]'>
				<h3>Логин: $user[userName]</h3>
				<p>Имя: $user[firstName]</p>
				<p>Фамилия: $user[lastName]</p>
				<p>Возраст: $user[age]</p>
				<p>Хобби: $user[hobby]</p>
				<p>Админ: $isAdmin</p>
				<p>Телефоны: $userPhones</p>
			";
			?>
		</div>
		<div class="user">
			<?php
				echo <<<_HTML_
					<img src='$user[avatar]' alt='$user[firstName] $user[lastName]'>
					<h3>Логин: $user[userName]</h3>
					<p>Имя: $user[firstName]</p>
					<p>Фамилия: $user[lastName]</p>
					<p>Возраст: $user[age]</p>
					<p>Хобби: $user[hobby]</p>
					<p>Админ: $isAdmin</p>
					<p>Телефоны: $userPhones</p>	
_HTML_;
			?>
		</div>
		<div class="user">
			<img src="<?=$user['avatar']?>" alt="<?=$user['firstName'].' '.$user['lastName']?>">
			<h3>Логин: <?php echo $user['userName']?></h3>
			<p>Имя: <?=$user['firstName']?></p>
			<p>Фамилия: <?=$user['lastName']?></p>
			<p>Возраст: <?=$user['age']?></p>
			<p>Хобби: <?=$user['hobby']?></p>
			<p>Админ: <?=$user['isAdmin'] ? 'Да': 'Нет'?></p>
			<p>Телефоны: <?=implode(', ', $user['phones'])?></p>
		</div>
	</div>

</body>
</html>
