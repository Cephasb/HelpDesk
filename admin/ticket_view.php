<?php
include("header.php");
?>
<?php
   $stmt = $conn->prepare("SELECT * FROM ticket order by Ticket_ID desc");	   
   $stmt -> execute();
   $RESULT = get_result($stmt);
    
?>
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Ticket</h2>
            <!--// main-heading -->
            <div class="container-fluid">
        
                <div class="outer-w3-agile mt-3">
                 <table class="table table-bordered table table-hover" id="mytable">
        <thead>
            <tr>
                <th>DATE</th>
                <th>REPORTED BY</th>
                <th>APP</th>
                <th>MODULE</th>
                <th>SCREEN</th>
                <th>EXPECTED RESOLUTION DATE</th>
                <th>CATEGORY</th>
                <th>DESCRIPTION</th>
                <th>NARRATIVE</th>
                <th>PRIORITY</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
				  <?php 
					while($get = array_shift( $RESULT ))
					{
						$appid=$get['Application_ID'];
						$appdata=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM application where Application_ID='$appid'"));
						$appname=$appdata['Application_Name'];
						$modid=$get['Module_ID'];
						$moddata=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM application_module where Module_ID='$modid'"));
						$modname=$moddata['Module_Name'];
						$screenid=$get['Screen_ID'];
						$screendata=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM application_screen where Screen_ID='$screenid'"));
						$screenname=$screendata['Screen_Name'];
						$catid=$get['Ticket_Category_ID'];
						$catdata=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM ticket_category where Ticket_Category_ID='$catid'"));
						$catname=$catdata['Category_Name'];
						$priority=$get['Priority_ID'];
						$userinfo=$get['AppUser_ID'];
						$reporter=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM application_users where AppUser_ID='$userinfo'"));
						$reportername=$reporter['AppUserName'];		
						$testdate=$get['Test_Date'];
						$ticketid=$get['Ticket_ID'];
						$assignment = mysqli_query($conn,"SELECT * FROM ticket_staff_assignment WHERE Ticket_ID='$ticketid'");	
						$assign=mysqli_num_rows($assignment);
						
   
 						
					?>
					
                    <tr class="success">
					
					  <td><?php echo $get['Ticket_Initiation_Date']?></td>
					  <td><?php echo $reportername;?></td>
                      <td><?php echo $appname;?></td>	
                      <td><?php echo $modname;?></td>
					  <td><?php echo $screenname?></td>
                      <td><?php echo $get['Ticket_Expected_Resolution_Date']?></td>
                      <td><?php echo $catname;?></td>
					  <td><button type="button" ticketid="<?php echo $ticketid;?>" data-toggle="modal" data-target="#description" class="btn btn-sm btn-primary description">View</a></td>
                      <td><button type="button" class="btn btn-sm btn-primary narrative" ticketid="<?php echo $ticketid;?>" data-toggle="modal" data-target="#narrative">View</button></td>                                        
                      <?php
					  if($priority==1){
					  ?>
					  <td><a style="color:red;font-weight:bold;">HIGH</a><br>
					  <a style="color:blue;" data-toggle="modal" data-target="#priority" href="#" ticketid="<?php echo $get['Ticket_ID'];?>" class="btn priority"><i class="fa fa-plus"></i>Edit</a>
					  </td>
					  <?php
					  }else if($priority==2){
					  ?>
					  <td><a style="color:green;font-weight:bold;">MEDIUM</a><br>
					  <a style="color:blue;" data-toggle="modal" data-target="#priority" href="#" ticketid="<?php echo $get['Ticket_ID'];?>" class="btn priority"><i class="fa fa-plus"></i>Edit</a>
					  </td>
					  <?php
					  }else if($priority==3){
					  ?>
					  <td><a style="color:blue;font-weight:bold;">LOW</a><br>
					  <a style="color:blue;" data-toggle="modal" data-target="#priority" href="#" ticketid="<?php echo $get['Ticket_ID'];?>" class="btn priority"><i class="fa fa-plus"></i>Edit</a>
					  </td>
					  <?php
					  }else if($priority==4){
					  ?>
					  <td><a style="color:red;font-weight:bold;">SURE STOPPER!</a><br>
					  <a style="color:blue;" data-toggle="modal" data-target="#priority" href="#" ticketid="<?php echo $get['Ticket_ID'];?>" class="btn priority"><i class="fa fa-plus"></i>Edit</a>
					  </td>
					  <?php
					  }else{
					  ?>
					  <td><a style="color:red;font-weight:bold;" data-toggle="modal" data-target="#priority" href="#" ticketid="<?php echo $get['Ticket_ID'];?>" class="btn priority"><i class="fa fa-plus"></i>ADD</a></td>
					  <?php	  
					  }
					  ?>
					  <?php
					  if($priority==NULL && $testdate==NULL && $assign==0){
				      ?>	  
					  <td><span data-placement="top" data-toggle="tooltip" title="Disabled! Add Priority to enable."><button disabled class="btn"><i class="fa fa-plus"></i>ASSIGN</button></span></td>
					  <?php
					  }else if($priority != NULL && $testdate==NULL && $assign==0){
					  ?>
					  <td><a style="color:red;font-weight:bold;" href="staffassign.php?ticketid=<?php echo $get['Ticket_ID']?>" class="btn"><i class="fa fa-plus"></i>ASSIGN</a></td>
					  <?php
					  }else if ($priority != NULL && $testdate==NULL && $assign>0) {
					  ?>
					  <td><a style="color:blue;font-weight:bold;">ASSIGNED..</a></td>
					  <?php
					  }else if ($priority !=NULL && $testdate !=NULL && $assign>0) {
					  ?>
					  <td><a href="#" style="color:green;font-weight:bold;" class="notes" ticketid="<?php echo $ticketid;?>" data-toggle="modal" data-target="#notes">FAULT RESOLVED</a></td>
					</tr>
					<?php
					}}
					?>
            
           
        </tbody>
		</table>
                </div>
                </div>
              
            </div>

    <!-- Required common Js -->
    <script src='../js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    <!-- Datatables Js -->
    
<script type="text/javascript" src="../DataTables/JSZip-2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="../DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="../DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="../DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.5.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.5.4/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.5.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.5.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.5.4/js/buttons.print.min.js"></script>
<script type="text/javascript" src="../DataTables/Scroller-1.5.0/js/dataTables.scroller.js"></script>
<script type="text/javascript" src="../DataTables/Scroller-1.5.0/js/scroller.boostrap4.min.js"></script>
<script type="text/javascript" src="../Responsive-2.2.2/js/dataTables.responsive.min.js"></script>
    
    <!-- datatables Js -->
<!-- datatable-->
<script >
   $(document).ready(function() {
    $('#mytable').DataTable( {
		ordering: false,
        dom: 'Bfrtip',
        buttons: [
            { extend:'copy', attr: { id: 'allan' } }, 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
<!--datatable js-->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="../js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->
    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>

</body>
<?php include("modals.php");?>
<script>
$("document").ready(function(){
	
	$('#mytable').on('click', '.notes', function(){	
	
		var ticketid=$(this).attr('ticketid');

				$.ajax({
				type: "POST",
				url: "modalcontent/notes.php",
				data:{ticketid:ticketid},
				success: function(text){
					$("#shownotes").html(text);
				
				}
				});

	});
	$('#notes').on('hidden.bs.modal', function () {
   window.location.reload();
	})	

	$('#mytable').on('click', '.narrative', function(){	
	
		var ticketid=$(this).attr('ticketid');

				$.ajax({
				type: "POST",
				url: "modalcontent/narrative.php",
				data:{ticketid:ticketid},
				success: function(text){
					$("#shownarrative").html(text);
				
				}
				});

	});
	$('#narrative').on('hidden.bs.modal', function () {
   window.location.reload();
	})

	$('#mytable').on('click', '.description', function(){	
	
		var ticketid=$(this).attr('ticketid');

				$.ajax({
				type: "POST",
				url: "modalcontent/description.php",
				data:{ticketid:ticketid},
				success: function(text){
					$("#showdescription").html(text);
				
				}
				});

	});
	$('#description').on('hidden.bs.modal', function () {
   window.location.reload();
	})	
	
		$('#mytable').on('click', '.priority', function(){	
	
		var ticketid=$(this).attr('ticketid');

				$.ajax({
				type: "POST",
				url: "modalcontent/priority.php",
				data:{ticketid:ticketid},
				success: function(text){
					$("#showpriority").html(text);
				
				}
				});

	});
	$('#priority').on('hidden.bs.modal', function () {
   window.location.reload();
	})
	
	
})
</script>	
	
	
</html>