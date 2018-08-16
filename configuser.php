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

	if(isset($_POST['signup'])){
		$user=$_POST['username'];
		$firstname=$_POST['firstName'];
		$lastname=$_POST['lastName'];
		$college=$_POST['college'];
		$course=$_POST['course'];
		$age=$_POST['age'];
		$phone=$_POST['phoneNo'];
		$pass=$_POST['password'];

		$valid="SELECT * FROM userdata";
		$query=$conn->query($valid);
		$numofrow=$query->num_rows;
		if($numofrow>0){
			while ($row=$query->fetch_assoc()) {
				if($user==$row['username']){
					$_SESSION['error']="lsfksadf";
					header("location: index.php");
				}
				else{
					$sql="INSERT INTO userdata(firstname,lastname,username,college,course,age,phone,password)
					VALUES('".$firstname."','".$lastname."','".$user."','".$college."','".$course."','".$age."','".$phone."','".$pass."')";
					$query=$conn->query($sql);
					header("location: login.php");
							}
			}
		}



		
	}

	if(isset($_POST['login'])){
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$loginsql="SELECT * FROM userdata";
		$query=$conn->query($loginsql);
		$numofrow=$query->num_rows;
		if($numofrow>0){
			while($row=$query->fetch_assoc()){
				if($row['username']==$user&&$row['password']==$pass){
					$_SESSION['username']=$user;
					header("location: examportal.php");
				}
				else{
					$_SESSION['loginerror']="fdlasnf";
					header("location: login.php");
				}
			}
		}
	}


?>