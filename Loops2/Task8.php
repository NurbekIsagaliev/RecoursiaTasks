<?php
/*Задача #8
Вывести таблицу умножения с использованием вложенных циклов в следующем виде:

    1х1=1;
    1x2=2;
    1x3=3;
    …
    9x8=72
    9x9=81*/
for ( $i = 1 ; $i <= 9 ; $i++) { 
  for ( $j = 1 ; $j <= 9 ; $j++) { 
 echo $i .'x'. $j .' = ' .$i*$j.'<br>';
  }
  echo '<br>';
}
