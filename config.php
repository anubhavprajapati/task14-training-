<?php
	session_start();
	$dbserver="localhost";
	$username= "root";
	$password= "";
	$dbname="task14";

	$conn=new mysqli($dbserver, $username,$password, $dbname);
	
	if($conn->connect_error){
		die("Connection Error".$conn->connect_error);
	}



?>