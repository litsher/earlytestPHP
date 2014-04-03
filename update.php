<?php
include_once 'connect.php'
?>


<?php
			$id = $_GET['id'];
			$pass = $_GET['pass'];
			$pass2 =  $_GET['pass2'];
			if($pass != $pass2)
			{
				echo("De wachtwoorden zijn niet gelijk");
			}
			else
			{
				$pass = sha1($pass) ; 
			
			$query = "update leden 
			set password = '$pass'
			where id = '$id' ";  
			header("Location:index.php");	
			}
	mysql_query($query);

	?>
