<?php
include("../../config/base.php");
 
// Getting the received JSON into $json variable.
$json = file_get_contents('php://input');
 
// decoding the received JSON and store into $obj variable.
$obj = json_decode($json,true);

$userid = $obj['userid']; 
$username = $obj['firstname'];
$phone = $obj['phone'];
$email = $obj['email'];
$address =$obj['address'];
  
 
 if ($stmt = $conn->prepare("SELECT * FROM application_users WHERE AppUser_ID=?")) {	

$stmt->bind_param("i", $userid);	   
$stmt->execute();     
$RESULT = get_result($stmt);     
$get = array_shift( $RESULT );  
   
$total_num_rows = $stmt->num_rows;

}
 
if ($total_num_rows > 0){
	
$stmt = $conn->prepare("UPDATE application_users SET AppUserName=?, AppUserEmail=?, AppUserPhone=?, Contact_Address=? WHERE AppUser_ID=?");	
$stmt->bind_param("ssssi", $username, $email, $phone, $address, $userid);
$stmt->execute();

$SuccessMsg = 'Edit was successful' ;
 
// Converting the message into JSON format.
$SuccessMsgJson = json_encode($SuccessMsg);
 
// Echo the message.
 echo $SuccessMsgJson ; 

}else{
	
$InvalidMsg = 'Error! UserID does not exists. Please try again.';
 
 // Converting the message into JSON format.
$InvalidMsgJson = json_encode($InvalidMsg);
 
// Echo the message.
 echo $InvalidMsgJson ;	
	
}



mysqli_close($conn);
?>