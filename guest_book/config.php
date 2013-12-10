<?php

$config = array('host' => 'localhost','username' => 'root','password' => '','database' => 'guestbook_db');

mysql_connect($config['host'], $config['username']);
mysql_select_db($config['database']);
include_once("Message.php");
include_once("MessageDAO.php");
?>
