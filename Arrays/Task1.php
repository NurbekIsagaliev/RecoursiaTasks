<?php
/*Задача #1
Даны два случайных трехзначных числа $a и $b. Реализуйте процесс умножения столбиком числа $a на число $b;*/
$a = rand(100,999);
$b = rand(100,999);

$b_ones = $b % 10;
$b_tens = intdiv(($b % 100), 10);
$b_hundreds = intdiv($b, 100);

$result = 0;

$result += $a * $b_ones;

$result += $a * $b_tens * 10;

$result += $a * $b_hundreds * 100;

echo 'Результат умножения: '.$a. ' на ' .$b.'  =  '. $result;
