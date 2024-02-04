<?php
/*Задача #4
Написать функцию, которая принимает на вход целое положительное число $n и возвращает массив всех 
квадратных чисел от 1 до $n. Решить задачу с использованием рекурсии (без циклов).
К примеру если число $n=27, то результат должен быть массивом: [1, 4, 9, 16, 25]; 
*/
function squareNumbers($n, $currentNumber = 1, $result = []) {
    
    if ($currentNumber ** 2 > $n) {
        return $result;
    }

    
    $result[] = $currentNumber ** 2;

    
    return squareNumbers($n, $currentNumber + 1, $result);
}

$n = 27;
$resultArray = squareNumbers($n);
print_r($resultArray);
