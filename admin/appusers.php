<?php
include("header.php");
?>
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Add User</h2>
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
                                        <input type="text" class="form-control" id="fullname" placeholder="Full Name" value="" required="">
										<span id='errorname1'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required="">
									<span id='errorname2'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
									<span id='errorname2a'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Enter a Valid E-mail Address.</span>
                                </div>
                                <div class="mb-3">
                                    <label for="phonenumber">Phone Number</label>
                                    <input type="number" class="form-control" id="phone" placeholder="Contact Number" minlength="10" maxlength="10" required="">
                                    <span id='errorname3'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    <span id='errorname3a'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Enter a Valid Phone Number.</span>
								</div>

                                <div class="mb-3">
                                    <label for="password">Password</label>
										<span id="result"></span>
                                    <input type="password" class="form-control" id="password" placeholder="Password" required="">
									<span id='errorname4'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
									<span id='errorname4a'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> At least 8 characters long.</span>
                                </div>
									
                                <div class="mb-3">
                                    <label for="address2">Contact Address 
                                    </label>
                                    <input type="text" class="form-control" id="address" placeholder="Contact Address" required="">
									<span id='errorname5'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="country">Staff</label>
                                        <span class="text-muted">(Yes/No)</span>
                                        <select id="staffyesno" class="custom-select d-block w-100" id="country" required="">
                                            <option value="">Choose...</option>
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
										<span id='errorname6'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="phonenumber"> Staff Code</label>
                                    <input type="text" class="form-control" id="staffid" placeholder="Staff Code" minlength="10" maxlength="10" required="">
									<span id='errorname7'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>             
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
	$('#password').keyup(function() {
	$('#result').html(checkStrength($('#password').val()))
	})
	
	function checkStrength(password) {
var strength = 0
if (password.length < 6) {
$('#result').removeClass()
$('#result').addClass('short')
return 'Too short <i class="fa fa-times"></i>'
}
if (password.length > 7) strength += 1
// If password contains both lower and uppercase characters, increase strength value.
if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
// If it has numbers and characters, increase strength value.
if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
// If it has one special character, increase strength value.
if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// If it has two special characters, increase strength value.
if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
// Calculated strength value, we can return messages
// If value is less than 2
if (strength < 2) {
$('#result').removeClass()
$('#result').addClass('weak')
return 'Weak'
} else if (strength == 2) {
$('#result').removeClass()
$('#result').addClass('good')
return 'Good <i class="fa fa-check" aria-hidden="true"></i>'
} else {
$('#result').removeClass()
$('#result').addClass('strong')
return 'Strong <i class="fa fa-check-circle-o" aria-hidden="true"></i>'
}
}
	
	$("#user-form").click(function(){
		/*variables*/
		var fullname=$("#fullname").val();
		var email=$("#email").val();
		var phone=$("#phone").val();
		var address=$("#address").val();
		var staffid=$("#staffid").val();
		var staffyesno=$("#staffyesno").val();
		var password=$("#password").val();
		var phoneno = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/g;
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var password_len = password.length;
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
		$("#password").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname4").hide();
		})
		$("#address").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname5").hide();
		})
		$("#staffyesno").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname6").hide();
		})
		$("#staffid").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname7").hide();
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
		if(password==""){
			errr+="Password required";
			$("#password").css("border", " 1px solid red");
			$("#errorname4").show();
			$("#errorname4a").show();
		}
		if(address==""){
			errr+="Address required";
			$("#address").css("border", " 1px solid red");
			$("#errorname5").show();
		}
		if(staffyesno==""){
			errr+="Password required";
			$("#staffyesno").css("border", " 1px solid red");
			$("#errorname6").show();
		}
		if(staffid==""){
			errr+="Staff ID required";
			$("#staffid").css("border", " 1px solid red");
			$("#errorname7").show();
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
		
	 if (password_len == 0 || password_len <= 7)
		{
			errr="Password required";
			$("#password").css("border", " 1px solid red");
			$("#errorname4a").show();
		}		
		
		
if(errr==""){		
		/*ajax call*/
		$.ajax({ 
			type:'POST',
			data:{fullname:fullname,email:email,phone:phone,address:address,staffid:staffid,staffyesno:staffyesno,password:password},
			url: 'posts/appusers.php',
  			success: function(text){
					if(text==1){
						alert("REGISTRATION WAS UNSUCCESSFUL!\n An account with this E-MAIL/USERNAME already exists.");
					}
					else{
						alert("REGISTRATION SUCCESSFUL");
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