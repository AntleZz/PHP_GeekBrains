<?php
/*$day = date("w");
if ($day > 0 && $day <6){
	echo "Будний день!";
}elseif ($day == 6 || $day == 0){
	echo "Выходной день!";
}
//Альтернативная

$day = date ("w");
if ($day > 0 && $day < 6):?>
	<h1> День № <?= $day ?></h1>
<?php
else:?>
	<h1> День № <?= $day ?></h1>
<?php
endif;

$price = 1200; // rand(100,2000);
echo "Цена начальная: $price";
if ($price >= 500 && $price < 1000){
	$price = $price -$price * 0.05;
}elseif ($price >= 1000){
	$price = $price -$price * 0.1;
}
echo "<br>Цена с учетом скидки: $price";

//Тернарный оператор

$year = date ("Y");
echo $year % 4 ==0 ? "year -високосный год" : "Невисокосный год";


$day = date("w");
echo ($day >= 0 && $day < 7) ? (($day > 0 && $day < 4) ? "Первая половина недели" : "Вторая половина недели") : " некоректный день";
*/

//Оператор switch

//$svetophor = ["red","green","yellow"];
//$color = $svetophor[rand (0,2)];

$color = $_GET['color'];

echo "Значение Х = ". $_GET['x'] ." Горит цвет $color, действие: ";
switch($color){
	case "red":
		echo "Стоп";
		break;
	case "green":
		echo "Вперед";
		break;
	case "yellow":
		echo "Внимание";
		break;
	default:
		echo "Поломка светофора";
}
