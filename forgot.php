<?php
include("config/base.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-HelpDesk | Reset Password</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <!-- //Meta Tags -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
<div class="se-pre-con"></div>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Reset Password</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form name='forgot' action="" method="" >
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter email">
						<span id='errorname'style="color:red;display:none"> This field is required</span>
                    </div>
                    <button type="submit" id="signup" class="btn btn-primary error-w3l-btn mt-3 px-4">Reset Password</button>
                </form>
                <h1 class="paragraph-agileits-w3layouts mt-4">
                    <a href="index.php">Back to Login</a>
                </h1>
            </div>
        </div>
    </div>

    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
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
<script>
$("document").ready(function(){
	
	$("#signup").click(function(){
		var email=$("#email").val();
		var errr="";

		$("#email").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname").hide();
		})
		
		if(email==""){
			errr+="Email required";
			$("#email").css("border", " 1px solid red");
			$("#errorname").show();
		}
		
		if(errr==""){
		$.ajax({ 
			type:'POST',
			data:{email:email},
			url: "config/postforgot.php",
  			success: function(text){
					if(text==2){
						alert("EMAIL INCORRECT! An account with this E-MAIL does not exist.");
					}
					if(text==1){
						alert("VERIFICATION WAS SUCCESSFUL.Please follow the link in the email to reset your password.");
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