<?php
function consoleLog($value) {
	echo "<script>console.log('".json_encode(print_r($value, true))."')</script>";
}
/**
 * страница просмотра списка авто
 */
$cars = [
	[
		'id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'
	],
	[
		'id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'
	],
	[
		'id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg'
	],
	[
		'id' => 4, 'maker' => 'Bugatti', 'model' => 'Bugatti Chiron', 'made_year' => '2016', 'top_speed' => 420, 'acceleration_to_100' => 3,
		'power' => 1000, 'weight' => 1888, 'image' => 'img/bugatti.jpg'
	],
];


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <style>
        .cars{
            display: flex;
            justify-content: space-evenly;
            max-width: 1200px;
            background: skyblue;
            margin: auto;
            padding: 20px;
        }
        .car{
            width: 200px;
            padding: 20px;
            background: lightgray;
            border-radius: 10px;
        }
        .car img{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="cars">
        <?php foreach ($cars as $key => $car):?>
            <div class="car car-<?php echo $key+1?>">
                <a href="car_detail.php?carId=<?=$car['id']?>">
                    <img src="<?=$car['image']?>" alt="<?=$car['maker'].' '.$car['model']?>">
                </a>
                <h2>Производитель: <?=$car['maker']?>, модель: <?=$car['model']?></h2>
                <h3>ID: <?=$car['id']?></h3>
                <a href="car_detail.php?carId=<?=$car['id']?>">Подробнее</a>
            </div>
        <?php endforeach;?>
    </div>
</body>
</html>
