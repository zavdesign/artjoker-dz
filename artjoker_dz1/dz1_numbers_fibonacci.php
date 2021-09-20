<?php

/*

ArtJoker курс PHP "Zero to Hero"

DZ1-2
Написать функцию которая выводит первые N чисел фибоначчи

*/

function numbersFibonacci($number)
{
    if ($number < 3) 
    {
        return 1;
    } 
    else 
    {
        return numbersFibonacci($number - 1) + numbersFibonacci($number - 2);
    }
}

$amount_numbers = 13;

echo "числа фибоначчи: ";
for ($number = 1; $number <= $amount_numbers; $number++) 
{
    echo(numbersFibonacci($number) . ", ");
}


