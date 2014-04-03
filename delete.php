<?php
include_once 'connect.php'
?>

<?php if (isset($_SESSION['user'])) 
{
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>verwijder</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
	<div class="center">
		<h1> Toevoegen </h1>
		<a href="index.php" class="hom">Get Back!</a>
	<p>Mission Completed Sir!</p>
	</div>
	</body>
</html>


<?php
$id = $_GET['id'];

$query = "delete from leden where id = ".$id;

mysql_query($query);
}
?>
