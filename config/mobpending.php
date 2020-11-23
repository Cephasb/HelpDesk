<?php
include ("base.php");

$json = file_get_contents('php://input');
 
$obj = json_decode($json,true);

$email = $obj['email'];

$first = mysqli_query($conn, "select * from application_users where AppUserEmail='$email'");

$then = mysqli_fetch_assoc($first);

$userid = $then['AppUser_ID'];

if ($stmt = $conn->prepare("SELECT * FROM ticket where AppUser_ID=? and Test_Date IS NULL")) 
   {

	$stmt->bind_param("i", $userid);	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$total = $stmt->num_rows;
    
   }
   
	echo json_encode($total);
	
	mysqli_close($conn);

?>