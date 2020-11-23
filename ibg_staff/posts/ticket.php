<?php
include ("../../config/base.php");

$application_id= $conn->real_escape_string($_POST['application_id']);
$module_id= $conn->real_escape_string($_POST['module_id']);
$screen_id= $conn->real_escape_string($_POST['screen_id']);
$tic_cat_id= $conn->real_escape_string($_POST['tic_cat_id']);
$ter_date= $conn->real_escape_string($_POST['ter_date']);
$tic_des= $conn->real_escape_string($_POST['tic_des']);
$tic_nar= $conn->real_escape_string($_POST['tic_nar']);
$t_priority= $conn->real_escape_string($_POST['t_priority']);
$userid=$_SESSION['id'];
$today = date("Y-m-d H:i:s"); 

if($stmt = $conn->prepare("INSERT INTO ticket (Application_ID, Module_ID, Screen_ID, AppUser_ID, Ticket_Category_ID, Ticket_Expected_Resolution_Date, Ticket_Short_Description, Ticket_Narrative, Ticket_Initiation_Date, Priority_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"))
{	
					
$stmt->bind_param("iiiiissssi", $application_id, $module_id, $screen_id, $userid, $tic_cat_id, $ter_date, $tic_des, $tic_nar, $today, $t_priority);
$stmt->execute();
}

if ($stmt = $conn->prepare("SELECT * FROM ticket WHERE Ticket_Initiation_Date=? and AppUser_ID=?")) 
{	

$stmt->bind_param("si", $today, $userid);	   
$stmt->execute();    

$RESULT = get_result($stmt);  
$get = array_shift( $RESULT ); 
$ticket_id = $get['Ticket_ID'];
}

if($stmt = $conn->prepare("INSERT INTO ticket_history (Ticket_ID, Application_ID, Module_ID, Screen_ID, Ticket_Category_ID, Ticket_Expected_Resolution_Date, Ticket_Short_Description, Ticket_Narrative, Ticket_Initiation_Date, Created_By, Created_Datetime, Priority_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"))
{ 
						
$stmt->bind_param("iiiiissssssi", $ticket_id, $application_id, $module_id, $screen_id, $tic_cat_id, $ter_date, $tic_des, $tic_nar, $today, $userid, $today, $t_priority );

$stmt->execute();

echo 1;

}
?>
