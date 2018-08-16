<?php include "configAdmin.php";?>
<?php

if(isset($_GET['id'])){
	$action=$_GET['action'];
	if($action=="delete"){
		$sql="DELETE FROM questions WHERE id=".$_GET['id'];
		$query=$conn->query($sql);
		
		header("Location: ManageQues.php");
	}
}
if(isset($_GET['id'])){
	$action=$_GET['action'];
	if($action=="deleteStudent"){
		$sql="DELETE FROM userdata WHERE id=".$_GET['id'];
		$query=$conn->query($sql);
		
		header("Location: ManageStudent.php");
	}
}


?>