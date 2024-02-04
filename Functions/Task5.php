<?php
/*Задача #5
Описать функцию addRightDigit($a, $b), добавляющую к целому положительному числу $a справа цифру $b ($b лежит в диапазоне 0–9).
Пример: 
   $a = 708; $b = 2;
   addRightDigit($a,$b) - должна вернуть 7082*/
$a = 7084758;
$b = 5;
function  addRightDigit($a, $b)
{
    
    $a = $a * 10 + $b;

    return $a;
}
echo 'a = ' . $a . '<br>';


echo  addRightDigit($a, $b);
