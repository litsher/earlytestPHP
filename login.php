<?php
include_once 'connect.php'
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	
	<div class="center">

		<div class="header">

			<h1> Login </h1>

					  <form class="logini" action="check.php" method="post">
			  <p>
				<label>Email: </label>
				<input type="text" name="email" />
			  </p>
			  
			  <p>
				<label>Wachtwoord: </label>
				<input type="password" name="password" />
			  </p>
			  
			  <p>
			  <label>&nbsp;</label>
			  <input type="submit" name="submit" />
		  </form>

		</div>

		<div class="login">

			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
			 Vestibulum tortor quam, feugiat vitae, ultricies eget,
			  tempor sit amet, ante.
			   Donec eu libero sit amet quam egestas semper. 
			   Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
			    Quisque sit amet est et sapien ullamcorper pharetra.
			     Vestibulum erat wisi, condimentum sed, commodo vitae,
			      ornare sit amet, wisi. Aenean fermentum, 
			      elit eget tincidunt condimentum, eros ipsum rutrum orci,
			       sagittis tempus lacus enim ac dui. 
			       Donec non enim in turpis pulvinar facilisis. 
			       Ut felis. Praesent dapibus, neque id cursus faucibus, 
			       tortor neque egestas augue, 
			       vulputate magna eros eu erat. Aliquam erat volutpat. 
			       Nam dui mi, tincidunt quis, accumsan porttitor, 
			       facilisis luctus, metus</p>

		  </div> 
<p class="Copyright"> Copyright 2013 Nathan. All rights reserved.</p>
		

	</div>
	</body>
</html>