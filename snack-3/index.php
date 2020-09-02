<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php

 $arr_numbers = [];

 while (count($arr_numbers) < 15 ) {

   $number = rand(1, 100);

   if (!in_array($number, $arr_numbers)) {

     $arr_numbers[] = $number;

   }
 }

 var_dump($arr_numbers);

?>
