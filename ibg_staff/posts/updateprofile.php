<?php
include("../../config/base.php");
$userid=$_SESSION['id'];	
$name=$conn->real_escape_string($_POST['fullname']);
$email=$conn->real_escape_string($_POST['email']);
$phone=$conn->real_escape_string($_POST['phone']);
$address=$conn->real_escape_string($_POST['address']);

if ($stmt = $conn->prepare("SELECT * FROM application_users WHERE AppUser_ID=?")) {	

$stmt->bind_param("i", $userid);	   
$stmt->execute();     
$RESULT = get_result($stmt);     
$get = array_shift( $RESULT );  
   
$total_num_rows = $stmt->num_rows;

if ($total_num_rows > 0){
	
$stmt = $conn->prepare("UPDATE application_users SET AppUserName=?, AppUserEmail=?, AppUserPhone=?, Contact_Address=? WHERE AppUser_ID=?");	
$stmt->bind_param("ssssi", $name, $email, $phone, $address, $userid);
$stmt->execute();

echo 1; //success

}else{
	
echo 2; //error	
	
}

}	

?>