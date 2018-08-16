<?php include "config.php";?>
<?php
if(!isset($_SESSION['username'])){
		header("Location: login.php");
	}
?>
<html>
<body>
<div id="countdown"></div>
<div id="notifier"></div>
<?php
if(isset($_SESSION['username'])){
echo "<p>WELCOME: ".$_SESSION['username'];"<p>";
}
else{
	header("location: login.php");
}
?>

<a href="logout.php"><input type="button" id="logout" name="logout" value="Logout" ></input></a>
<script type="text/javascript">
alert("You have only 50 sec to complete your quiz");
(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  }

  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + (x=x%60 < 10 ? 0 : x);
  }

  function setTimer( remain, actions ) {
    var action;
    (function countdown() {
       display("countdown", toMinuteAndSecond(remain));
       if (action = actions[remain]) {
         action();
       }
       if (remain > 0) {
         remain -= 1;
         setTimeout(arguments.callee, 1000);
       }
    })(); // End countdown
  }

  setTimer(50, {
     0: function () { 

     		myFunction(11);
            }
  });
})(); 


</script>
</body>
	<div id="main">
		<div id="sub">
	
			<form id="exam">
			<input type="button" id="start" value="Start Quiz" data-id="1"/>
			</form>
			<p id="demo"></p>
			
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
	$('#start').click(function(){

	$id=$(this).data('id');
	$.ajax({
	    url:"ajax.php",
	    method:"POST",
	    data:{id:$id},
	    dataType: "json"        
	}).done(function(data){
	    
	    //console.log(JSON.parse(data));
		var datalen=Object.keys(data).length;
		var formtable="";	

		for (var i=0; i<datalen; i++){
			formtable+="<table id=\"main\"><tr><td><p>QUES:"+data[i].ques+"</p></td></tr><tr><td><input type=\"radio\" class=\"option\" value=\"A\">"+data[i].opt1+"</input></td></tr><br><tr><td><input type=\"radio\" class=\"option\" value=\"B\">"+data[i].opt2+"</input></td><tr><td><input type=\"radio\" class=\"option\" value=\"C\">"+data[i].opt3+"</input></td><tr><td><input type=\"radio\" class=\"option\" value=\"D\">"+data[i].opt4+"</input></td></tr><tr>";

		formtable+="</table>";
		
		var form="<input type=\"button\" value=\"next\" id=\"nextbtn\" name=\"next\" onclick=\"myFunction('"+data[i].id+"')\" data-nxtid="+data[i].id+" class=\"nxtbutton\"></input>";
	}
		$('#exam').html(formtable);
		$('#demo').html(form);
	});
});
});

var data=new Array();

function myFunction(idq){
	var ans=$('#main input:radio:checked').val();
	data[idq]=ans;
//	data.push(ans);
//	data.push(idq);
	var myJSON = JSON.stringify(data); 
	idq++;

	//var nextid=id
	if(idq<11){
	var $id=idq;

	$.ajax({
	    url:"ajax.php",	
	    method:"POST",
	    data:{id:$id},
	    dataType: "json"        
	}).done(function(data){
	  // alert(data);

	    console.log(data);
		var datalen=Object.keys(data).length;
		var formtable="";	
		for (var i=0; i<datalen; i++){
			formtable+="<table id=\"main\"><tr><td><p>QUES:"+data[i].ques+"</p></td></tr><tr><td><input type=\"radio\" class=\"option\" value=\"A\">"+data[i].opt1+"</input></td></tr><br><tr><td><input type=\"radio\" class=\"option\" value=\"B\">"+data[i].opt2+"</input></td><tr><td><input type=\"radio\" class=\"option\" value=\"C\">"+data[i].opt3+"</input></td><tr><td><input type=\"radio\" class=\"option\" value=\"D\">"+data[i].opt4+"</input></td></tr>";
		
		formtable+="</table>";
		var form="<input type=\"button\" value=\"next\" id=\"nextbtn\" name=\"next\" onclick=\"myFunction('"+data[i].id+"')\" data-nxtid="+data[i].id+" class=\"nxtbutton\"></input>";
		}

				document.getElementById('exam').innerHTML=formtable;
				document.getElementById('demo').innerHTML=form;
				
	});
}
else{
	$.ajax({
	    url:"newajax.php",	
	    method:"POST",
	    data:{data:myJSON,id:11,action:"final"},
	    dataType: "json"        
	}).done(function(data){
		console.log(data);
		var abc=JSON.parse(data);
		alert("You have done "+abc+"/10 questions correct.");
	    window.location.href = "examportal.php";
	    
});
}
}




</script>
</html>