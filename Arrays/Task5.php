<?php
/*Задача #5
Даны массив $arr1 из 100 случайных чисел от 1 до 100 и два случайных числа $a и $b в диапазоне 10 до 100. 
Собрать в массив $arr2 числа из массива $arr1, индексы которых лежат в диапазоне от меньшего ($a или $b) 
числа до большего  ($a или $b).*/
$arr1 = [];
$arr2 = [];

for ($i=0; $i < 100 ; $i++) { 
    $arr1[] = rand(1,100);
}

print_r($arr1);
echo '<br>';

$a = rand(10,100);
echo 'A = ' . $a .'<br>';

$b = rand(10,100);
echo 'B = ' . $b .'<br>';

for ($i=0; $i < count($arr1) ; $i++) { 
    if( $i >= min($a,$b) && $i <= max($a,$b) ){
        $arr2[] = $arr1[$i];
    }
}

print_r($arr2);
