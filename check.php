<?php
$connection = mysql_connect('localhost', 'root');
mysql_select_db('personeelsvereniging');
SESSION_start();

$email = $_POST['email'];
$password = sha1($_POST['password']);




$query = "select * from leden where email = '$email' and password = '$password'";
$result = mysql_query($query);
if ($row = mysql_fetch_assoc($result))
 {
	$name = $row['name'];
	$_SESSION['user'] = $name;
	$name = true;
	header("Location:index.php");
 }
else
{
	header("Location:login.php");

}
?>