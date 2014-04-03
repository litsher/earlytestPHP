<?php
include_once 'connect.php'
?>

<?php if (isset($_SESSION['user'])) 
{
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>personeelsvereniging</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
	<div class="centerin">

			<div id="sidebar">
			
			
			
			<p> U bent ingelogt als :  
			<?php

			echo $_SESSION['user'];

			?>
			
			</p>
			<a href="logout.php" class="hom">Log me out</a>
			
	</div>
		
	
		<div class="header">

		<h1> personeelsvereniging </h1>

		</div>
		
		
		
		<div class="indexlist">
			<ul>
				<li><a href="insert.php" class="hom">toevoegen</a></li>
			</ul>
		</div>
		
			
		<div class="table">	
			<table>
				<tr>
					<th>Naam</th>
					<th>E-mail</th>
					<th>Telefoon</th>
					<th>Adres</th>
					<th>Wijzigen</th>
					<th>Verwijderen</th>
				</tr>
				<?php
				$query = "select * from leden";
				$result = mysql_query($query);
				while ($row = mysql_fetch_assoc($result))
				{
				$id = $row["id"];
				$naam = $row["name"];
				$email = $row["email"];
				$phone = $row["phone"];
				$address = $row["address"];
				?>
				<tr>
					<td><?php echo "$naam"; ?></td>
					<td><?php echo "$email"; ?></td>
					<td><?php echo "$phone"; ?></td>
					<td><?php echo "$address"; ?></td>
					<td><a href="edit.php?id=<?php echo $row['id'] ?>">Edit password<a></td>
					<td><a href="delete.php?id=<?php echo $row['id'] ?>">delete<a></td>
				</tr>
				<?php
				}
				}
				?>
			</table>
		</div>
	</div>
	</body>
</html>