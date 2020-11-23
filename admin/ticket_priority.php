<?php
include("header.php");
?>

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Ticket Priority</h2>
            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                
                <div class="container-fluid">
                    
                <!-- user registration form -->
                <div class="outer-w3-agile mt-3">
                    
                    <div class="row validform">
                        
                        <div class="col-md-8 order-md-1 validform2">
                            
                            <form  action="#" method="post" class="needs-validation" novalidate="" style="center">
                             
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="t_priority">Ticket Priority</label>
                                        <input type="text" class="form-control" id="t_priority" placeholder="" value="" required="">
                                        <span id='errorname1'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> This field is required.</span>
                                    </div>
                                   
                                </div>
                                    <div class="row">
                                    <div class="col-md-6 mb-3">
                                <hr class="mb-6">
                                
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit" id="ticket_priority-form">SUBMIT</button>
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
	
	$("#ticket_priority-form").click(function(){
		/*variables*/
		var t_priority=$("#t_priority").val();
		var errr="";
		
		$("#t_priority").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname1").hide();
		})			
		
		if(t_priority==''){
			errr="Tciket priority required";
			$("#t_priority").css("border", " 1px solid red");
			$("#errorname1").show();
		}				
		
		
if(errr==""){		
		/*ajax call*/
		$.ajax({ 
			type:'POST',
			data:{t_priority:t_priority},
			url: 'posts/ticket_priority.php',
  			success: function(text){
					if(text==1){
						alert("SUCCESS! NEW TICKET PRIORITY ADDED.");
						location.reload();
					}
					else{
						alert("ERROR! TICKET PRiORITY WAS NOT ADDED!");
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