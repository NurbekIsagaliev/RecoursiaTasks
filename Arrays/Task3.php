<?php 
/*Задача #3
Дан массив $arr из 10 случайных чисел от -100 до 100. Соберите в массив $arr1 все отрицательные значения.*/
$arr = [];
$arr1 = [];

for ($i=0; $i <10 ; $i++) { 
    $arr[] = rand(-100,100);
}

echo 'Данный массив:<br>';
print_r($arr);

for ($i=0; $i < count($arr) ; $i++) {

    if($arr[$i] < 0){

        $arr1[] = $arr[$i];
    }
}

echo '<br>Массив где собраны  отрицательные значения  :<br>';
print_r($arr1);
