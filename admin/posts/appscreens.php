<?php
include '../../config/base.php';

$app_name= $conn->real_escape_string($_POST['app_name']);
$app_screen= $conn->real_escape_string($_POST['app_screen']);
$mod_name= $conn->real_escape_string($_POST['mod_name']);

if ($stmt = $conn->prepare("INSERT INTO application_screen (Application_ID, Screen_Name, Module_ID) VALUES (?, ?, ?)"))						
{
	
$stmt->bind_param("isi", $app_name, $app_screen, $mod_name);	
$stmt->execute();
   
echo 1;  
 
}

?>

