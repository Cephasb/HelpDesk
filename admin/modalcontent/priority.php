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
    <div style="align:center;">
    <div class="col-md-12">
<form method="post" action="">
<?php
$query = "SELECT * FROM ticket_priority";
$results=mysqli_query($conn, $query);
foreach ($results as $priority){
?>
<input type="radio" name="priority" value="<?php echo $priority["Priority_ID"];?>" checked> <?php echo $priority["Priority_Name"];?><br>
<?php
	}
?>
    <hr>
    <button class="btn btn-primary priority-form" type="submit">SUBMIT</button> 
</form>	
    </div>  
    </div>            
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
<script type="text/javascript">
$("document").ready(function(){
	
	 $(".priority-form").click(function(){
	
		var ticketid=<?php echo $ticketid?>;	
		var priorityid=$('input[name=priority]:checked').val();
	
				$.ajax({					
				type: "POST",
				url: "posts/priority.php",
				data:{ticketid:ticketid,priorityid:priorityid},
				success: function(text){
					alert("Priority Successfully Added");
				window.location.reload();
				}				
				});	

	});
})
</script>	