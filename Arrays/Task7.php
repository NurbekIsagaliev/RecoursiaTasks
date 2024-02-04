<?php
/*Задача #7
Дан массив $arr из 10 случайных чисел от 0 до 100. Поменяйте местами максимальный и минимальный элементы.
*/
$arr = [];

for ($i=0; $i < 10; $i++) { 
    $arr[] = rand(0,100);
}
echo 'Данный  массив:<br>'.'<br>';
print_r($arr);
echo '<br><br>';
 
$max = $arr[0];
$maxIndex = 0;

for ($i=1; $i <count($arr); $i++) { 
    if( $arr[$i] > $max){
        $max = $arr[$i];
        $maxIndex = $i;
    }
}
echo  'Максимальный  элемент массива:'. $max.'   Индекс элемента  '.$maxIndex.'<br>';
echo '<br><br>';
 
$min = $arr[0];
$minIndex = 0;

for ($i=1; $i <count($arr); $i++) { 
    if( $arr[$i] < $min){
        $min = $arr[$i];
        $minIndex = $i;
    }
}
echo 'Минимальный элемент массива:'.$min .'   Индекс элемента   '.$minIndex.'<br>';
echo '<br><br>';

$arr[$maxIndex] = $min;
$arr[$minIndex] = $max;
echo 'Массив  где  максимальный  и минимальный элемент поменялись местами:<br><br>';
print_r($arr);


