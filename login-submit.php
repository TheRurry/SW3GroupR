<?php
$name = $_POST["name"];
$pw = $_POST["password"];

if (is_correct_password($name, $pw)) {
	# redirect?
	session_start();
	$_SESSION["name"] = $name;

	#redirect to this page after successful login
	header("Location: profile.php");
	die();
} else {
	print "Incorrect Login!";
}

# query database to see if user typed the right password
function is_correct_password($name, $pw) {
	$db = new PDO("mysql:dbname=simpsons", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$rows = $db->query("SELECT password FROM students WHERE name = '$name'");
	foreach ($rows as $row) {
		$correct_password = $row["password"];
		if ($pw == $correct_password) {
			return TRUE;
		}
	}
	return FALSE;
}
?>
