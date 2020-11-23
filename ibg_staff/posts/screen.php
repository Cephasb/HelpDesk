<?php
include("../../config/base.php");
@$module_id=$_GET['Module_ID'];

/// Preventing injection attack //// 
if(!is_numeric($module_id)){
echo "Data Error";
exit;
 }

$sql="select Screen_ID, Screen_Name from application_screen where Module_ID=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param("s", $module_id);
$stmt->execute();

$RESULT = get_result($stmt);

$get = array( 'data'=> $RESULT );

echo json_encode($get);

?>