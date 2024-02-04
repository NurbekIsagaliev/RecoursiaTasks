<?php
/*Задача 2. Учим английский алфавит.
Собрать строку из 10 случайных символов латинского алфавита. Вывести на экран эту строку таким образом,
чтобы все гласные были в верхнем регистре, а все согласные выделены курсивом. Обратите внимание на букву Y.*/
function generateRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    
    return $randomString;
}

function isVowel($char) {
    $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    return in_array($char, $vowels);
}

function formatString($inputString) {
    $formattedString = '';
    
    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];

        if ($i > 0) {
            $prevChar = $inputString[$i - 1];
        } else {
            $prevChar = '';
        }
        
        if (isVowel($char) || ($char === 'y' && (isVowel($prevChar) || $i === 0))) {
            $formattedString .= strtoupper($char);
        } else {
            $formattedString .= '<i>' . $char . '</i>';
        }
    }
    
    return $formattedString;
}

$randomString = generateRandomString(10);
$formattedString = formatString($randomString);

echo "Случайная строка: $formattedString";
