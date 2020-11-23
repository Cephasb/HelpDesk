<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Blank page :: w3layouts</title>
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
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>
            <h2 class="main-title-w3layouts mb-2 text-center">Modals</h2>
            <!--// main-heading -->

            <!-- Modals content -->
            <section class="modals-section">
                <div class="outer-w3-agile mt-3">
                    <!-- Live Demo -->
                    <h4 class="tittle-w3-agileits mb-4">Live Demo Modal</h4>
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-around mb-5">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </div>
                    <!-- popup content -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                       <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="country">Application Code</label>
                                        <select class="custom-select d-block w-100" id="country" required="">
                                            <option value="">Choose...</option>
                                            <option>M&E</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid Application.
                                        </div>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Application name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Scren name is required.
                                        </div>
                                    </div>
                                   
                                </div>
                                    <div class="row">
                                    <div class="col-md-6 mb-3">
                                <hr class="mb-6">
                                
                                <button class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">SUBMIT</button>
                                </div>
                            </div>
                            </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// popup content -->
                    <!--// Live Demo -->

                    <!-- Optional Sizes -->
                    <h4 class="tittle-w3-agileits mb-4">Optional Sizes Modal</h4>
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-around mb-5">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>
                    </div>

                    <!-- Large popup content -->

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="paragraph-agileits-w3layouts">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit leo mauris,
                                        sit amet egestas velit iaculis non. Aenean laoreet purus elit, quis porta dui aliquam
                                        in.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// Large popup content -->
                    <!-- Small popup content -->

                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="paragraph-agileits-w3layouts">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit leo mauris,
                                        sit amet egestas velit iaculis non. Aenean laoreet purus elit, quis porta dui aliquam
                                        in.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Small popup content -->
                    <!--// Optional Sizes -->

                    <!-- Grid Modal -->
                    <h4 class="tittle-w3-agileits mb-4">Grid Alignment Modal</h4>
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-around mb-5">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong_grids">
                            Launch demo modal
                        </button>
                    </div>
                    <!-- popup content -->
                    <div class="modal fade" id="exampleModalLong_grids" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4 bg-grid">.col-md-4</div>
                                            <div class="col-md-4 ml-auto bg-grid">.col-md-4 .ml-auto</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 ml-auto bg-grid">.col-md-3 .ml-auto</div>
                                            <div class="col-md-2 ml-auto bg-grid">.col-md-2 .ml-auto</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ml-auto bg-grid">.col-md-6 .ml-auto</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9 bg-grid">
                                                Level 1: .col-sm-9
                                                <div class="row">
                                                    <div class="col-8 col-sm-6 bg-grid">
                                                        Level 2: .col-8 .col-sm-6
                                                    </div>
                                                    <div class="col-4 col-sm-6 bg-grid">
                                                        Level 2: .col-4 .col-sm-6
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// popup content -->
                    <!--// Grid Modal -->

                    <!-- Scrolling long content Modal -->
                    <h4 class="tittle-w3-agileits mb-4">Scrolling long content Modal</h4>
                    <!-- Button trigger modal -->
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            Launch demo modal
                        </button>
                    </div>
                    <!-- popup content -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle1">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="paragraph-agileits-w3layouts">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p class="paragraph-agileits-w3layouts">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet ru
                                </div>
                                <div class="modal-body">
                                    <p class="paragraph-agileits-w3layouts">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p class="paragraph-agileits-w3layouts">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="paragraph-agileits-w3layouts">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.
                                    </p>
                                    <p class="paragraph-agileits-w3layouts">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p class="paragraph-agileits-w3layouts">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="paragraph-agileits-w3layouts">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.
                                    </p>
                                    <p class="paragraph-agileits-w3layouts">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p class="paragraph-agileits-w3layouts">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="paragraph-agileits-w3layouts">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.
                                    </p>
                                    <p class="paragraph-agileits-w3layouts">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p class="paragraph-agileits-w3layouts">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="paragraph-agileits-w3layouts">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.
                                    </p>
                                    <p class="paragraph-agileits-w3layouts">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p class="paragraph-agileits-w3layouts">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="paragraph-agileits-w3layouts">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.
                                    </p>
                                    <p class="paragraph-agileits-w3layouts">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                    <p class="paragraph-agileits-w3layouts">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="paragraph-agileits-w3layouts">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                        fringilla.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--// popup content -->
                    <!--// Scrolling long content Modal -->


                </div>
            </section>

            <!--// Modals content -->

            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Modernize . All Rights Reserved | Design by
                    <a href="http://w3layouts.com/"> W3layouts </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>