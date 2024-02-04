<?php
/*Задача #3
Написать функцию, принимающую на вход число $n и возвращающая сумму его цифр.
Решить задачу с использованием рекурсии (без циклов).*/
$n = 1441;
 function sumNumber($n) {
    if ($n == 0) {
        return 0;
    } else {
        return $n % 10 + sumNumber(intdiv($n, 10));
    }
}

echo sumNumber($n);
