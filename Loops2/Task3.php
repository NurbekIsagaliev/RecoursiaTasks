<?php
/*Задача #3
Дано случайное четное число n (1000, 9998). Делите его на 2 столько раз, пока результат деления
не станет меньше 50. Какое число получится? Посчитайте количество итераций, 
необходимых для этого (итерация - это проход цикла), и запишите его в переменную num.*/
$number = 0;
$num = 0;

$number = rand(1000, 9998);

if ($number % 2 != 0) {
    $number = $number +1;
}

echo "Число: " . $number.'<br>';

for ($num = 0; $number >= 50; $num++) {
    $number = $number / 2;
}

echo "Количество итераций: " . $num ;


