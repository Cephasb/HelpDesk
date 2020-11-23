<?php
include("../config/base.php");
include("header.php");
?>

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Users</h2>
            <!--// main-heading -->
            <div class="container-fluid">
        
                <div class="outer-w3-agile mt-3">
                 <table class="table table-bordered table table-hover" id="example">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>IBG Staff</th>
                <th>Contact Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td></td>
            </tr>
            
        </tbody>
        
                </div>
              
            </div>

        
    


    <!-- Required common Js -->
    <script src='../js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    <!-- Datatables Js -->
    
<script type="text/javascript" src="../DataTables/JSZip-2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="../DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="../DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="../DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.5.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.5.4/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.5.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.5.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="../DataTables/Buttons-1.5.4/js/buttons.print.min.js"></script>
<script type="text/javascript" src="../DataTables/Scroller-1.5.0/js/dataTables.scroller.js"></script>
<script type="text/javascript" src="../DataTables/Scroller-1.5.0/js/scroller.boostrap4.min.js"></script>
<script type="text/javascript" src="../Responsive-2.2.2/js/dataTables.responsive.min.js"></script>
    
    <!-- datatables Js -->
<!-- datatable-->
<script >
   $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            { extend:'copy', attr: { id: 'allan' } }, 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
<!--datatable js-->

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