<?php

namespace classes;

class Triangle extends Figure
{
    public $sideA;
    public $sideB;
    public $sideC;

    function __construct($sideA, $sideB, $sideC)
    {
        parent::__construct();
        $this->$sideA = $sideA;
        $this->$sideB = $sideB;
        $this->$sideC = $sideC;
    }

    function Perimetr()
    {
        $perimetr = $this->$sideA +  $this->$sideB +  $this->$sideC;
        return $perimetr;
    }

    // Heron's formula
    function Square()
    {
        $square = sqrt ( $perimetr * ($perimetr/2 - $this->$sideA) * ($perimetr/2 - $this->$sideB) * ($perimetr/2 - $this->$sideA) );
        return $square;
    }

}