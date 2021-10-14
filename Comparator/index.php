<?php
include_once "CircleComparator.php";

$circle1 = new Circle1("minh", 10);
$circle2 = new Circle1("thanh", 1);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circle1, $circle2));