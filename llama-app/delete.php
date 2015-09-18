<?php
$id=$_GET['id'];
	$server_address = $_SERVER['REMOTE_ADDR']; //get IP
	$deviceInfo=$_SERVER['HTTP_USER_AGENT']; 
	$con3=mysql_connect("localhost","x", "") or die(mysql_error());
	mysql_select_db("validator");
	$sqlForIP = "SELECT * from tester where id=$id";
	$eq = mysql_query($sqlForIP,$con3);
		$sql = "DELETE FROM `llama-everything` WHERE id = $id";
  		mysql_query($sql,$con3);
  		header("Location: index.php");
?>