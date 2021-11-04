<?php

/*

ArtJoker курс PHP "Zero to Hero"

DZ1-5
Процентное соотношение положительных/отрицательных/нулевых/простых чисел

 */

function parseNumbers ($array)
{
    $zeroNumbers = 0;
    $positiveNumbers = 0;
    $negativeNumbers = 0;
    $simpleNumbers = 0;
    foreach ($array as $item) {
        if ($item === 0) {
            $zeroNumbers++;
        } elseif ($item > 0) {
            $positiveNumbers++;
        } elseif ($item < 0) {
            $negativeNumbers++;
        }
        if (isSimpleNumber($item)) {
            $simpleNumbers++;
        }
    }

    function isSimpleNumber($number)
    {
        for ($x = 2; $x <= sqrt($number);
        if (!($number % $x)) return false;

        return true;
    }


    if ($zeroNumbers != 0) {
        echo "Нулевых чисел: " . $zeroNumbers = $zeroNumbers / count($array);
        .
        "%";
    } else {
        echo "Нулевых чисел не найдено";
    }
    echo "<br>";

    if ($zeroNumbers != 0) {
        echo "Положительных чисел: " . $positiveNumbers = $positiveNumbers / count($array);
        .
        "%";
    } else {
        echo "Положительных чисел не найдено";
    }
    echo "<br>";

    if ($zeroNumbers != 0) {
        echo "Отрицательных чисел: " . $negativeNumbers = $negativeNumbers / count($array);
        .
        "%";
    } else {
        echo "Отрицательных чисел не найдено";
    }
    echo "<br>";

    if ($zeroNumbers != 0) {
        echo "Простых чисел: " . $simpleNumbers = $simpleNumbers / count($array);
        .
        "%";
    } else {
        echo "Простых чисел не найдено";
    }
    echo "<br>";

}


$array = [-13, 25, -3, 1, 0, 7, 15, 0, -35, 127, 743, -40, 0, 33, 37];
parseNumbers($array);


/*

Отсортировать элементы по возрастанию/убыванию

*/


function sortNumbersIncrease($array)
{
    for ($j = 0; $j < count($array) - 1; $j++) {
        for ($i = 0; $i < count($array) - $j - 1; $i++) {
            if ($array[$i] < $array[$i + 1]) {
                $result = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $result;
            }
        }
    }
    foreach ($array as $number) {
        echo $number;
    }
}

function sortNumbersDecrease($array)
{
    for ($j = 0; $j < count($array) - 1; $j++) {
        for ($i = 0; $i < count($array) - $j - 1; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $result = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $result;
            }
        }
    }
    foreach ($array as $number) {
        echo $number;
    }
}

echo "Сортируем по возрастанию: ";
sortNumbersIncrease($array);
echo "<br>";
echo "Сортируем по убыванию :";
sortNumbersDecrease($array);
