<?php
include "config.php";

$quesarr=array();
$id=$_POST['id'];
//
//print_r($selectedval);
//die();
if($id<11){

$sql = "SELECT * FROM questions where id=".$id;
$res_data = $conn->query($sql);
if($res_data->num_rows>0){
	while($row=$res_data->fetch_assoc()) {
	array_push($quesarr, array('ques'=>$row['ques'],'opt1'=>$row['opt1'],'opt2'=>$row['opt2'],'opt3'=>$row['opt3'],'opt4'=>$row['opt4'],'correctans'=>$row['correctans'],'id'=>$row['id']));

/*
$newsql="INSERT INTO `result` (`selected`, `quesid`) VALUES ('$selectedval', '$id')";
$query=$conn->query($newsql);

*/
echo json_encode($quesarr);
}
}
}/*
else{
	$selectedval=json_decode($_POST['data']);
	print_r($selectedval);
	$count=0;
	for($i=1;$i<=10;$i++){

		$sql = "SELECT * FROM questions where id=".$i;
		$res_data = $conn->query($sql);
		if($res_data->num_rows>0){
			while($row=$res_data->fetch_assoc()) {
					if($row['correctans']==$selectedval[$i]){
						$count++;
					
				}
			}
		}
	}
	//print_r($count);
	echo json_encode($count);
}


*/

	//$_SESSION['ques']+=$quesarr;
		




	?>