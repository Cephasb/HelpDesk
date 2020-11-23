<?php
include("header.php");
?>

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Profile Update</h2>
            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                
                <div class="container-fluid">
                    
                <!-- user registration form -->
                <div class="outer-w3-agile mt-3">
                    
                    <div class="row validform">
                        
                        <div class="col-md-12 order-md-1 validform2">
                            
							<form>
                                <div class="mb-3">   
                                        <label for="fullName">Full Name</label>
                                        <input type="text" class="form-control" id="fullname" placeholder="" value="<?php echo $username?>" required="">
										<span id='errorname1'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="" value="<?php echo $mail?>" required="">
									<span id='errorname2'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
									<span id='errorname2a'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Enter a Valid E-mail Address.</span>
                                </div>
                                <div class="mb-3">
                                    <label for="phonenumber">Phone Number</label>
                                    <input type="number" class="form-control" id="phone" placeholder="" value="<?php echo $phone?>" minlength="10" maxlength="10" required="">
                                    <span id='errorname3'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    <span id='errorname3a'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Enter a Valid Phone Number.</span>
								</div>
									
                                <div class="mb-3">
                                    <label for="address2">Contact Address 
                                    </label>
                                    <input type="text" class="form-control" id="address" placeholder="" value="<?php echo $address?>" required="">
									<span id='errorname5'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                </div>
                                <hr class="mb-12">
                                <button id="user-form" class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">SUBMIT</button>
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
	
	$("#user-form").click(function(){
		/*variables*/
		var fullname=$("#fullname").val();
		var email=$("#email").val();
		var phone=$("#phone").val();
		var address=$("#address").val();
		var phoneno = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g;
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var errr="";
		
		$("#fullname").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname1").hide();
		})
		$("#email").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname2").hide();
			$("#errorname2a").hide();
		})
		$("#phone").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname3").hide();
			$("#errorname3a").hide();
		})
		$("#address").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname5").hide();
		})	
		
		
		if(fullname==''){
			errr="Name required";
			$("#fullname").css("border", " 1px solid red");
			$("#errorname1").show();
		}
		if(email==''){
			errr+="EMail is required";
			$("#lastname").css("border", " 1px solid red");
			$("#errorname2").show();
		}
		if(phone==""){
			errr+="Phone number required";
			$("#phone").css("border", " 1px solid red");
			$("#errorname3").show();
		}
		if(address==""){
			errr+="Address required";
			$("#address").css("border", " 1px solid red");
			$("#errorname5").show();
		}
		
		/*form-data validaton*/
	  	if(phone.match(phoneno)){
		errr=="";
        }
      else{
			errr="Phone number required";
			$("#phone").css("border", " 1px solid red");
			$("#errorname3a").show();
		}
		
	  if(email.match(mailformat)){
		errr=="";
		}
	  else{
			errr="Email required";
			$("#email").css("border", " 1px solid red");
			$("#errorname2a").show();
		}			
		
		
if(errr==""){		
		/*ajax call*/
		$.ajax({ 
			type:'POST',
			data:{fullname:fullname,email:email,phone:phone,address:address},
			url: 'posts/updateprofile.php',
  			success: function(text){
					if(text==1){
						alert("PROFILE SUCCESSFULLY EDITED!");
						window.location.href="index.php";
					}
					else{
						alert("ERROR!, PROFILE EDIT WAS UNSUCCESSFUL");
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