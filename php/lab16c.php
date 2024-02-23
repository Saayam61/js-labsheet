<?php
$a = 5;
$b = 10;

echo "Before Swapping: a = {$a} and b = {$b}";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After Swapping: a = {$a} and b = {$b}";
?>