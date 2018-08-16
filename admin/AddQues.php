<?php include "configAdmin.php";?>
<?php include "sidebar.php";?>
<?php
if(!isset($_SESSION['adminName'])){
		header("Location: index.php");
	}
?>
					<h3>Add Product</h3>
					<form action="configAdmin.php" method="post">
								<p>
									<label>Question</label><br>
									<textarea id="ques" name="ques" cols="30" rows="10"></textarea>
								</p>
								
								<p>
									<label>Option 1</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="opt1" />
								</p>
								<p>
									<label>Option 2</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="opt2" />
								</p>
								
								<p>
									<label>Option 3</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="opt3" />
								
								<p>
									<label>Option 4</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="opt4" />

								
								</p>
									<p>
									<label>Correct Answer</label>
									<input class="text-input medium-input datepicker" type="text" id="medium-input" name="correctans" />

								
								</p>
								
								
								<p>
									<input class="submit" name="submit" type="submit" value="Submit" />
								</p>

							
						
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
