<?php

$conn = mysqli_connect("localhost", "root", "", "simpsons");

if(!$conn){
  die("connection failed: ".mysqli_connect_error());
}

session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "UPDATE students
SET name='$name', password='$password'
WHERE email='$email'";
#if want to be able to change email, and not have to enter email for confirmation, do:
#WHERE name='$_SESSION["name"]'

$result = mysqli_query($conn, $sql);
if(!$result){
  die("Could not update data: ". mmysql_error());
}
echo "Updated data successfully\n";
#header("Location: start.php");
?>
