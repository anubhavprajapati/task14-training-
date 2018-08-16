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
	if(isset($_POST['submit'])){
		$ques=$_POST['ques'];
		$opt1=$_POST['opt1'];
		$opt2=$_POST['opt2'];
		$opt3=$_POST['opt3'];
		$opt4=$_POST['opt4'];
		$correctans=$_POST['correctans'];

		$sql="INSERT INTO questions(ques,opt1,opt2,opt3,opt4,correctans)
		VALUES('".$ques."','".$opt1."','".$opt2."','".$opt3."','".$opt4."','".$correctans."')";
		$query=$conn->query($sql);
		header("Location: AddQues.php");

	}
	if(isset($_POST['signup'])){
		$user=$_POST['username'];
		$pass=$_POST['password'];

		$sql="SELECT * FROM admin";
		$query=$conn->query($sql);
		$numofrow=$query->num_rows;
		if($numofrow>0){
			while($row=$query->fetch_assoc()){
				if($row['username']==$user&&$row['password']==$pass){
					$_SESSION['adminName']=$user;
					header("location: ManageQues.php");
				}else{
					header("Location:index.php");
				}
			}
		}
	}

?>