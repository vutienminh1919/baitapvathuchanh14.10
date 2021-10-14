<?php
include_once __DIR__ . '/../Abstract/Animal.php';
include_once __DIR__ . '/../Interface/Edible.php';

class Chicken extends Animal
{
    public function makeSound(): string
    {
        return "Chiken: cuc ta cuc tac !";
    }

    public function howToEat()
    {
        return " could be fried";
    }

}