<?php

$conn = mysqli_connect("localhost", "root", "", "simpsons");

if(!$conn){
  die("connection failed: ".mysqli_connect_error());
}

session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO students (name, email, password, id)
VALUES ('$name', '$email', '$password', '')";

$result = mysqli_query($conn, $sql);

header("Location: start.php");
?>
