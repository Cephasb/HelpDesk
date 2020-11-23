<?php
include("header.php");
?>
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Add Client</h2>
            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">

                
                <div class="container-fluid">
                    
                <!-- user registration form -->
                <div class="outer-w3-agile mt-3">
                    
                    <div class="row validform">
                        
                        <div class="col-md-12 order-md-1 validform2">
                            
                            <form  action="#" method="post" class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    
                                        <label for="fullName">Client Full Name</label>
                                        <input type="text" class="form-control" id="fullName" placeholder="First Name" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid full name name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                    
                                        <label for="client_code">Client Code</label>
                                        <input type="text" class="form-control" id="client_code" placeholder="Client Code" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid code is required.
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                     <div class="col-md-6 mb-3">
                                    <label for="contact_name">Conatct Person Name
                                        <span class="text-muted">(Required)</span>
                                    </label>
                                    <input type="text" class="form-control" id="contact_name" placeholder="Full Name" required="">
                                    <div class="invalid-feedback">
                                        Please enter a valid name.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="contact_email">Contact Person Email
                                        
                                    </label>
                                    <input type="email" class="form-control" id="cpntact_email" placeholder="you@example.com" required="">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="contact_number">Contact Phone Number </label>
                                    <input type="number" class="form-control" id="contact_number" placeholder="Contact Number" minlength="10" maxlength="10" required="">
                                    <div class="invalid-feedback">
                                        Please enter a Valid Phone Number.
                                    </div>
                                </div>


                                <div class="col-md-6 mb-3">
                                    <label for="contact_address">Contact Address </label>
                            <input type="text" class="form-control" id="contact_address" placeholder="Contact Address" required="">
                                    <div class="invalid-feedback">
                                        Please provide a contact address.
                                    </div>
                                </div>
                                </div>

                                <hr class="mb-12">
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit" id="client-form">SUBMIT</button>
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

</html>