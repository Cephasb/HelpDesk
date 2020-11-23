<?php
include("../../config/base.php");
$application_id= $conn->real_escape_string($_POST['application_id']);
$module_id= $conn->real_escape_string($_POST['module_id']);
$screen_id= $conn->real_escape_string($_POST['screen_id']);
$tic_cat_id= $conn->real_escape_string($_POST['tic_cat_id']);
$ter_date1= $conn->real_escape_string($_POST['ter_date1']);
$ter_date2= $conn->real_escape_string($_POST['ter_date2']);
$tic_ini_date1= $conn->real_escape_string($_POST['tic_ini_date1']);
$tic_ini_date2= $conn->real_escape_string($_POST['tic_ini_date2']);
$t_priority= $conn->real_escape_string($_POST['t_priority']);
@$group= $conn->real_escape_string($_POST['group']);

unset($sql);

if ($application_id) {
    $sql[] = " Application_ID = '$application_id' ";
}
if ($module_id) {
    $sql[] = " Module_ID = '$module_id' ";
}
if ($screen_id) {
    $sql[] = " Screen_ID = '$screen_id' ";
}
if ($tic_cat_id) {
    $sql[] = " Ticket_Category_ID = '$tic_cat_id' ";
}
if ($ter_date1 && $ter_date2) {
    $sql[] = " Ticket_Expected_Resolution_Date BETWEEN '$ter_date1' AND '$ter_date2' ";
}
if ($tic_ini_date1 && $tic_ini_date2) {
    $sql[] = " Ticket_Initiation_Date BETWEEN '$tic_ini_date1' AND '$tic_ini_date2' ";
}
if ($t_priority) {
    $sql[] = " Priority_ID = '$t_priority' ";
}

$query = " ";

if (!empty($sql)) {
	
    $query .= 'WHERE ' . implode(' AND ', $sql);
	
}


if(!empty($group)){
	
	$query .= $group;
	
}

echo $query;

?>
