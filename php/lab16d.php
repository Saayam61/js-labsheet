<?php
$age = 25;
$isStudent = true;
$isEmployed = false;

if ($age >= 18 && $isStudent) {
    echo "You are a student and old enough to vote. <br>";
} else {
    echo "You are either not a student or not old enough to vote. <br>";
}

if ($isStudent || $isEmployed) {
    echo "You are either a student or employed. <br>";
} else {
    echo "You are neither a student nor employed. <br>";
}

if (!$isEmployed) {
    echo "You are not employed. <br>";
} else {
    echo "You are employed. <br>";
}
?>
