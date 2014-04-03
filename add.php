<?php
include_once 'connect.php'
?>

<?php if (isset($_SESSION['user'])) 
{
 ?>


<!DOCTYPE html>
<html>
	<head>
		<title>toevoegen</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
	<div class="center">
		<h1> Toevoegen </h1>
		<?php
			$naam = $_GET['name'];
			$mail = $_GET['email'];
			$phone = $_GET['phone'];
			$add = $_GET['address'];
			$password = $_GET['password'];
			$password2 =  $_GET['password2'];
			if($password != $password2)
			{
				echo("De wachtwoorden zijn niet gelijk");
			}
			
			
			else
			{
			
			$password = sha1($password);
			
			$query = "insert into leden (name, email, phone, address, password)
					values ('$naam', '$mail', '$phone', '$add', '$password')";
	
			echo $query;
			mysql_query($query);
			}
		?>
	<p>Mission Completed Sir!</p>
	<a href="index.php" class="hom">Get Back!</a>
	</div>
	</body>
</html>

	<?php
	}
	else
	{
	header("Location:login.php");
	}
		?>