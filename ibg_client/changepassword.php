
<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-HelpDesk | Change Password</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    
</head>

<?php
include("head.php");
?>
<div class="se-pre-con"></div>
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Change Password</h2>
            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                
                <div class="container-fluid">
                    
                <!-- user registration form -->
                <div class="outer-w3-agile mt-3">
                    
                    <div class="row validform">
                        
                        <div class="col-md-12  order-md-1 validform2">
                            
                            <form  action="#" method="post" class="needs-validation" novalidate="">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="oldpassword">Old Password:</label>
                                        <input type="text" class="form-control" id="oldpassword" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Old Password is required.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="newpassword">New Password:</label>
                                        <input type="text" class="form-control" id="newpassword" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            New Password is Required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="conpassword">Confirm Password:</label>
                                        <input type="text" class="form-control" id="confirmpassword" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Confirm Password is Required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit" id="change_password-form">SUBMIT</button>
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
    <script src="../js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->
</body>

</html>