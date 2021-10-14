<?php
include_once "Shape3.php";
include_once "Colorable.php";

class Circle3 extends Shape3
{
    public float $radius;

    public function __construct(string $name, float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): float
    {
        return pi() * $this->radius * 2;
    }
}