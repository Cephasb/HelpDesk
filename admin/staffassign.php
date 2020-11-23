<?php
/**
include("../config/base.php");
if ($_SESSION['login']==0) {
	  header('location:../index.php');
   }
**/   
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-HelpDesk | View</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
    <!-- //Meta Tags -->

    <!--// Style-sheets -->
<link rel="stylesheet" type="text/css" href="../DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/Buttons-1.5.4/css/buttons.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/Scroller-1.5.0/css/scroller.bootstrap4.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/Responsive-2.2.2/css/responsive.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.dataTables.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.js"></script>

 
</head>

<?php
include("header.php");
@$ticketid=$_GET['ticketid'];

if(!is_numeric($ticketid)){
	echo "Data Error";
	exit;	
	}
	
   $yesno=1;
   $stmt = $conn->prepare("SELECT * FROM application_users WHERE Staff_Yes_No=?");	
   $stmt->bind_param("i", $yesno);
   $stmt -> execute();
   $RESULT = get_result($stmt);
?>

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Assign To Staff</h2>
            <!--// main-heading -->
            <div class="container-fluid">
        
                <div class="outer-w3-agile mt-3">
                 <table class="table table-bordered table table-hover" id="mytable">
        <thead>
            <tr>
				<th> SELECT </th>
                <th>Staff_ID</th>
                <th>Name</th>
				<th>Total Assigned</th>
        </thead>
        <tbody>
				  <?php 
					while($get = array_shift( $RESULT ))
					{
					  $uid=$get['AppUser_ID'];
					  $stmt = "SELECT * FROM ticket_staff_assignment WHERE AppUser_ID='$uid'";	
					  $query= mysqli_query($conn, $stmt);
					  $total_num = $query->num_rows;						
					?>
					
                    <tr class="success">
					
					  <td><input type="checkbox" name="check"  class='va' value="<?php echo $uid;?>"></td>	
                      <td><?php echo $get['Staff_ID'];?></td>	
                      <td><?php echo $get['AppUserName'];?></td>
                      <td><?php echo $total_num;?></td>					  
					
                    </tr>
					<?php
					}
					?>           
           
        </tbody>
				</table>
				<button id="assignment" class="btn btn-lg btn-primary">ASSIGN</button>
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

<script type="text/javascript">
$("document").ready(function(){

	$("#assignment").click(function(){
	
		var ticketid=<?php echo $ticketid ?>;
		
		var values=[];
		if ($("input[name='check']:checked" ).each(function(){
			values.push($(this).val());
		}));		 

				$.ajax({
				type: "POST",
				url: "posts/staffassign.php",
				data:{ticketid:ticketid,values:values},
				success: function(text){
					
					alert("Fault Successfully Assigned To Staff");
					window.location.reload();
				}
				});			

	});
	
})	
</script>	
	
	
</html>