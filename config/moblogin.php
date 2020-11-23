<?php
include ('base.php');
 
// Getting the received JSON into $json variable.
$json = file_get_contents('php://input');
 
// decoding the received JSON and store into $obj variable.
$obj = json_decode($json,true);
 
// Populate User email from JSON $obj array and store into $email.
$email = $obj['email'];
 
// Populate Password from JSON $obj array and store into $password.
$password = $obj['password'];

/* create a prepared statement */
if ($stmt = $conn->prepare("SELECT * FROM application_users WHERE AppUserEmail=? and AppUserPassword=?")) 
   {	
   /* bind parameters for markers */
   $stmt->bind_param("ss", $email, $password);	
   
   /* execute query */
   $stmt->execute();  
   
   /* get result and store in variable $result */
   $RESULT = get_result($stmt);  
   
   /* fetch result */
   $get = array_shift( $RESULT );  
   
   /* Do num rows */
   $total_num_rows = $stmt->num_rows;   
   }

   if ($total_num_rows > 0){
	   
 
 $SuccessLoginMsg = 'Data Matched';
 
 // Converting the message into JSON format.
$SuccessLoginJson = json_encode($SuccessLoginMsg);
 
// Echo the message.
 echo $SuccessLoginJson ; 		

   }else{

$InvalidMSG = 'Invalid Username or Password Please Try Again' ;
 
// Converting the message into JSON format.
$InvalidMSGJSon = json_encode($InvalidMSG);
 
// Echo the message.
 echo $InvalidMSGJSon ;
	   
   }
  
  mysqli_close($conn);   
?>