<?php  
/*Задача #5
Найтие все числа кратные и 3 и 5  в диапазоне от 1000 до 2000
*/
for ( $i=1000; $i <=2000 ; $i++ ){

   if($i % 3 == 0 && $i % 5 == 0){

echo $i . '<br>';

   }
}
