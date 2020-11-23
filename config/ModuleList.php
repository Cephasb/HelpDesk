<?php
include('base.php');
// Getting the received JSON into $json variable.
$json = file_get_contents('php://input');
 
// decoding the received JSON and store into $obj variable.
$obj = json_decode($json,true);

$AppName = $obj['AppName'];

if ($stmt = $conn->prepare("SELECT * FROM application where Application_Name=?")) 
   {

	$stmt->bind_param("s", $AppName);	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$appid = $get['Application_ID'];
    
   }

if ($stmt = $conn->prepare("SELECT * FROM application_module where Application_ID=?")) 
   {

	$stmt->bind_param("i", $appid);	    	   
   $stmt->execute();  
   $RESULT = get_result($stmt);  

	$jsonData = array();

	while ($array = array_shift( $RESULT )) {
		$jsonData[] = $array;
	}

	echo json_encode($jsonData);

	mysqli_close($conn);
     
   }												

?>