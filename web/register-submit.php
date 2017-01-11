#register-submit.php
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

$getId = "SELECT id FROM students WHERE name = '$name';";
$query = mysqli_query($conn, $getId);
$newid = mysqli_fetch_array($query);
mkdir('users/'.$newid['id'],0777,true);

header("Location: start.php");
?>
