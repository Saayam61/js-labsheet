<?php

$area = calculateCircleArea(5);
echo "The area of circle is: $area ";

function calculateCircleArea($radius){
    return pi() * pow($radius, 2);
}

?>