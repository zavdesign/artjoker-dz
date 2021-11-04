<?php

namespace classes;

class Rectangle extends Figure
{
    public $radius;

    function __construct($radius)
    {
        parent::__construct();
        $this->radius = $radius;
    }


    function Perimetr()
    {
        $perimetr = 2 * pi() * $this->radius;;
        return $perimetr;
    }

    function Square()
    {
        $perimetr = 2 * pi() * $this->radius;
        return $perimetr;
    }

}
