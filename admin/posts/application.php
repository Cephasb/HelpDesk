<?php
include '../../config/base.php';

$app_name= $conn->real_escape_string($_POST['app_name']);
$app_code= $conn->real_escape_string($_POST['app_code']);

if ($stmt = $conn->prepare("INSERT INTO application (Application_Name, Application_Code) VALUES (?, ?)"))						
{
	
$stmt->bind_param("ss", $app_name, $app_code);	
$stmt->execute();
   
echo 1;  
 
}

?>

