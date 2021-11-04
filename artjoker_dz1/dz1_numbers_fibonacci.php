<?php

/*

ArtJoker курс PHP "Zero to Hero"

DZ1-2
Написать функцию которая выводит первые N чисел фибоначчи

*/

function numbersFibonacci($count)
{
   if ($count > 0){
       $firstNumberFibo = 0;
       $secondNumberFibo = 1;

       $numbersFibo = [$firstNumberFibo, $secondNumberFibo];

       if ($count = 1){
           return $firstNumberFibo;
       }elseif ($count = 2){
           return implode(' , ', $numbersFibo[]);
       }else {
           for ($i = 1; i <= $count; $i++){
               $numbersFibo[] = $numbersFibo[$i] + $numbersFibo[--$i];
           }
           return $numbersFibo[] = implode(' , ', $numbersFibo[]);
       }
   }
}


