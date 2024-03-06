<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "phplab";

$conn = new mysqli($host, $user, $pass, $name);

if($conn){
    echo 'Database Connection Success<br>';
}
else{
    die($conn);
}

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$sql = "INSERT INTO lab17c (name, email, message) VALUES ('$name','$email','$msg')";

if($conn->query($sql)){
    echo "Data entered successfully";
}
else{
    echo $conn->error;
}

$conn->close();
?>