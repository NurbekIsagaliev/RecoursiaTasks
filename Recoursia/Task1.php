<?php
/*Задача #1
Написать функцию divisors(...), которая принимает на вход число $n и выводит список всех его делителей 
через запятую. Решить задачу с помощью рекурсии. 
Например divisors(6): 1,2,3,6*/
$n = 48;

function divisors($n, $divider = 1, $result = '') {
    
    if ($divider > $n) {
        return $result;
    }

    if ($n % $divider == 0) {

        if ($result !== '') {

            $result = $result. ',';
        }
        $result = $result. $divider;
    }

    return divisors($n, $divider + 1, $result);
}

echo divisors($n);