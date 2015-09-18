<?php
$id=$_GET['id']; 
$con=mysql_connect("localhost","x", "x") or die(mysql_error());
mysql_select_db("validator");
$sql = "UPDATE `llama-everything` SET numYes = numYes + 1 WHERE id=$id"; //query to insert vote into DB
mysql_query($sql,$con);
header('Location: index.php#'.$id);
?>