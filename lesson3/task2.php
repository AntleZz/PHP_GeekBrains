<?php
$n = 10;
$i = 0;
do{
if($i == 0){
	echo "$i - ноль<br>";
}elseif ($i % 2 == 0){
	echo "$i - четное<br>";
}elseif ($i % 2 !== 0){
	echo "$i - нечетное<br>";
}
$i++;
}
while($i <= $n);