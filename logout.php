<?php
$connection = mysql_connect('localhost', 'root');
mysql_select_db('personeelsvereniging');
?>


	<!DOCTYPE html>
	<html>
		<head>
			<title>Logout</title>
			<link href="style.css" rel="stylesheet" type="text/css" />
		</head>
		<body>
		
		<div class="center">
		<?php session_start ();
		unset ($_SESSION['user']);?>
		<a href="login.php">Go home!</a>
		<p>U bent sucsesvol uitgelogd!</p>
		</div>
	</body>
</html>