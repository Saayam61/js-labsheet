<?php

$std = ['saayam'=>99, 'samiksha'=>80, 'hari'=>10, 'ram'=>55];
$total = 0;
$count = 0;

foreach($std as $name=>$grade){
    $total = $total + $grade;
    $count++;
}

$avg = $total/$count;

echo "Average Grade: $avg"

?>