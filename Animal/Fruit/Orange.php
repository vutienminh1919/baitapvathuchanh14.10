<?php
include_once __DIR__ . "/../Abstract/Fruit.php";
class Orange extends Fruit
{
    public function howToEat()
    {
        return " could be juiced";
}
}