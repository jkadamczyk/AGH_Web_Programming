<?php file_get_contents("header.html"); ?>

<head>
	<title>Załóż Bloga</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<body>
	<form method="POST" action="nowy.php" id="addBlog">
		Nazwa bloga:<br>
		<input type="text" name="blogName" ><br>
		Nazwa użytkownika:<br>
		<input type="text" name="username" ><br>
		Hasło:<br>
		<input type="password" name="password" ><br>
		Opis bloga:<br>
		<textarea name="description"></textarea><br>
		<input type="submit">
		<input type="reset" value="Wyczyść">
	</form>
</body>

</html>
