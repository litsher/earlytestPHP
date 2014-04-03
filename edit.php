<?php
include_once 'connect.php'
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Wijzig</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>	
	<div class="center">
		<h1> Wijzig </h1>
		
			<?php	
				$id = $_GET['id'];
				$query = 'select * from leden where id = '.$id;
				
				$result = mysql_query($query);
				$row = mysql_fetch_assoc($result);
			?>
		  
		
		  <form action="update.php?id=<?php echo $row['id'] ?>" method="GET">
		  
			  <p>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
			  </p>
			   <p>
			   
				<label>Wachtwoord: </label>
				<input type="password" name="pass" />
			  </p>

			  <p>
				<label>Wachtwoord nogmaals: </label>
				<input type="password" name="pass2" />
			  </p>
			  <p>
			  <label>&nbsp;</label>
			  <input type="submit" name="submit" />
		  </form>
	</div>
	</body>
</html>