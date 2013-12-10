<html>
<?php
include "config.php";
$rows = MessageDAO::getAllMessages();?>
<head>
	<title>MESSAGES</title>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
</head>
<center>
<body>

<div class="span10 well" style="margin-left:100px">
<table class="table table-strip table-bordered">
	<h1>MESSAGES</h1>
	<tr>
<thead>
    <th class="header">Name</th>
    <th class="blue header">Message</th>
    <th class="green header">Date Posted</th>
</thead>
</tr>
	<?php foreach ($rows as $row):
	if($row['is_approve'] == 'Y'){
	?>
    <tr>
       <td><?=$row['name']?></td>
        <td><?=$row['message']?></td>
        <td><?=$row['date_posted']?></td>
    <tr><?php } endforeach;?>
    	
	<form method="post" action="insertion.php">

		<table>
			<h2>POST NEW MESSAGE</h2></br>
	        <tr>
	        <td><b>Name: </b><input type="text" name="name" id = 'name' onblur = 'checkName()' style="width:250px;height:25px"></br></td>
	        <td><span id = 'err_Name'></span></td>
	    	</tr>
	        <tr>
	        <td><b>Email: </b><input type="text" name="email" id = 'email' onblur = 'checkEmail()' style="width:250px;height:25px"></br></td>
			<td><span id = 'err_Email'></span></td>
			</tr>
			<tr>
			<td><b>Message: </b><textarea name="message" id = 'message' onblur = 'checkMessage()'style="width:350px;height:100px"></textarea></br></td>
			<td><span id = 'err_Message;'></span></td>
			</tr>
			<tr>
			<td><input type='submit' value='POST MESSAGE' name='save' class="btn btn-success"></br>
			</td>
			<td><a href="backEnd.php" class="btn btn"> view all messages </a></td>
			</tr>
		</table>	
	</form>
	<script type = "text/javascript">
	function checkName(){
		var Name = document.getElementById("name").value;
	if(Name.length > 0){
		return true;
	}else{
		document.getElementById("err_name").innerHTML = 'Enter your name';
		return false;
		}
	}
	function checkEmail(){
		var Email = document.getElementById("email").value

		if(Email.length > 0){
			return true;
		}else{
			document.getElementById("err_email").innerHTML = "Enter your email address.";
			return false;

		}
	}
	function checkMessage(){
		var Message = document.getElementById("message").value
		if(Message.length > 0){
			return true;
		}else{
			document.getElementById("err_message").innerHTML = "Enter your message";
			return false;

		}
	}
	function validate(){
	if(checkName() && checkEmail() && checkMessage()){
		return true;
	}else{
		alert("Fill out the Form!!");
		return false;
	}
}

	</script>
	
 </div>
</body>
</center>
</html>