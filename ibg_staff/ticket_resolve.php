<?php
include("head.php");
$ticketid=$_GET['ticketid'];

if(!is_numeric($ticketid) || !is_numeric($ticketid)){
echo "Data Error";
exit;
}else{ 
	
$stmt = $conn->prepare("SELECT * FROM ticket WHERE Ticket_ID=?");	
$stmt->bind_param("i", $ticketid);
$stmt->execute();
$RESULT = get_result($stmt);  
$get = array_shift( $RESULT );

$appid=$get['Application_ID'];
$moduleid=$get['Module_ID'];
$screenid=$get['Screen_ID'];
$catid=$get['Ticket_Category_ID'];
$priorityid=$get['Priority_ID'];
$res=$get['Ticket_Expected_Resolution_Date'];
$ini=$get['Ticket_Initiation_Date'];
$desc=$get['Ticket_Short_Description'];
$appidinfo=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM application where Application_ID='$appid'")); 
$appname=$appidinfo['Application_Name'];
$moduleidinfo=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM application_module where Module_ID='$moduleid'")); 
$modulename=$moduleidinfo['Module_Name'];
$screenidinfo=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM application_screen where Screen_ID='$screenid'")); 
$screenname=$screenidinfo['Screen_Name'];
$catinfo=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM ticket_category where Ticket_Category_ID='$catid'")); 
$catname=$catinfo['Category_Name'];
$priorityinfo=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM ticket_priority where Priority_ID='$priorityid'")); 
$priorityname=$priorityinfo['Priority_Name'];
}
?>
    <div class="se-pre-con"></div>
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Fault(s) Resolution</h2>
            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                
                <div class="container-fluid">
                    
                <!-- user registration form -->
                <div class="outer-w3-agile mt-3">
                    
                    <div class="row validform">
                        
                        <div class="col-md-12 order-md-1 validform2">
                            
                            <form>
                                 <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="application">Application</label>                                        
										<input type="text" class="form-control" id="application" placeholder="" value="<?php echo $appname?>" readonly>                               
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="module">Module</label>
                                        <input type="text" class="form-control" id="module" placeholder="" value="<?php echo $modulename?>" readonly>                                    
									</div>
                                </div>
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="screen">Screen</label>
										<input type="text" class="form-control" id="app_screen" placeholder="" value="<?php echo $screenname?>"  readonly>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="category">Ticket Category</label>
                                        <input type="text" class="form-control" id="tic_category" placeholder="" value="<?php echo $catname?>" readonly>
                                    </div>                                              
                                </div>
                                  <div class="row">
                                   <div class="col-md-6 mb-3">
                                        <label for="ti_ini_date">Ticket Initiation Date</label>
                                        <input type="text" class="form-control" id="tic_ini_date" placeholder="" value="<?php echo $ini?>" readonly>                                        
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="ti_ini_date">Ticket Expected Resolution Date</label>
                                        <input type="text" class="form-control" id="tci_ex_res_date" placeholder="" value="<?php echo $res?>" readonly >                               
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="priority">Ticket Priority</label>
                                        <input type="text" class="form-control" id="tic_priority" placeholder="" value="<?php echo $priorityname?>" readonly>                                        
                                    </div>            
                                     <div class="col -md-6 mb-3">
                                 <label for="address2">Ticket Description </label>
                                 <span class="text-muted">(Short)</span>
                                        <textarea class="form-control" id="tic_description" placeholder="" value="" readonly><?php echo stripslashes ($desc)?></textarea> 
                                </div>
                                </div>
                                    <div class="row">
                                    
                                        <div class="col-md-6 mb-3">
                                        <label for="test_date">Test Date</label>
                                        <input type="date" class="form-control" id="test_date" placeholder="Ticket Date">
										<span id='errorname1'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                    </div>
                                     <div class="mb-3">
                                 <label for="notes">Notes </label>
                                        <textarea class="form-control" rows="4" id="notes" placeholder="Please write a short note of the fault."></textarea>
                                        <span id='errorname2'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                         <hr class="mb-12">
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit" id="resolution-form">CLOSE TICKET</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--// Forms-4 -->
            </section>

            <!--// Forms content -->

            
        </div>
    


    <!-- Required common Js -->
    <script src='../js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

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
<script type="text/javascript">
$("document").ready(function(){	
	
	$("#resolution-form").click(function(){
		/*variables*/
		var test_date=$("#test_date").val();
		var notes=$("#notes").val();
		var ticketid=<?php echo $ticketid?>;
		var errr="";
		
		$("#test_date").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname1").hide();
		})
		$("#notes").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname2").hide();
		})	
		
		
		if(test_date==''){
			errr="Test Date required required";
			$("#test_date").css("border", " 1px solid red");
			$("#errorname1").show();
		}
		if(notes==''){
			errr+="New Password required";
			$("#notes").css("border", " 1px solid red");
			$("#errorname2").show();
		}		
		
		
if(errr==""){		
		/*ajax call*/
		$.ajax({ 
			type:'POST',
			data:{test_date:test_date,notes:notes,ticketid:ticketid},
			url: 'posts/resolve.php',
  			success: function(text){
					if(text==1){
						alert("FAULT SUCCESSFULLY RESOLVED!\n");
						window.location.href="ticket_view.php";
					}
					else{
						alert("SYSTEM ERROR!\n Fault NOT resolved\n");
						location.reload();
					}
				}
				});
			}else{
				
			}
			
return false;
	});
})
	
</script>
</html>