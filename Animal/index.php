<?php
include_once "Animals/Tiger.php";
include_once "Animals/Chicken.php";
include_once "Fruit/Apple.php";
include_once "Fruit/Orange.php";


echo('----Animals' . '<br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();
foreach ($animals as $animal) {
    echo $animal->makeSound() . "<br>";
    if ($animal instanceof  Chicken){
        echo $animal->howToEat()." ";
    }
}
echo ('---Fruit."<br>"');
$fruits[0] = new Apple();
$fruits[1] = new Orange();
    foreach ($fruits as $fruit){
        echo $fruit->howToEat()."<br>";
    }