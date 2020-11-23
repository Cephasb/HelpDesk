<?php
include("head.php");
?>
   <div class="se-pre-con"></div>
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Add Ticket(s)</h2>
            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                
                <div class="container-fluid">
                    
                <!-- user registration form -->
                <div class="outer-w3-agile mt-3">
                    
                    <div class="row validform">
                        
                        <div class="col-md-12 order-md-1 validform2">
                            
                            <form  action="#" method="post">
                                 <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="application">Application</label>
                                        <select class="custom-select d-block w-100" id="application" required="">
                                            <option value="">Choose...</option>             
												<?php
													//populate value using php
														$query = "SELECT * FROM application";
														$results=mysqli_query($conn, $query);
													//loop
														foreach ($results as $application){
												?>
											<option value="<?php echo $application["Application_ID"];?>"><?php echo $application["Application_Name"];?></option>
												<?php
													}
												?>											
                                        </select>
										<span id='errorname1'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="module">Module</label>
                                        <select class="custom-select d-block w-100" id="app_module" required="">
                                            <option value="">Choose...</option>
                                        </select>
                                        <span id='errorname2'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                    
                                </div>
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="screen">Screen</label>
                                        <select class="custom-select d-block w-100" id="app_screen" required="">
                                            <option value="">Choose...</option>
                                        </select>
                                        <span id='errorname3'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="category">Ticket Category</label>
                                        <select class="custom-select d-block w-100" id="tic_category" required="">
                                            <option value="">Choose...</option>
												<?php
													//populate value using php
														$query = "SELECT * FROM ticket_category";
														$results=mysqli_query($conn, $query);
													//loop
														foreach ($results as $category){
												?>
											<option value="<?php echo $category["Ticket_Category_ID"];?>"><?php echo $category["Category_Name"];?></option>
												<?php
													}
												?>											
                                        </select>
                                        <span id='errorname4'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                                                        
                                </div>                                
									
                                <div class="row">
                                     <div class="col-md-6 mb-3">
                                        <label for="ti_ex_res_date">Ticket Expected Resolution Date</label>
                                        <input type="date" class="form-control" id="tic_ex_res_date" placeholder="Ticket Date" value="" required="">
                                        <span id='errorname5'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>   
                                     <div class="col-md-6 mb-3">
                                        <label for="ti_ini_date">Initiation Date</label>
                                        <input class="form-control" id="tic_ini_date" placeholder="<?php echo date('Y-m-d');?>" value="" readonly>
                                    </div>									                                  
                                </div>

                                <div class="row">
                                     <div class="col-md-6 mb-3">
                                        <label for="t_priority">Ticket Priority</label>
                                        <select class="custom-select d-block w-100" id="t_priority" required="">
                                            <option value="">Choose...</option>
												<?php
													//populate value using php
														$query = "SELECT * FROM ticket_priority";
														$results=mysqli_query($conn, $query);
													//loop
														foreach ($results as $priority){
												?>
											<option value="<?php echo $priority["Priority_ID"];?>"><?php echo $priority["Priority_Name"];?></option>
												<?php
													}
												?>											
                                        </select>
                                        <span id='errornamep'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>   									                                  
                                </div>								
                                  
                                   <div class="mb-3">
                                 <label for="tic_description">Ticket Description </label>
                                 <span class="text-muted">(Short)</span>
                                        <textarea class="form-control" id="tic_description" placeholder="Short Description " value="" required=""></textarea>
                                        <span id='errorname6'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>                              
                                 
                                <div class="mb-3">
                                 <label for="address2">Ticket Narrative </label>
                                 <span class="text-muted">(Long)</span>
                                        <textarea class="form-control" rows="4" id="tic_narrative" placeholder="Fault Narrative " value="" required=""></textarea>
                                        <span id='errorname7'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>                               
									
                                         <hr class="mb-12">
                                
								<button id="ticketing-form" class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">SUBMIT</button>
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

    <!-- Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!--// Validation Script -->

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

$('#application').change(function(){
$('#app_module').empty(); //remove all existing options
////////
$.post( "posts/module.php", {"Application_ID":$('#application').val()},function(return_data,status){
$("#app_module").append("<option value=''>Choose...</option>");

	if(return_data.data.length>0){
	$('#msg').html( return_data.data.length + ' records Found');
$.each(return_data.data, function(key,value){
$("#app_module").append("<option value='"+value.Module_ID+"'>"+value.Module_Name+"</option>");
});
}else{
$('#msg').html('No records Found');
}
}, "json");
setTimeout(function() { $("#msg").hide(); }, 2000);
///////
});

$('#app_module').change(function(){
var Module_ID = $('#app_module').val();
$('#app_screen').empty(); //remove all existing options
////////
$.get('posts/screen.php',{'Module_ID':Module_ID},function(return_data){
	if(return_data.data.length>0){
	$('#msg').html( return_data.data.length + ' records Found');
$.each(return_data.data, function(key,value){
$("#app_screen").append("<option value='"+value.Screen_ID+"'>"+value.Screen_Name+"</option>");
});
}else{
$('#msg').html('No records Found');
}
}, "json");
setTimeout(function() { $("#msg").hide(); }, 2000);
///////
});
	
	$("#ticketing-form").click(function(){
		/*variables*/
		var application_id=$("#application").val();
		var module_id=$("#app_module").val();
		var screen_id=$("#app_screen").val();
		var tic_cat_id=$("#tic_category").val();
		var ter_date=$("#tic_ex_res_date").val();
		var tic_des=$("#tic_description").val();
		var tic_nar=$("#tic_narrative").val();
		var t_priority=$("#t_priority").val();
		var errr= "";
		
		$("#application").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname1").hide();
		})
		$("#app_module").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname2").hide();
		})
		$("#app_screen").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname3").hide();
		})
		$("#tic_category").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname4").hide();
		})
		$("#tic_ex_res_date").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname5").hide();
		})
		$("#tic_description").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname6").hide();
		})
		$("#tic_narrative").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname7").hide();
		})
		$("#t_priority").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errornamep").hide();			
		})

		if(application_id==''){
			errr="required";
			$("#application").css("border", " 1px solid red");
			$("#errorname1").show();
		}
		if(module_id==''){
			errr+="required";
			$("#app_module").css("border", " 1px solid red");
			$("#errorname2").show();
		}
		if(screen_id==""){
			errr+="required";
			$("#app_screen").css("border", " 1px solid red");
			$("#errorname3").show();
		}
		if(tic_cat_id==""){
			errr+="required";
			$("#tic_category").css("border", " 1px solid red");
			$("#errorname4").show();
		}
		if(ter_date==""){
			errr+="required";
			$("#tic_ex_res_date").css("border", " 1px solid red");
			$("#errorname5").show();
		}
		if(tic_des==""){
			errr+="required";
			$("#tic_description").css("border", " 1px solid red");
			$("#errorname6").show();
		}
		if(tic_nar==""){
			errr+="required";
			$("#tic_narrative").css("border", " 1px solid red");
			$("#errorname7").show();
		}		
		if(t_priority==""){
			errr+="required";
			$("#t_priority").css("border", " 1px solid red");
			$("#errornamep").show();
		}
		
if(errr==""){	
		/*ajax call*/
		$.ajax({ 
			type:'POST',
			data:{application_id:application_id,module_id:module_id,screen_id:screen_id,tic_cat_id:tic_cat_id,ter_date:ter_date,tic_des:tic_des,tic_nar:tic_nar,t_priority:t_priority},
			url: 'posts/ticket.php',
  			success: function(text){
					if(text==1){
						alert("FAULT SUCCESSFULY REPORTED\n.");
						location.reload();
					}
					else{
						//alert("FAULT REPORT UNSUCCESSFUL!\n");
						alert(text);
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