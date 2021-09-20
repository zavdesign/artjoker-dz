<?php
/*

ArtJoker курс PHP "Zero to Hero"

DZ1-5

Рекурсии
Написать рекурсивную функцию которая будет обходить и выводить все значения любого массива и любого уровня вложенности

 */


$array = [
    "level 1" => ["level 1.1", "level 1.2"],
    "level 2",
    "level 3" => ["level 3.1", "level 3.2" => ["level 3.2.1", "level 3.2.2"], 
    "level 3.3"],
    "level 4" => ["level 4.1", "level 4.2", "level 4.3", "level 4.4"],
];


function recursiveArray($array)
{
    if(is_array($array))
    {
        for($i=0; $i<count($array); $i++)
        {
            if(is_array($array[$i]))
            {
                recursiveArray($array[$i]);
            }
            else
            {
                echo $array[$i].'<br>';
            }
        }
    }
    else
    {
        echo $array.'<br>';    
    }
}