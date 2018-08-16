<?php include "configAdmin.php";?>
<?php include "sidebar.php";?>

			
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Manage Questions</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<!--<div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
							</div>
						</div>
						-->
						<table>
							
							<thead>
								<tr>
								  
								   <th>Question</th>
								   <th>Option 1</th>
								   <th>Option 2</th>
								   <th>Option 3</th>
								   <th>Option 4</th>
								   <th>Correct Answer</th>
							
								</tr>
								
							</thead>
						 <form action="function.php" method="post">
						
							<tbody><?php

									        if (isset($_GET['pageno'])) {
									            $pageno = $_GET['pageno'];
									        } else {
									            $pageno = 1;
									        }
									        $no_of_records_per_page = 10;
									        $offset = ($pageno-1) * $no_of_records_per_page;


									        $total_pages_sql = "SELECT COUNT(*) FROM questions";

									        $result = $conn->query($total_pages_sql);
									        $total_rows = mysqli_fetch_array($result)[0];
									        //print_r($total_rows);

									        $total_pages = ceil($total_rows / $no_of_records_per_page);

									        $sql = "SELECT * FROM questions LIMIT ".$offset.',' .$no_of_records_per_page;

									        $res_data = $conn->query($sql);
									        
									   
							 if($res_data->num_rows>0){
								while($row=$res_data->fetch_assoc()) {?>
								
										<td ><?php echo $row['ques']; ?></td>
										<td><?php echo $row['opt1']; ?></td>
										<td><?php echo $row['opt2']; ?></td>
										<td><?php echo $row['opt3']; ?></td>
										<td><?php echo $row['opt4']; ?></td>
										<td><?php echo $row['correctans']; ?></td>
										
						
									<td>
										<!-- Icons -->
										<a href="UpdateQues.php?id=<?php echo $row['id'];?>&action=edit" title="Edit">Edit</a>
										&nbsp;&nbsp;&nbsp;
										<a onclick="return confirm('Are you sure want to delete this item ?');" href="function.php?id=<?php echo $row['id'];?>&action=delete"  title="Delete">Delete</a>	
									</td>
									
								</tr>
							
							<?php }}?>
							
						
		</div> <!-- End #main-content -->
	</div></body>
</html>
