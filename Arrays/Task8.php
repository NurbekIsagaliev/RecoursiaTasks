<?php
/*Задача #8
Дан массив $arr из 20 случайных чисел (0 или 1). Найдите длину самой длинной цепочки повторяющихся чисел в 
данном массиве. 
К примеру в массиве [0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 0], длина самой длинной цепочки будет 4 .
*/
$arr = [];

for ($i = 0; $i < 20; $i++) {
    $arr[] = rand(0, 1);
}

print_r($arr);
echo '<br>';

$length = 1; 
$maxLength = 1; 

for ($i = 0; $i < count($arr)-1; $i++) {
    if ($arr[$i] == $arr[$i + 1]) {
        $length++;
    } else {
        if ($length > $maxLength) {
            $maxLength = $length; 
        }
        $length = 1; 
    }
}

if ($length > $maxLength) {
    $maxLength = $length; 
}

echo '<br>';
echo 'Максимальная длина  цепочки равна: ' . $maxLength;
