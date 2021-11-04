<?php

namespace classes;

class Rectangle extends Figure
{
    public $height;
    public $width;

    function __construct()
    {
        parent::__construct();
        $this->$height = $height;
        $this->$width = $width;
    }

    function Perimetr()
    {
        $perimetr = $this->height * 2 + $this->width * 2;
        return $perimetr;
    }

    function Square()
    {
        $square = $this->height * $this->width;
        return $square;
    }

}