<?php
/*Задача 6. Программируем программирование.
У вас есть список операций: 

Увеличить на (increaseBy) - увеличивает значение на заданное количество
Уменьшить на  (reduceBy) - уменьшает значение на заданное количество
Увеличить в (increaseByTimes) - увеличивает значение в заданное количество раз
Уменьшить в (reduceByTimes) - уменьшает значение в заданное количество раз
Необходимо:

Собрать список ($operations), представляющий из себя случайную последовательность 5-ти операций;
Применить последовательность операций ($operations) к числу 10, заданный аргумент каждой операции 
соответствует порядковому номеру самой операции + 1
Собрать 2 массива из 10 случайных чисел. Применить к каждому элементу первого массива последовательность 
операций ($operations), в качестве заданного аргумента каждой операции использовать соответствующий элемент 
из второго массива.*/
function increaseBy($value, $amount) {
    return $value + $amount;
}

function reduceBy($value, $amount) {
    return $value - $amount;
}

function increaseByTimes($value, $times) {
    return $value * $times;
}

function reduceByTimes($value, $times) {
    return $value / $times;
}

$operations = [
    'increaseBy',
    'reduceBy',
    'increaseByTimes',
    'reduceByTimes'
];

$sequence = [];

for ($i = 0; $i < 5; $i++) {
    $randomOperation = $operations[array_rand($operations)];
    $sequence[] = $randomOperation;
}

$number = 10;

foreach ($sequence as $key => $operation) {
    $arg = $key + 1;
    $number = $operation($number, $arg);
}

$array1 = [];
$array2 = [];

for ($i = 0; $i < 10; $i++) {
    $array1[] = rand(1, 10);
    $array2[] = rand(1, 10);
}

$resultArray = [];

for ($i = 0; $i < 10; $i++) {
    $currentNumber = $array1[$i];
    $currentArg = $array2[$i];

    foreach ($sequence as $key => $operation) {
        $currentNumber = $operation($currentNumber, $currentArg);
    }

    $resultArray[] = $currentNumber;
}

print_r($sequence);
echo "Результат после применения последовательности к числу 10: $number.<br>";
print_r($array1);
print_r($array2);
print_r($resultArray);



