<?php
include("header.php");
?>

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Change Password</h2>
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
                                        <label for="currentpassword">Current Password:</label>
                                        <input type="password" class="form-control" id="currentpassword" placeholder="Enter Old Password" >
										<span id='errorname1'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
									</div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="newpassword">New Password: <span id="result"> </span></label>
                                        <input type="password" class="form-control" id="newpassword" placeholder="Enter New Password" >
										<span id='errorname2'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
										<span id='match1'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Passwords do not match.</span>
										<span id='weak'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Password should be at least 8 characters long.</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="confirmpassword">Confirm Password:</label>
                                        <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm New Password" >
										<span id='errorname3'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
										<span id='match2'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Passwords do not match.</span>
										<span id='weak'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Password should be at least 8 characters long.</span>
                                    </div>
                                </div>
                                <hr class="mb-12">
                                <div class="col-md-6 mb-3">
									<button id="password-form" class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">SUBMIT</button>
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

	$('#newpassword').keyup(function() {
	$('#result').html(checkStrength($('#newpassword').val()))
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
	
	$("#password-form").click(function(){
		/*variables*/
		var currentpassword=$("#currentpassword").val();
		var newpassword=$("#newpassword").val();
		var confirmpassword=$("#confirmpassword").val();
		var password_len = newpassword.length;
		var errr="";
		
		$("#currentpassword").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname1").hide();
		})
		$("#newpassword").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname2").hide();
			$("#match1").hide();
		})
		$("#confirmpassword").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname3").hide();
			$("#match2").hide();
		})	
		
		
		if(currentpassword==''){
			errr="Current Password required";
			$("#currentpassword").css("border", " 1px solid red");
			$("#errorname1").show();
		}
		if(newpassword==''){
			errr+="New Password required";
			$("#newpassword").css("border", " 1px solid red");
			$("#errorname2").show();
		}
		if(confirmpassword==""){
			errr+="Confirm Password required";
			$("#confirmpassword").css("border", " 1px solid red");
			$("#errorname3").show();
		}
		
		if(newpassword != confirmpassword){
			errr+="Password";
			$("#password").css("border", " 1px solid red");
			$("#match1").show();
			$("#match2").show();
		}	
		
	 if (password_len == 0 || password_len <= 7)
		{
			errr="Password required";
			$("#password").css("border", " 1px solid red");
			$("#weak").show();
		}		
		
		
if(errr==""){		
		/*ajax call*/
		$.ajax({ 
			type:'POST',
			data:{currentpassword:currentpassword,newpassword:newpassword},
			url: 'posts/updatepassword.php',
  			success: function(text){
					if(text==1){
						alert("PASSWORD SUCCESSFULLY CHANGED!\n");
						window.location.href="index.php";
					}
					else{
						alert("ERROR!\n CURRENT PASSWORD IS WRONG");
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