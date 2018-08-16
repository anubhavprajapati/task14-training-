<?php
	if(isset($_SESSION['loginerror'])){
		print "<script>alert('Invalid Username.');</script>";
		unset($_SESSION['loginerror']);
	}?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="configuser.php" method="post">
Username: <input type="text" name="username"></input>
Password: <input type="password" name="password"></input>
<input type="submit" name="login" value="login"></input>
<a href="index.php">Dont have account! Signup here.</a>
</body>
</html>