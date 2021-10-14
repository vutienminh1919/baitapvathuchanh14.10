<?php
include_once "Colorable.php";
include_once "Rectangle3.php";

class Square3 extends Rectangle3 implements Colorable
{
    public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function howToColor()
    {
        return "Color all four side";
    }
}