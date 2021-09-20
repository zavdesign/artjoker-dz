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
for ($c = 0; $c < $column; $c++)
{
    for ($r = 0; $r < $row; $r++)
    {
        $matrix1[$c][$r] = rand($minNumber, $maxNumber);
        echo $matrix1[$c][$r] . " ";
    }
    echo "<br>";
}
        

echo "<h3>Matrix2 </h3>";

$matrix2 = []);
    $row = 5;
    $column = 5;
    $minNumber = -2;
    $maxNumber = 2;
for ($c = 0; $c < $column; $c++)
{   
    for ($r = 0; $r < $row; $r++)
    {
        $matrix2[$c][$r] = rand($minNumber, $maxNumber);
        echo $matrix2[$c][$r] . " ";
    }
    echo "<br>";
}


echo "<h3>Summa Matrix </h3>";

$SummMatrix = [];
for($c = 0; $c < $column; $c++)
{
    $sumrow = 0;
    for($r = 0; $r < $row; $r++)
    {
        $SummMatrix[$c][$r] = $matrix1[$c][$r] + $matrix2[$c][$r];
        echo $SummMatrix[$c][$r] . " ";
        $sumrow += $matrix1[$c][$r];
    }
    echo "<br>";
    }
echo "<br>";


echo "<h3>Transponation Summa Matrix </h3>";

$SummMatrixTranspon = [];
foreach ($SummMatrix as $key => $subarr) 
{
    foreach ($subarr as $subkey => $subvalue) 
    {
        $SummMatrixTranspon[$subkey][$key] = $subvalue;
    }
}
for($c = 0; $ c < $column; $c++)
{
    for($r = 0; $ r < $row; $r++)
    {
       echo $SummMatrixTranspon[$c][$r] . " ";
    }
    echo "<br>";
}


echo "<h3>Transponation Summa Matrix Delete Elements</h3>";

function isDropMatrixElements($array)
{
    $columns_to_remove = [];
    $rows_to_remove = [];

    for ($row_index = 0; $row_index < count($array); $row_index++) 
    {
        if (needDroped($array[$row_index])) {
            $rows_to_remove[] = $row_index;
        }
        $column = [];
        for ($column_index = 0; $column_index < count($array); $column_index++) 
        {
            $column[] = $array[$column_index][$row_index];
        }
        if (needDroped($column)) {
            $columns_to_remove[] = $row_index;
        }
    }
    $result = $array;
    foreach ($result as $row_index => $row) 
    {
        if (in_array($row_index, $rows_to_remove)) {
            unset($result[$row_index]);
        } else {
            foreach ($columns_to_remove as $column_index) 
            {
                unset($result[$row_index][$column_index]);
            }
        }
    }


    for ($i = 0; $i < 3; $i++) 
    {
        for ($j = 0; $j < 3; $j++) 
        {
            echo $result[$i][$j] . " ";
        }
        echo "<br>";
    }

}

function needDroped($arr)
{
    $sum = 0;
    $null_exist = false;
    foreach ($arr as $v) 
    {
        if ($v === 0) 
        {
            $null_exist = true;
        }
        $sum += $v;
    }
    return $null_exist && $sum > 0;
}