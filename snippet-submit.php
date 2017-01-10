<?php

$conn = mysqli_connect("localhost", "root", "", "simpsons");

if(!$conn){
  die("connection failed: ".mysqli_connect_error());
}

session_start();
$userid = $_POST['userid'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO snippets (userid, title, content, sid)
VALUES ($userid, '$title', '$content', '')";
$result = mysqli_query($conn, $sql);

header("Location: snippets.php");
?>
