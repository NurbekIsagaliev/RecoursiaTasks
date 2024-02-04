<?php
/*Задача #4
Дан массив $arr из 10 случайных чисел от 1 до 100. Соберите в массив $evens четные числа, а в массив $odds 
нечетные.*/
$arr = [];
$evens = [];
$odds = [];

for ($i=0; $i < 10; $i++) { 
    $arr[] = rand(1,100);
}
echo 'Данный массив:<br>';
print_r($arr);
echo'<br>';
for ($i=0; $i < count($arr); $i++) { 
    if ( $arr[$i] % 2 == 0 ) {
        $evens[] = $arr[$i];
    } else {
        $odds[] = $arr[$i];
    }
}
echo 'Массив где  все  элементы четные числа:<br>';
print_r($evens);
echo'<br>Массив где  все  элементы нечетные числа:<br>';
print_r($odds);
