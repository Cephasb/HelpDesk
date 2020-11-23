<?php
include("header.php");
?>
    <div class="se-pre-con"></div>
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Fault(s) Resolution</h2>
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
                                        
                                <input type="text" class="form-control" id="application" placeholder="" value="" required="" disabled="">
                                        <div class="invalid-feedback">
                                            Please select Application.
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="module">Module</label>
                                        <input type="text" class="form-control" id="module" placeholder="" value="" required="" disabled="">
                                        <div class="invalid-feedback">
                                            Please select Module.
                                        </div>
                                    </div>
                                    
                                </div>
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="screen">Screen</label>
                                    <input type="text" class="form-control" id="screen" placeholder="" value="" required="" disabled="">
                                        <div class="invalid-feedback">
                                            Please select Screen.
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="firstName">Ticket Date</label>
                                        <input type="text" class="form-control" id="date" placeholder="" value="" required="" disabled="">
                                        <div class="invalid-feedback">
                                            Please select the Date.
                                        </div>
                                    </div>
                                    
                                </div>
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="priority">Ticket Priority</label>
                                        <input type="text" class="form-control" id="priority" placeholder="" value="" required="" disabled="">
                                        <div class="invalid-feedback">
                                            Please select Ticket Priority.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="category">Ticket Category</label>
                                        <input type="text" class="form-control" id="category" placeholder="" value="" required="" disabled="">
                                        <div class="invalid-feedback">
                                            Please select Ticket Category.
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                 <div class="mb-3">
                                 <label for="address2">Ticket Description </label>
                                 <span class="text-muted">(Short)</span>
                                        <textarea class="form-control" id="description" placeholder="" value="" required="" disabled=""></textarea>
                                        <div class="invalid-feedback">
                                            Please write a short description of the fault.
                                        </div>
                                    </div>
                                <div class="mb-3">
                                 <label for="narrative">Ticket Narrative </label>
                                 <span class="text-muted">(Long)</span>
                                        <textarea class="form-control" rows="4" id="narrative" placeholder="" value="" required="" disabled=""></textarea>
                                        <div class="invalid-feedback">
                                            Please write all about the fault.
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="ex_res_date">Ticket Expected Resolution Date</label>
                                        <input type="date" class="form-control" id="date" placeholder="Ticket Date" value="" required="">
                                        <div class="invalid-feedback">
                                            Please select the Date.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="res_date">Ticket Resolution Date</label>
                                        <input type="date" class="form-control" id="resolution_date" placeholder="Ticket Date" value="" required="">
                                        <div class="invalid-feedback">
                                            Please select the Date.
                                        </div>
                                    </div>
                                    </div>
                                     <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="test_date">Test Date</label>
                                        <input type="date" class="form-control" id="test_date" placeholder="Ticket Date" value="" required="">
                                        <div class="invalid-feedback">
                                            Please select the Date.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="app_date">Approved Date</label>
                                        <input type="date" class="form-control" id="date" placeholder="Ticket Date" value="" required="">
                                        <div class="invalid-feedback">
                                            Please select the Date.
                                        </div>
                                    </div>
                                    </div>
                                     <div class="mb-3">
                                 <label for="notes">Notes </label>
                                        <textarea class="form-control" rows="4" id="notes" placeholder="Short Description" value="" required=""></textarea>
                                        <div class="invalid-feedback">
                                            Please write a short note of the fault.
                                        </div>
                                    </div>
                               

                                         <hr class="mb-12">
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">SUBMIT</button>
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