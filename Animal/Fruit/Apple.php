<?php
include_once __DIR__ . "/../Abstract/Fruit.php";
class Apple extends Fruit
{
    public function howToEat(): string
    {
        return "could be sliced";
    }
}