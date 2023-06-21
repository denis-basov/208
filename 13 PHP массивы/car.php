<?php
$car = [
	'id' => 1,
	'maker' => 'Ferrari',
	'model' => 'F50',
	'made_year' => '1995',
	'avatar' => 'https://media.istockphoto.com/id/1340269597/photo/classic-vintage-muscle-car.jpg?b=1&s=170667a&w=0&k=20&c=SwvrnaAB9g3QkusqjKpDTuul2jLFs1DlLAqMIILFubs='
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
					gap:20px;
			}
      div {
          width: 220px;
          padding: 10px;
          border-radius: 10px;
          align-content: center;
          background-color: goldenrod;
      }
      h1 {
          text-align: center;
          font-size: 30px;
      }
      img {
          width: 200px;
          border-radius: 5px;
      }
      .id {
          color: gray;
          text-align: end;
      }
	</style>
</head>
<body>

<div class="cars">
	<div>
		<h1><?=$car["maker"]?></h1>
		<img src="<?= $car["avatar"] ?>" alt="<?= $car["model"] ?>">
		<p>Модель: <?=$car["model"]?></p>
		<p>Год производства: <?=$car["made_year"]?></p>
		<p class="id">card id: <?=$car["id"]?></p>
	</div>

	<div class='car'>
		<img src="<?=$car['avatar'];?>" alt="<?=$car['maker'];?>">
		<ul>
			<li>ID:<?=$car['id'];?> </li>
			<li>Марка:<?=$car['maker'];?></li>
			<li> Модель:<?=$car['model'];?></li>
			<li> Год выпуска:<?=$car['made_year'];?></li>
		</ul>
	</div>

	<div class='car'>
		<?php
		echo <<<_HTML_
			<h1>Производитель: $car[maker]</h1>
			<h2>Модель: $car[model]</h2>
			<img src='$car[avatar]' alt='$car[model]'>
			<p>Год выпуска: $car[made_year]</p>
_HTML_;
		?>
	</div>
</div>


</body>
</html>