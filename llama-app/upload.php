<?php
$addID = uniqid();
$target_dir = "uploads/";
$target_file = $target_dir . $addID.basename($_FILES["fileToUpload"]["name"]);
$fileName = $addID.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileChecker = basename($_FILES["fileToUpload"]["name"]);
$imageNullityUpdater = 0;
if($fileChecker != NULL){
	$imageNullityUpdater = 1;
}
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$ip = $_SERVER['REMOTE_ADDR']; 

$name=$_POST['llamaname'];
$name2 = addslashes($name);
$name_final = strip_tags($name2);
$postContent=$_POST['name'];
$deviceInfo=$_SERVER['HTTP_USER_AGENT']; 
$device_info = addslashes($deviceInfo);
$server_address = $_SERVER['REMOTE_ADDR'];
$contentAddSlash = addslashes($postContent);
$content = strip_tags($contentAddSlash);

$con=mysql_connect("localhost","x", "x") or die(mysql_error());
mysql_select_db("validator");
$updateInfo = "INSERT INTO `llama-everything`(llamaName, time, content, ip_address, device_info) VALUES ('$name_final', CURRENT_TIMESTAMP, '$content', '$server_address', '$device_info');";
if($content != NULL){
mysql_query($updateInfo, $con);
}
header("Location: index.php");
?>