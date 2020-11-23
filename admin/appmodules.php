<?php
include("header.php");
?>

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Application Module</h2>
            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                
                <div class="container-fluid">
                    
                <!-- user registration form -->
                <div class="outer-w3-agile mt-3">
                    
                    <div class="row validform">
                        
                        <div class="col-md-8 order-md-1 validform2">
                            
                            <form>
                             <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="mod_code">Module Code</label>
                                        <input type="text" class="form-control" id="mod_code" placeholder="" value="" required="">
                                        <span id='errorname1'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="mod_name">Module name</label>
                                        <input type="text" class="form-control" id="mod_name" placeholder="" value="" required="">
                                        <span id='errorname2'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                   
                                </div>
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
										<span id='errorname3'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6 mb-3">
                                <hr class="mb-6">
                                
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit" id="app_mod-form">SUBMIT</button>
                                </div>
                            </div>
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
	
	$("#app_mod-form").click(function(){
		/*variables*/
		var mod_code=$("#mod_code").val();
		var mod_name=$("#mod_name").val();
		var application =$("#application").val(); 
		var errr="";
		
		$("#mod_code").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname1").hide();
		})
		$("#mod_name").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname2").hide();
		})
		$("#application").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname3").hide();
		})			
		
		
		if(mod_code==''){
			errr="Module Code required";
			$("#mod_code").css("border", " 1px solid red");
			$("#errorname1").show();
		}
		if(mod_name==''){
			errr+="Module Name is required";
			$("#mod_name").css("border", " 1px solid red");
			$("#errorname2").show();
		}
		if(application==''){
			errr+="Application Name is required";
			$("#application").css("border", " 1px solid red");
			$("#errorname3").show();
		}		
		
		
		
if(errr==""){		
		/*ajax call*/
		$.ajax({ 
			type:'POST',
			data:{mod_name:mod_name,mod_code:mod_code,application:application},
			url: 'posts/appmodules.php',
  			success: function(text){
					if(text==1){
						alert("SUCCESS! NEW APP MODULE WAS ADDED\n Please Add Screens upon completion.");
						location.reload();
					}
					else{
						alert("ERROR! MODULE WAS NOT ADDED!");
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