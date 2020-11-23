<?php
include ("../../config/base.php");

$json = file_get_contents('php://input');
 
$obj = json_decode($json,true);

$userid = $obj['IdHolder'];
$AppName = $obj['AppName'];
$ModuleName = $obj['ModuleName'];
$ScreenName = $obj['ScreenName'];
$CatName = $obj['CatName'];
$tic_des = $obj['TicketDesc'];
$tic_nar = $obj['TicketNarr'];
$ter_date = $obj['date'];
$today = date("Y-m-d H:i:s"); 

if ($stmt = $conn->prepare("SELECT * FROM application where Application_Name=?")) 
   {

	$stmt->bind_param("s", $AppName);	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$application_id = $get['Application_ID'];
    
   }  
   
if ($stmt = $conn->prepare("SELECT * FROM application_module where Module_Name=?")) 
   {

	$stmt->bind_param("s", $ModuleName);	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$module_id = $get['Module_ID'];
    
   } 

if ($stmt = $conn->prepare("SELECT * FROM application_screen where Screen_Name=?")) 
   {

	$stmt->bind_param("s", $ScreenName);	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$screen_id = $get['Screen_ID'];
    
   } 

if ($stmt = $conn->prepare("SELECT * FROM ticket_category where Category_Name=?")) 
   {

	$stmt->bind_param("s", $CatName);	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$tic_cat_id = $get['Ticket_Category_ID'];
    
   }    

if($stmt = $conn->prepare("INSERT INTO ticket (Application_ID, Module_ID, Screen_ID, AppUser_ID, Ticket_Category_ID, Ticket_Expected_Resolution_Date, Ticket_Short_Description, Ticket_Narrative, Ticket_Initiation_Date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"))
{	
					
$stmt->bind_param("iiiiissss", $application_id, $module_id, $screen_id, $userid, $tic_cat_id, $ter_date, $tic_des, $tic_nar, $today);
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

if($stmt = $conn->prepare("INSERT INTO ticket_history (Ticket_ID, Application_ID, Module_ID, Screen_ID, Ticket_Category_ID, Ticket_Expected_Resolution_Date, Ticket_Short_Description, Ticket_Narrative, Ticket_Initiation_Date, Created_By, Created_Datetime) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"))
{ 
						
$stmt->bind_param("iiiiissssss", $ticket_id, $application_id, $module_id, $screen_id, $tic_cat_id, $ter_date, $tic_des, $tic_nar, $today, $userid, $today );

$stmt->execute();

$SuccessMsg = "success";

$SuccessMsgJson = json_encode($SuccessMsg);

echo $SuccessMsgJson ;  

}else{
     
$InvalidMsg = 'Error!';
 
$InvalidMsgJson = json_encode($InvalidMsg);
 
 echo $InvalidMsgJson ;      

 }

mysqli_close($conn);

?>
