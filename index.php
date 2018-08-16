<?php
	if(isset($_SESSION['error'])){
		echo "<script>alert('Username already exists');</script>";
		unset($_SESSION['error']);
	}
	?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="configuser.php" method="post">
<table>
<tr><th>First Name:</th><td> <input type="text" name="firstName" required="required"></input><br></td></tr>
<tr><th>Last Name:</th><td> <input type="text" name="lastName" required="required"></input><br></td></tr>
<tr><th>Username:</th><td> <input type="text" name="username" required="required"></input><br></td></tr>
<tr><th>College:</th><td> <input type="text" name="college" required="required"></input><br></td></tr>
<tr><th>Course:</th><td> <input type="text" name="course" required="required"></input><br></td></tr>
<tr><th>Age:</th><td> <input type="number" name="age" required="required"></input><br></td></tr>
<tr><th>Phone no:</th><td> <input type="text" name="phoneNo" required="required"></input><br></td></tr>
<tr><th>Password:</th><td> <input type="password" name="password" required="required"></input><br></td></tr>
<tr> <th colspan=2><input type="submit" name="signup" value="signup"></input></th></tr><br>
<tr><th colspan=2><a href="login.php">Already have account! Login here.</a></th></tr>
</table>
</form>


</body>
</html>