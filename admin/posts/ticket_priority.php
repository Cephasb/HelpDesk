<?php
include '../../config/base.php';

$app_name= $conn->real_escape_string($_POST['t_priority']);

if ($stmt = $conn->prepare("INSERT INTO ticket_priority (Priority_Name) VALUES (?)"))						
{
	
$stmt->bind_param("s", $app_name);	
$stmt->execute();
   
echo 1;  
 
}

?>