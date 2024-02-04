<?php
/*Задача 1. Случайная строка.
Собрать строку из 10 случайных символов английского алфавита. Вывести на экран эту строку таким образом, 
чтобы все символы с четным порядковым номером (алфавитного порядка) были выделены жирным.*/
function generateRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $randomString;
}

function formatString($inputString) {
    $formattedString = '';
    
    for ($i = 0; $i < strlen($inputString); $i++) {
        if ( $i  %  2 !==  0 ) {
            $formattedString .= '<b>' . $inputString[$i] . '</b>';
        } else {
            $formattedString .= $inputString[$i];
        }
    }
    
    return $formattedString;
}

$randomString = generateRandomString(10);
$formattedString = formatString($randomString);

echo "Случайная строка: $formattedString";
