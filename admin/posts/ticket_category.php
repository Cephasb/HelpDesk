<?php
include '../../config/base.php';

$app_name= $conn->real_escape_string($_POST['t_category']);

if ($stmt = $conn->prepare("INSERT INTO ticket_category (Category_Name) VALUES (?)"))						
{
	
$stmt->bind_param("s", $app_name);	
$stmt->execute();
   
echo 1;  
 
}

?>