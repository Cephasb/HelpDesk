<?php
include('base.php');
$password=$conn->real_escape_string($_POST['password']);
@$userid=$conn->real_escape_string($_POST['userid']);
 
 if(!is_numeric($userid) || !is_numeric($userid)){
	 
	echo "Data Error";
	
 exit;
 
}else{
	
 $stmt = $conn->prepare("UPDATE application_users SET AppUserPassword=? WHERE AppUser_ID=?");	
 $stmt->bind_param("si", $password, $userid);
 $stmt->execute();
 
 echo 1;
 
}
 ?>