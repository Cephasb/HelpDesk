<?php
include("base.php");
$email= $conn->real_escape_string($_POST['email']);

if ($stmt = $conn->prepare("SELECT * FROM application_users WHERE AppUserEmail=?")){
	
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $RESULT = get_result($stmt);    
  $get = array_shift( $RESULT );  
  $total_num = $stmt->num_rows;  
	
  if ($total_num > 0){	   
  
  $email=$get['AppUserEmail'];
  $name=$get['AppUserName'];
  $userid=$get['AppUser_ID'];
  $message = "Hello ".$name."! 
  You requested a password reset on the IBG eHelp Desk.
  Please click the following link to reset you password : http://ctshelpdesk.interregionalbg.com/resetpassword.php?userid=".$userid."";
  
  $senderName = "IBG eHelp Desk";
  $recipient = $name . " <" . $email . ">";
  $headers = "From: " . $senderName . "";
  $success = mail( $recipient, $headers, $message );
 
  echo 1;
 
  }else{
	  
 echo 2;
 
 }		
   
   }
 
 ?>