<?php

include_once __DIR__ . '/../Abstract/Animal.php';
class Tiger extends Animal
{
    public function makeSound():string
    {
        return "Tiger: bao nhieu lau thi ban duoc 1 ty goi me` ?";
    }

}