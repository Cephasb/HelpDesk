<?php
include("../../config/base.php");

$ticketid=$conn->real_escape_string($_POST['ticketid']);
$values=$_POST['values'];

if(!is_numeric($ticketid)){
echo "Data Error";
exit;
}else{

foreach($values as $key){
	
$uid=$key;

$stmt = $conn->prepare("INSERT INTO ticket_staff_assignment (Ticket_ID, AppUser_ID) VALUES (?, ?)") or die (mysqli_error());
						
$stmt->bind_param("ii", $ticketid, $uid);

$stmt->execute();

echo 1;

}
}
?>