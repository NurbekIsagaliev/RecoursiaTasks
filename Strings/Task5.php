<?php
/*Задача 5. Массив случайных строк.
Собрать массив $arr из 10 элементов, каждый из которых представляет из себя строку из случайных символов 
латинского алфавита. 
И далее необходимо:

Заменить все символы во всех элементах массива $arr  на их порядковые номера латинского алфавита (bac - 102).
Собрать сумму всех цифр в массив $sum.
В массиве $sum каждое число преобразовать в строки по следующему сценарию: сначала подбирается соответствующий 
символ под двузначный номер если такое возможно, далее под однозначный номер. К примеру:
132722 = 13(n) - 2(c) - 7(h) - 22(w) = nchw
Объединить все полученные строки массива $sum в одну единую строку.*/
function convertToAlphabetString($number)
{

    $alphabet = [
        0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 4 => 'e', 5 => 'f', 6 => 'g',
        7 => 'h', 8 => 'i', 9 => 'j', 10 => 'k', 11 => 'l', 12 => 'm',
        13 => 'n', 14 => 'o', 15 => 'p', 16 => 'q', 17 => 'r', 18 => 's',
        19 => 't', 20 => 'u', 21 => 'v', 22 => 'w', 23 => 'x', 24 => 'y', 25 => 'z'
    ];

    $numberStr = strval($number);
    $result = '';



    $arr = str_split($numberStr, 2);
    $arr2 = [];


    for ($i = 0; $i < count($arr); $i++) {

        if (array_key_exists($arr[$i], $alphabet) == false) {

            $arr[$i] = str_split($arr[$i], 1);
        }
    }


    foreach ($arr as $item) {

        if (is_array($item) == true) {

            $arr2 = array_merge($arr2, $item);
        } else {

            $arr2[] = $item;
        }
    }


    $count = count($arr2);

    $i = 0;

    while ($i < $count) {

        $result = $result . $alphabet[$arr2[$i]];

        $i++;
    }

    return $result;
}




$arr = [];
for ($i = 0; $i < 10; $i++) {
    $randomString = '';
    for ($j = 0; $j < 3; $j++) {
        $randomString .= chr(rand(97, 122)); 
    }
    $arr[] = $randomString;
}

print_r($arr);

$alphabet = [
    0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd', 4 => 'e', 5 => 'f', 6 => 'g',
    7 => 'h', 8 => 'i', 9 => 'j', 10 => 'k', 11 => 'l', 12 => 'm',
    13 => 'n', 14 => 'o', 15 => 'p', 16 => 'q', 17 => 'r', 18 => 's',
    19 => 't', 20 => 'u', 21 => 'v', 22 => 'w', 23 => 'x', 24 => 'y', 25 => 'z'
];


foreach ($arr as $key => $string) {
    $numericString = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        $charIndex = array_search($char, $alphabet);
        if ($charIndex !== false) {
            $numericString .= $charIndex ; 
        }
    }
    $arr[$key] = $numericString;
}

print_r($arr);

$sum = 0;
foreach ($arr as $number) {
    $sum += $number;
}

echo $sum.'<br>';


$sumString = convertToAlphabetString($sum);

echo $sumString;