<?php
include("head.php");
?>
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Ticket Reported</h2>
            <!--// main-heading -->
            <div class="container-fluid">
        
                <div class="outer-w3-agile mt-3">
                 <table class="table table-bordered table table-hover" id="mytable">
        <thead>
            <tr>
                <th>Application Name</th>
                <th>Module</th>
                <th>Screen</th>
                <th>Date Reported</th>
                <th>Expected Resolution Date</th>
                <th>Category</th>
                <th>Priority</th>
                <th>Description</th>
                <th>Narrative</th>
                <th>Status/Action</th>
            </tr>
        </thead>
        <tbody>
				  <?php 
					while($get = array_shift( $FAULTS ))
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
						$testdate=$get['Test_Date'];					
					?>						
            <tr>
                <td><?php echo $appname?></td>
                <td><?php echo $modname?></td>
                <td><?php echo $screenname?></td>
                <td><?php echo $get['Ticket_Initiation_Date']?></td>
				<td><?php echo $get['Ticket_Expected_Resolution_Date']?></td>
                <td><?php echo $catname ?></td>
                      <?php
					  if($priority==1){
					  ?>
					  <td><a style="color:red;font-weight:bold;">High</a></td>
					  <?php
					  }else if($priority==2){
					  ?>
					  <td><a style="color:green;font-weight:bold;">Medium</a></td>
					  <?php
					  }else if($priority==3){
					  ?>
					  <td><a style="color:blue;font-weight:bold;">Low</a></td>
					  <?php
					  }else if($priority==4){
					  ?>
					  <td><a style="color:red;font-weight:bold;">SURE STOPPER!</a></td>
					  <?php	  
					  }else{
					  ?>
						<td><a style="color:red;font-weight:bold;">+ADD</a></td>
				      <?php
					  }
					  ?>
					  <td><button type="button" ticketid="<?php echo $get['Ticket_ID'];?>" data-toggle="modal" data-target="#description" class="btn btn-sm btn-primary description">View</a></td>
                      <td><button type="button" class="btn btn-sm btn-primary narrative" ticketid="<?php echo $get['Ticket_ID'];?>" data-toggle="modal" data-target="#narrative">View</button></td>
					  
                      <?php
					  if($testdate==NULL){
					  ?>					  
					  <td><a style="color:red;font-weight:bold;" href="ticket_resolve.php?ticketid=<?php echo $get['Ticket_ID']?>">Close Ticket</a></td>
 					  <?php
					  }else{
					  ?> 
					  <td><a style="color:green;font-weight:bold;">Fault Resolved</a></td>	
					  <?php	  
					  }
					  ?>
            </tr>
					<?php
					}
					?>            
           
        </tbody>
        
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
	
	
})
</script>
</html>