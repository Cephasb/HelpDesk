<?php
include '../../config/base.php';

$appusername= $conn->real_escape_string($_POST['fullname']);
$appuseremail= $conn->real_escape_string($_POST['email']);
$appuserphone= $conn->real_escape_string($_POST['phone']);
$appuseraddress= $conn->real_escape_string($_POST['address']);
$staffid= $conn->real_escape_string($_POST['staffid']);
$staffyesno= $conn->real_escape_string($_POST['staffyesno']);
$appuserpassword= $conn->real_escape_string($_POST['password']);
$regenerateNumber = true;
do {
    $appusercode      = rand(22000000, 22999999);
    $checkRegNum = "SELECT * FROM application_users WHERE AppUserCode = '$appusercode'";
    $result      = mysqli_query($conn, $checkRegNum);

    if (mysqli_num_rows($result) == 0) {
        $regenerateNumber = false;
    }
} while ($regenerateNumber);

/* create a prepared statement */
if ($stmt = $conn->prepare("SELECT * FROM application_users WHERE AppUserEmail=?")) 
{	
/* bind parameters for markers */
$stmt->bind_param("s", $appuseremail);
	
/* execute query */
$stmt->execute();
   
/* get result and store in variable $result */
$RESULT = get_result($stmt);  
   
/* Do num rows */
$total_num_rows = $stmt->num_rows;   
}

if($total_num_rows>0){
	 
echo 1;

}else{

$confirm=1;	
	
$stmt = $conn->prepare("INSERT INTO application_users (AppUserName, AppUserCode, AppUserEmail, AppUserPhone, Contact_Address, Staff_ID, Staff_Yes_No, AppUserPassword, Confirm) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
						
$stmt->bind_param("ssssssisi", $appusername, $appusercode, $appuseremail, $appuserphone, $appuseraddress, $staffid, $staffyesno, $appuserpassword, $confirm);

$stmt->execute();

echo 2;

}

?>

