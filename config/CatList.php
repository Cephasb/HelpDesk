<?php
include('base.php');

if ($stmt = $conn->prepare("SELECT * FROM ticket_category")) 
   {
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