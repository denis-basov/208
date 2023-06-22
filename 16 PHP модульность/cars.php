<?php
$cars = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg']
];
$title = "Все авто нашего салона";


    require 'components/header.php';
?>

<main>
    <h2>Список авто</h2>
		<div class="cars">
			<?php foreach ($cars as $key => $car):?>
				<div class="car car-<?=$key+1?>">
                    <img src="<?= $car['image']?>" alt="<?= $car['maker'].' '.$car['model']?>">
					<h2>Производитель: <?= $car['maker']?>, Марка: <?= $car['model']?></h2>
					<p>Год выпуска: <?= $car['made_year']?></p>
					<p>Максимальная скорость: <?= $car['top_speed']?> км/ч</p>
					<p>Разгон до 100 км/ч: <?= $car['acceleration_to_100']?> с</p>
					<p>Мощность: <?= $car['power']?> л/с</p>
					<p>Масса: <?= $car['weight']?> кг</p>
				</div>
			<?php endforeach;?>
		</div>
</main>

<?php
    require 'components/footer.php';
?>

