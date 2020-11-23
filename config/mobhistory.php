<?php
include('base.php');

$json = file_get_contents('php://input');
 
$obj = json_decode($json,true); 

$email = $obj['email'];

$first = mysqli_query($conn, "select * from application_users where AppUserEmail='$email'");

$then = mysqli_fetch_assoc($first);

$userid = $then['AppUser_ID'];

$result = mysqli_query($conn, "select * from ticket where AppUser_ID='$userid' order by Ticket_ID desc");

$jsonData = array();

while ($array = mysqli_fetch_assoc($result)) {
    $jsonData[] = $array;
}

echo json_encode($jsonData);

mysqli_close($conn);
 
												
?>