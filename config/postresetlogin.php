<?php 
include('base.php');
$email= $conn->real_escape_string($_POST['email']);
$password= $conn->real_escape_string($_POST['password']);   
   
if ($stmt = $conn->prepare("SELECT * FROM application_users WHERE AppUserEmail=? and AppUserPassword=?")) {	

$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$RESULT = get_result($stmt);
$get = array_shift( $RESULT );  
$total_num_rows = $stmt->num_rows;   
   
if ($total_num_rows > 0){
	   
	$_SESSION['login']=1;
	   
	$_SESSION['id']=$get['AppUser_ID'];

	$_SESSION['username']=$get['AppUserName'];

	$role=$get['Staff_Yes_No'];		   

if($role=='1' || $role==1) {		

	echo 1;

	}	  

   }   
 
	}
	
?>