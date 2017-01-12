<?php
  $conn = mysqli_connect("localhost", "root", "", "simpsons");
  if(!$conn){
    die("connection failed: ".mysqli_connect_error());
  }
  session_start();
  $userid = $_POST["userid"];
  $title = $_POST["title"];
  $content = $_POST["content"];
  $sql = "INSERT INTO snippets (userid, title, content, sid)
  VALUES ($userid, '$title', '$content', '')";

// ', ''); UPDATE students SET isadmin=1 WHERE id=30 #
  
  $result = mysqli_multi_query($conn, $sql);
  header("Location: snippets.php?message=Successfully%20sumbitted&userid=".$userid);
?>
