<?php

//Задание 3-4

function sum($a,$b){ //Сумма чисел
	return $a + $b;
}

function minus($a,$b){ //Разность чисел
	return $a - $b;
}

function mult($a,$b){ //Умножение
	return  $a * $b;
}

function division($a,$b){ //Деление
	if ($b!=0){
	return  $a / $b;
	}
}


function mathOperation($arg1, $arg2, $operation){ //Простой калькулятор 
	switch($operation){
		case "sum":
			echo "В ходе сложения $arg1 и $arg2 получен результат: ";
			return sum($arg1, $arg2);
			break;
		case "minus":
			echo "В ходе вычитания $arg1 и $arg2 получен результат: ";
			return minus($arg1, $arg2);
			break;
		case "mult":
			echo "В ходе умножения $arg1 на $arg2 получен результат: ";
			return mult($arg1, $arg2);
			break;
		case "division":
			echo "В ходе деления $arg1 на $arg2 получен результат: ";
			return division($arg1, $arg2);
			break;
	}
}
