<?php
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$id = $_GET['id']; 
	MessageDAO::rejectMessage($id);
	echo "<script>alert('Record was rejected');window.location.href='backEnd.php';</script>";
?>