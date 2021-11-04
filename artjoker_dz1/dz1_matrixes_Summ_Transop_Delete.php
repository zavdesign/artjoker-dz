<?php
/*

ArtJoker курс PHP "Zero to Hero"

DZ1-6
Для двумерных массивов
-   Транспонировать матрицу
-   Сложить две матрицы
-   Удалить те строки, в которых сумма элементов положительна и присутствует хотя бы один нулевой элемент. Аналогично для столбцов.

 */


echo "<h3>Matrix1 </h3>";

$matrix1 = [];
$row = 5;
$column = 5;
$minNumber = -1;
$maxNumber = 1;
for ($i = 0; $i < $column; $i++) {
    for ($j = 0; $j < $row; $j++) {
        $matrix1[$i][$j] = rand($minNumber, $maxNumber);
        echo $matrix1[$i][$j] . " ";
    }
    echo "<br>";
}


echo "<h3>Matrix2 </h3>";

$matrix2 = [];
$row = 5;
$column = 5;
$minNumber = -2;
$maxNumber = 2;
for ($i = 0; $i < $column; $i++) {
    for ($r = 0; $j < $row; $j++) {
        $matrix2[$i][$j] = rand($minNumber, $maxNumber);
        echo $matrix2[$i][$j] . " ";
    }
    echo "<br>";
}


echo "<h3>Summa Matrix </h3>";

$SummMatrix = [];
for ($i = 0; $i < $column; $i++) {
    $sumrow = 0;
    for ($j = 0; $j < $row; $j++) {
        $SummMatrix[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        echo $SummMatrix[$i][$j] . " ";
        $sumrow += $matrix1[$i][$j];
    }
    echo "<br>";
}
echo "<br>";


echo "<h3>Transponation Summa Matrix </h3>";

$SummMatrixTranspon = [];
foreach ($SummMatrix as $key => $subarr) {
    foreach ($subarr as $subkey => $subvalue) {
        $SummMatrixTranspon[$subkey][$key] = $subvalue;
    }
}
for ($i = 0; $i < $column; $i++) {
    for ($j = 0; $j < $row; $j++) {
        echo $SummMatrixTranspon[$i][$j] . " ";
    }
    echo "<br>";
}


echo "<h3>Transponation Summa Matrix Delete Elements</h3>";

function isDropMatrixElements($array)
{
    $columns_to_remove = [];
    $rows_to_remove = [];

    for ($row_index = 0; $row_index < count($array); $row_index++) {
        if (needDroped($array[$row_index])) {
            $rows_to_remove[] = $row_index;
        }
        $column = [];
        for ($column_index = 0; $column_index < count($array); $column_index++) {
            $column[] = $array[$column_index][$row_index];
        }
        if (needDroped($column)) {
            $columns_to_remove[] = $row_index;
        }
    }
    $result = $array;
    foreach ($result as $row_index => $row) {
        if (in_array($row_index, $rows_to_remove)) {
            unset($result[$row_index]);
        } else {
            foreach ($columns_to_remove as $column_index) {
                unset($result[$row_index][$column_index]);
            }
        }
    }
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $result[$i][$j] . " ";
        }
        echo "<br>";
    }
}

function needDroped($arr){
    $sum = 0;
    $null_exist = false;
    foreach ($arr as $v) {
        if ($v === 0) {
            $null_exist = true;
        }
        $sum += $v;
    }
    return $null_exist && $sum > 0;
}