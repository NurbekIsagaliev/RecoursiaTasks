<?php
/*Задача #2
Написать функцию isHappyNumber(...), которая принимает на вход шестизначное число, и возвращает true если число
является счастливым (когда сумма первых трех цифр равна сумме последних), иначе возвращает false.
Решить задачу с помощью рекурсии.*/
$number = 123321;

function getSumOfDigits($num)
{
    if ($num == 0) {
        return 0;
    }
    return $num % 10 + getSumOfDigits(intdiv($num, 10));
}

function isHappyNumber($number)
{

    $sum123 = getSumOfDigits(intdiv($number, 1000));


    $sum456 = getSumOfDigits($number % 1000);


    if ($sum123 === $sum456) {
        return true;
    } else {

        return false;
    }
}

echo isHappyNumber($number);
