<?php
include('base.php');
// Getting the received JSON into $json variable.
$json = file_get_contents('php://input');
 
// decoding the received JSON and store into $obj variable.
$obj = json_decode($json,true);

$ModuleName = $obj['ModuleName'];

if ($stmt = $conn->prepare("SELECT * FROM application_module where Module_Name=?")) 
   {

	$stmt->bind_param("s", $ModuleName);	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$modid = $get['Module_ID'];
    
   }

if ($stmt = $conn->prepare("SELECT * FROM application_screen where Module_ID=?")) 
   {

	$stmt->bind_param("i", $modid);	    	   
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