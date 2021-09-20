<?php

/*
ArtJoker курс PHP "Zero to Hero"

DZ1-3
Написать функцию, возведения числа N в степень M

 */

function exponentionNumberToDegree($number, $degree)
{
    $exponent = 1;
    for ($i = 1; $i <= $degree; $i++) 
    {
        $exponent *= $number;
    }
    return "Число $number в {$degree}-ой степени: " . (int)$exponent;
}

echo exponentionNumberToDegree(13, 7);
