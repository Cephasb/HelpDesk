<?php
include("header.php");
?>

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Application</h2>
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
                             <div class="col-md-8 mb-3">
                                        <label for="app_code">Application Code</label>
                                        <input type="text" class="form-control" id="app_code" placeholder="" value="" required="">
										<span id='errorname1'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
										<span id='errorname1a'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Application Code should be at least 8 chars.</span>
                                    </div>
                                   
                                    </div>
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label for="app_name">Application name</label>
                                        <input type="text" class="form-control" id="app_name" placeholder="" value="" required="">
                                        <span id='errorname2'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                   
                                </div>
                                    <div class="row">
                                    <div class="col-md-8 mb-3">
                                <hr class="mb-6">
                                
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit" id="app-form">SUBMIT</button>
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
	
	$("#app-form").click(function(){
		/*variables*/
		var app_code=$("#app_code").val();
		var app_name=$("#app_name").val();
		var appcode_len = app_code.length;
		var errr="";
		
		$("#app_code").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname1").hide();
			$("#errorname1a").hide();
		})
		$("#app_name").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname2").hide();
		})
	
		
		
		if(app_code==''){
			errr="App Code required";
			$("#app_code").css("border", " 1px solid red");
			$("#errorname1").show();
			$("#errorname1a").show();
		}
		if(app_name==''){
			errr+="App Name is required";
			$("#app_name").css("border", " 1px solid red");
			$("#errorname2").show();
		}

		
		/*form-data validaton*/		
	 if (appcode_len == 0 || appcode_len <= 7)
		{
			errr+="Password required";
			$("#app_code").css("border", " 1px solid red");
			$("#errorname1a").show();
		}		
		
		
if(errr==""){		
		/*ajax call*/
		$.ajax({ 
			type:'POST',
			data:{app_name:app_name,app_code:app_code},
			url: 'posts/application.php',
  			success: function(text){
					if(text==1){
						alert("SUCCESS! NEW APP WAS ADDED\n Please Add a Module.");
						location.href="appmodules.php";
					}
					else{
						alert("ERROR! APP WAS NOT ADDED!");
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