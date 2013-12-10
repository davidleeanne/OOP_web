<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$id = $_GET['id']; 
	MessageDAO::approveMessage($id);
    echo "<script>alert('Record is successfully approved');window.location.href='backEnd.php';</script>";
?>