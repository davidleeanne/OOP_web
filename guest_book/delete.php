

<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$id = $_GET['id']; 
	MessageDAO::deleteMessage($id);
    echo "<script>alert('Record Deleted');window.location.href='backEnd.php';</script>";
?>