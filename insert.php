<?php
include_once 'connect.php'
?>

<?php if (isset($_SESSION['user'])) 
{
 ?>



<!DOCTYPE html>
<html>
	<head>
		<title>Personeelsverenining</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
	<div class="center">
	
	<a href="index.php">terug</a>
		<h1> Personeelsverenining </h1>
		  <form action="add.php" method="get">
			  <p>
				<label>Naam: </label>
				<input type="text" name="name"/>
			  </p>
			  
			  <p>
				<label>E-mail: </label>
				<input type="text" name="email"/>
			  </p>
			  <p>
				<label>Telefoonnummer: </label>
				<input type="text" name="phone"/>
			  </p>
			  
			  <p>
				<label>address: </label>
				<input type="text" name="address"/>
			  </p>			  

			  <p>
				<label>Wachtwoord: </label>
				<input type="password" name="password"/>
			  </p>

			  <p>
				<label>Wachtwoord Herhalen: </label>
				<input type="password" name="password2"/>
			  </p>			  
			  
			  <p>
			  <label>&nbsp;</label>
			  <input type="submit" />
		  </form>
	</div>
	</body>
	<?php
	
		}
		else
		{
		header("Location:login.php");
		
		}
	?>	
</html>