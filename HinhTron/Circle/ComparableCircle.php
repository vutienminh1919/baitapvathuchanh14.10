<?php
include_once "Circle.php";
include_once "Comparable.php";

class ComparableCircle extends Circle implements Comparable

{
    public function compareTo($obj2): string
    {
        $circle2Radius = $obj2->getRadius();
        if ($this->getRadius() > $circle2Radius) {
            return "bigger";
        } else if ($this->getRadius() < $circle2Radius) {
            return "smaller";
        } else {
            return "equal";
        }
    }
}