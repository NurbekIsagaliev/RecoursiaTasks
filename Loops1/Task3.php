<?php
/*Часть 6. Самостоятельное решение задачи на циклы
Условие задачи:

Дано случайное число от 1 до 999 999. Определить количество цифр в данном числе. Генерацию числа необходимо 
сделать таким образом, чтобы разрядность формировалась с равной долей вероятности. 
Т.е. к примеру 2-значные цифры (от 10 до 100) генерировались также часто как и 5-значные (10000 - 99999).*/
$randomNumber1 = rand(1, 9);
$randomNumber2 = rand(10, 99);
$randomNumber3 = rand(100, 999);
$randomNumber4 = rand(1000, 9999);
$randomNumber5 = rand(10000, 99999);
$randomNumber6 = rand(100000, 999999);

$rank = rand(1,6);

if($rank == 1){
$randomNumber = $randomNumber1;
}
elseif($rank == 2){
$randomNumber = $randomNumber2;
}
elseif($rank == 3){
$randomNumber = $randomNumber3;
}
elseif($rank == 4){
$randomNumber = $randomNumber4;
}
elseif($rank == 5){
$randomNumber = $randomNumber5;
}
else {
$randomNumber = $randomNumber6;
}

echo "Случайное число: " . $randomNumber . '<br>';

$digitCount = 0;

for ($number = $randomNumber; $number > 0; $number = intdiv($number,10)) {

    $digitCount++;
}

echo "Количество цифр: " . $digitCount;
