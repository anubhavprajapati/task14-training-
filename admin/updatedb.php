<?php
include "configAdmin.php";

	if(isset($_POST['edit'])){
		$id=$_POST['editid'];
		$ques=$_POST['ques'];
		$opt1=$_POST['opt1'];
		$opt2=$_POST['opt2'];
		$opt3=$_POST['opt3'];
		$opt4=$_POST['opt4'];
		$correctans=$_POST['correctans'];

		$updatesql="UPDATE questions SET ques='".$ques."',opt1='".$opt1."',opt2='".$opt2."',opt3='".$opt3."',opt4='".$opt4."',correctans='".$correctans."'  WHERE id=".$id;
		$newquery=$conn->query($updatesql);
		header("Location: ManageQues.php");

	}


?>