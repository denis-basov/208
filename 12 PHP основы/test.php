<?php
	require 'variables.php';
?>
<?php
$firstName = 'Иван';
$age = '10';
$pet = 'Кот';
$petName = 'Барсик';
$color = 'Серый';
$petCard = "<h1>$pet $petName! Цвет: $color. Имя хозяина: $firstName.</h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo $petCard?>
</body>
</html>