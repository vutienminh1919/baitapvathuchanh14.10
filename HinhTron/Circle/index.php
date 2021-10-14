<?php
include_once "ComparableCircle.php";
$circle1 = new ComparableCircle("minh",8);
$circle2 = new ComparableCircle("thanh",9);
$circle3 = new ComparableCircle("duc",10);


$test  = $circle1->compareTo($circle2);
echo ('comparable: ');
echo $test;