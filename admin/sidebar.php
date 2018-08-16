	<ul>
		<li><a href="ManageStudent.php">Manage Student</a></li>
		<li><a  href="ManageQues.php">Manage Question</a></li>
		<li><a  href="AddQues.php">Add Question</a></li>
        <li><a  href="ViewUserResult.php">View Users Result</a></li>

	</ul>
    <?php
    if(isset($_SESSION['adminName'])){
        echo "<p>WELCOME: ".$_SESSION['adminName'];"<p>";
    }
    else{
        header("location: index.php");
    }
    ?>
    <br>
    <a href="logout.php"><input type="button" value="Logout" name="logout"/></a>

				
				