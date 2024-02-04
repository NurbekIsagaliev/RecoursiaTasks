<?php
/*Задача #1
Написать функцию, принимающую на вход массив и возвращающую сумму всех чисел этого массива.
*/
$arr = [1,2,3,4,5];

function summa($arr){
    $sum = 0;
    for ($i=0; $i < count($arr) ; $i++) { 
        $sum+= $arr[$i];
    }
    return $sum;
}

echo summa($arr);
