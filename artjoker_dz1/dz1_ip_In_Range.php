<?php

/*
ArtJoker курс PHP "Zero to Hero"

DZ1-4

 Написать функцию которая вычисляет входит ли IP-адрес в диапазон указанных IP-адресов. Вычислить для версии ipv4.

 */


function ipInRange($ip, $ipStart, $ipEnd)
{

    if (ip2long($ip)>=ip2long($ipStart) && ip2long($ip)<=ip2long($ipEnd)) {
        echo "in range";
    }
    else 
    {
        echo "not in range";
    }
}



