	<?php 
	include"config.php";
	/*
	* building connection to config.php
	* creating new object
	*/
	$FirstName = $_POST['name'];
	$EAddress= $_POST['email'];
	$messsageBody = $_POST['message'];
	/*
	* Declaring new object of Message class
	*/
	$message = new Message($config);
		$name = $message->getName();
		$email = $message->getEmail();
		$message = $message->getMessage();
	/*
	* Creating a new message
	*/
	$insert = MessageDAO::createMessage($name, $email, $message);
		if($insert){
			echo "<script>alert('Message Sent!!');window.location.href='frontEnd.php'</script>";
			
		}else{
			echo 'Error';
		}
	 ?>