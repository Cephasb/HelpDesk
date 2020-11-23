<?php
include("../../config/base.php");

@$ticketid= $conn->real_escape_string($_POST['ticketid']);	
@$priorityid= $conn->real_escape_string($_POST['priorityid']);
$today = date("Y-m-d");

if(!is_numeric($ticketid) || !is_numeric($priorityid)){
echo "Data Error";
exit;
}else{ 
	
$stmt = $conn->prepare("UPDATE ticket SET Priority_ID=?, Approved_Date=? WHERE Ticket_ID=?");	
$stmt->bind_param("iis", $priorityid, $today, $ticketid);
$stmt->execute();

echo 1;	

}

 ?>