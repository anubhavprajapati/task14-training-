<?php
include "config.php";
	$action=$_POST['action'];
	if($action=="final"){
	$selectedval=json_decode($_POST['data']);
	//print_r($selectedval);
	/*foreach ($selectedval as $key=>$value) {
		$insert="INSERT INTO result(quesid,selected)
		VALUES('".$key."','".$value."')";
		$query=$conn->query($insert);
	}*/
	$count=0;
	for($i=1;$i<=10;$i++) {

        $sql = "SELECT * FROM questions where id=" . $i;
        $res_data = $conn->query($sql);
        if ($res_data->num_rows > 0) {
            while ($row = $res_data->fetch_assoc()) {
                if ($row['correctans'] == $selectedval[$i]) {
                    $count++;

                }
            }
        }
    }
        $insert="INSERT INTO result(username,correct_ans,ques_attempted)
		VALUES('".$_SESSION['username']."','".$count."','10')";
        $query=$conn->query($insert);
	//echo $count;
	//die();
}
	//print_r($count);
	echo json_encode($count);
	?>