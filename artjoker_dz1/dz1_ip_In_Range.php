<?php

/*
ArtJoker курс PHP "Zero to Hero"

DZ1-4

 Написать функцию которая вычисляет входит ли IP-адрес в диапазон указанных IP-адресов. Вычислить для версии ipv4.

 */


function ipInRange($ip)
{
    $low_ip =mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
    $high_ip= '121.0.0.0';
    if ($ip <= $high_ip && $low_ip <= $ip) 
    {
        echo "in range";
    }
    else 
    {
        echo "not in range";
    }
    return true;
}


echo ipInRange('45.126.101.65');
