<?php

/*

ArtJoker курс PHP "Zero to Hero"

DZ1-1
Написать функцию которая по параметрам принимает число из десятичной
системы счисления и преобразовывает в двоичную. Написать функцию которая
выполняет преобразование наоборот.

*/

function conversionBinary($number)
{
    $binaryNumber = '';
    if (isset($number)) {
        while ($number != 0) {
            $binaryNumber = ($number % 2) . $binaryNumber;
            $number = (int)($number / 2);
        }
    } else {
        echo 'variable not declared';
    }
    return $binaryNumber;
}

echo 'binary number = ' . conversionBinary(13) . '<br/>';

function conversionDecimal($binaryNumber)
{
    $i = 0;
    if (preg_match('~^[01]+$~', $binaryNumber)) {
        while ($binaryNumber != ''ы) {
            $i = $i * 2 + substr($binaryNumber, 0, 1);
            $binaryNumber = substr($binaryNumber, 1);
        }
    } else {
        echo 'variable not declared';
    } return $i;
}

echo 'decimal number = ' . conversionDecimal(1101) . '<br/>';
