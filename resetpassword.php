<?php
include("config/base.php");
@$userid=$_GET['userid'];

if(!is_numeric($userid) || !is_numeric($userid)){
echo "Data Error";
exit;
}else{ 

$stmt = $conn->prepare("SELECT * FROM application_users WHERE AppUser_ID=?");	
$stmt->bind_param("i", $userid);
$stmt->execute();
$RESULT = get_result($stmt);  
$get = array_shift( $RESULT );
$name=$get['AppUserName'];
$email=$get['AppUserEmail'];

}

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
            <h2 class="main-title-w3layouts mb-2 text-center text-white"><?php echo ' Hello '.$name.'. Reset your <a>PASSWORD</a> below to log in to your profile.'?></h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form name='forgot' action="" method="" >
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" id="newpass" class="form-control" placeholder="Enter New Password">
						<span id='errorname'style="color:red;display:none"> This field is required</span>
                    </div>
                    <div class="form-group">
                        <label>Confirm new password</label>
                        <input type="password" id="passconf" class="form-control" placeholder="Confirm New Password">
						<span id='errorname1' style="color:red;display:none"> This field is required</span>
                    </div>					
                    <button type="submit" id="reset" class="btn btn-primary error-w3l-btn mt-3 px-4">Reset Password</button>
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
	
	$("#reset").click(function(){
		var userid=<?php echo $userid?>;
		var email="<?php echo $email?>";
		var password=$("#newpass").val();
		var passwordconf=$("#passconf").val();
		var errr="";
		
		$("#newpass").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname").hide();
		})
		$("#passconf").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname1").hide();
		})		
		
		if(password==""){
			errr+="Password required";
			$("#newpass").css("border", " 1px solid red");
			$("#errorname").show();
		}
		
		if(passwordconf==""){
			errr+="Password confirmation required";
			$("#passconf").css("border", " 1px solid red");
			$("#errorname1").show();
		}	

		if(password != passwordconf){
			errr+="Passwords not matching";
			alert("Error! Passwords do not match");
			location.reload();
		}
		
		if(errr==""){
		$.ajax({ 
			type:'POST',
			data:{userid:userid,password:password},
			url: "config/postreset.php",
  			success: function(text){
					if(text==2){
						alert("EMAIL INCORRECT! An account with this E-MAIL does not exist.");
					}
					if(text==1){
        if (confirm("RESET WAS SUCCESSFUL. Do you want to LOGIN?"))
        {
            $.ajax({
                   type: "POST",
                   url: "config/postresetlogin.php",
                   data: {email:email,password:password},			   
                   success: function(data){
					if(data==1){
						window.location.href='ibg_staff/dashboard.php';
					}                    
                   }
             });
        }
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