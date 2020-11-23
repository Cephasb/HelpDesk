<?php
include("../../config/base.php");
@$application_id=$_POST['Application_ID'];

/// Preventing injection attack //// 
if(!is_numeric($application_id)){
echo "Data Error";
exit;
 }

$sql="select Module_ID, Module_Name from application_module where Application_ID=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("s", $application_id);
$stmt->execute();

$RESULT = get_result($stmt);

$get = array( 'data'=> $RESULT );

echo json_encode($get);

?>