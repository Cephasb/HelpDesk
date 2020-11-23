
<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-HelpDesk | Fault Reporting</title>
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
            <h2 class="main-title-w3layouts mb-2 text-center">Add Fault(s)</h2>
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
                                        <label for="application">Application</label>
                                        <select class="custom-select d-block w-100" id="application" required="">
                                            <option value="">Choose...</option>
                                            <!--<option value="mne">MnE</option>
                                            <option value="cts">CTS</option> -->
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select Application.
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="module">Module</label>
                                        <select class="custom-select d-block w-100" id="module" required="">
                                            <<option value="">Choose...</option>
                                            <!--<option value="ibg_staff">IBG Staff</option>
                                            <option value="client">Client</option> -->
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select Module.
                                        </div>
                                    </div>
                                    
                                </div>
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="screen">Screen</label>
                                        <select class="custom-select d-block w-100" id="screen" required="">
                                            <option value="">Choose...</option>
                                            <option value="ibg_staff">IBG Staff</option>
                                            <option value="client">Client</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select Screen.
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="category">Ticket Category</label>
                                        <select class="custom-select d-block w-100" id="category" required="">
                                            <!-- <option value="">Choose...</option>
                                            <option value="low">Low</option>
                                            <option value="medium">Medium</option>
                                            <option value="high">High</option> -->
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select Ticket Category.
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                

                                    <div class="row">
                                     <div class="col-md-6 mb-3">
                                        <label for="ti_ini_date">Ticket Initiation Date</label>
                                        <input type="date" class="form-control" id="tic_ini_date" placeholder="Ticket Date" value="" required="">
                                        <div class="invalid-feedback">
                                            Please select the Date.
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="ti_ini_date">Ticket Expected Resolution Date</label>
                                        <input type="date" class="form-control" id="tic_ex_res_date" placeholder="Ticket Date" value="" required="">
                                        <div class="invalid-feedback">
                                            Please select the Date.
                                        </div>
                                    </div>
                                 
                                </div>
                                  <div class="row">
                                    
                                   <div class="col-md-6 mb-3">
                                 <label for="tic_description">Ticket Description </label>
                                 <span class="text-muted">(Short)</span>
                                        <textarea class="form-control" id="tic_des" placeholder="Short Description " value="" required=""></textarea>
                                        <div class="invalid-feedback">
                                            Please write a short description of the fault.
                                        </div>
                                    </div> 
                                    
                                </div>
                                 
                                <div class="mb-3">
                                 <label for="address2">Ticket Narrative </label>
                                 <span class="text-muted">(Long)</span>
                                        <textarea class="form-control" rows="4" id="tic_narrative" placeholder="Fault Narrative " value="" required=""></textarea>
                                        <div class="invalid-feedback">
                                            Please write all about the fault.
                                        </div>
                                    </div>
                               

                                         <hr class="mb-12">
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit" id="ticket-form">SUBMIT</button>
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