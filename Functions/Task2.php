<?php
/*Задача #2
Написать функцию, которая принимает на вход массив и возвращает максимальное число из этого массива. 
*/
$arr = [-1, 299, 3, 84, -5];

function maximum($arr)
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr)-2; $i++) {

        if ($max < $arr[$i + 1]) {
            $max = $arr[$i + 1];
        }
    }

    return $max;
}

echo maximum($arr);
