<!DOCTYPE html>
<html>
	<!--
	CSE 190 M, Spring 2012
	This page shows a login form for the student to log in to the system.
	Once the student logs in, a PHP session is created so that the other pages
	remember the student and can show that student's grades.
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

		<h2>Profile</h2>

		<form id="register" action="profile-submit.php" method="post">
			<fieldset>
				<legend>Change my name or password. Email cannot be changed. Please enter the correct email to change details.</legend>
				<dl>
					<dt>Name</dt>
					<dd>
						<input type="text" name="name" />
					</dd>
          <dt>Email</dt>
          <dd>
						<input type="email" name="email" />
					</dd>
					<dt>Password</dt>
					<dd>
						<input type="password" name="password" />
					</dd>
				</dl>
				<input type="submit" value="Confirm changes" />
			</fieldset>
		</form>
	</body>
</html>
