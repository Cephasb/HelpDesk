<?php
include("../../config/base.php");
$ticketid=$conn->real_escape_string($_POST['ticketid']);
$test_date=$conn->real_escape_string($_POST['test_date']);
$notes=$conn->real_escape_string($_POST['notes']);

if($stmt = $conn->prepare("UPDATE ticket SET Test_Date=?, Notes=? WHERE Ticket_ID=?")){	
$stmt->bind_param("ssi", $test_date, $notes,$ticketid);
$stmt->execute();

echo 1;

}else{
	echo 2;
}

?>