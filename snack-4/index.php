<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$randomNums = [];

for ($i=0; $i <= 14; $i++) { 
  $randomNum = rand(1, 100);

  

  if (in_array($randomNum, $randomNums)) {
    $i--;
  } else {
    array_push($randomNums, $randomNum);
  }
}

var_dump($randomNums);

?>