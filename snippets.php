<!DOCTYPE html>
<html>
	<head>
		<title>Springfield Elementary School</title>
		<link href="simpsons.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="logoarea">
			<img src="simpsons.png" alt="logo" />
		</div>

		<h1>Springfield Elementary Web Site</h1>

		<h2>Your Snippets:</h2>

		<table>
			<tr><th></th><th></th></tr>

			<?php
			#session_start();
			#$name = $_SESSION["name"];
			#$query = "SELECT c.name, g.grade
			#          FROM students st
			#          JOIN snippets sn ON st.id = sn.studentid
			#          WHERE st.id = ";

			#$db = new PDO("mysql:dbname=simpsons", "root", "");
			#$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			?>
		</table>

    <form id="Add a snippet" action="snippet-submit.php" method="post">
      <fieldset>
        <legend>Snippets</legend>
        <dl>
          <dt>User ID</dt>
          <dd>
            <input type="number" name="userid" />
          </dd>
          <dt>Title</dt>
          <dd>
            <input type="text" name="title" />
          </dd>
          <dt>Content</dt>
          <dd>
            <input type="text" name="content" />
          </dd>
        </dl>
        <input type="submit" value="Add" />
      </fieldset>
    </form>

	</body>
</html>
