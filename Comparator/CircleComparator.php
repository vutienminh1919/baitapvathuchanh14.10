<?php
include_once "Comparator.php";
include_once "Circle1.php";
class CircleComparator implements Comparator
{
    function compare(object $circle1,object $circle2):string
    {
        $radius1 = $circle1->getRadius();
        $radius2 = $circle2->getRadius();

        if ($radius1>$radius2){
            return "bigger";
        }else if ($radius1<$radius2){
            return "smaller";
        }else{
            return "equal";
        }
    }
}