<?php
include("../../config/base.php");

@$ticketid= $conn->real_escape_string($_POST['ticketid']);

if(!is_numeric($ticketid)){
echo "Data Error";
exit;
}else{

$stmt = $conn->prepare("SELECT * FROM ticket where Ticket_ID=?"); 	
$stmt->bind_param("i", $ticketid);	   
$stmt->execute();
$RESULT = get_result($stmt);

$get = array_shift( $RESULT );

}   
?>
<div class="modal-body">
    <p class="paragraph-agileits-w3layouts"><?php echo stripslashes($get['Notes']); ?></p>             
    <p class="paragraph-agileits-w3layouts"><?php echo "Test Date: ". stripslashes($get['Test_Date']); ?></p>             
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>