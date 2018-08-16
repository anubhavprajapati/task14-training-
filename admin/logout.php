<?php 
	session_start();
	unset($_SESSION['adminName']);
	session_destroy($_SESSION['adminName']);
	header("location: index.php");
?>