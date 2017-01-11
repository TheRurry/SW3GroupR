<!DOCTYPE html>
<html>
	<!--
	CSE 190 M, Spring 2012
	-->
	<head>
		<title>Springfield Elementary School</title>
		<link href="simpsons.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="logoarea">
			<img src="simpsons.png" alt="logo" />
		</div>

		<h1>Springfield Elementary Web Site</h1>


	<form action="upload.php" method="post" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload Image" name="submit">
	</form>

	</body>
</html>
