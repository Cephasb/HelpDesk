<?php
include '../../config/base.php';

$app_name= $conn->real_escape_string($_POST['mod_name']);
$app_code= $conn->real_escape_string($_POST['mod_code']);
$application= $conn->real_escape_string($_POST['application']);

if ($stmt = $conn->prepare("INSERT INTO application_module (Module_Name, Module_Code, Application_ID) VALUES (?, ?, ?)"))						
{
	
$stmt->bind_param("ssi", $app_name, $app_code, $application);	
$stmt->execute();
   
echo 1;  
 
}

?>

