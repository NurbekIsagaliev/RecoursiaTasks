<?php
/*Задача 4. Хитрое декодирование.
Дано 10-значное случайное число, необходимо преобразовать данное число в строку по следующему сценарию: сначала подбирается соответствующий символ из английского алфавита под двузначный номер, если такое возможно, иначе под однозначный номер. 
В качестве примера рассмотрим шестизначное число:
132722 = 13(n) - 2(c) - 7(h) - 22(w) = nchw
*/
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

$randomNumber = rand(1000000000,9999999999);
$resultString = convertToAlphabetString($randomNumber);

echo "Исходное число:" . $randomNumber . '<br>';
echo "Преобразованная строка:" . $resultString . '<br>';
