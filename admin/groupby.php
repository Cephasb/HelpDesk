<?php
include("header.php");

if(isset($_GET['stmt'])){
	$groupby=$_GET['stmt'];
	$query="SELECT COUNT(Ticket_ID),".$groupby." FROM ticket GROUP BY ".$groupby;
	$TABLE=mysqli_query($conn,$query); 
}
?>
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Reports (Group  By)</h2>
            <!--// main-heading -->
            <div class="container-fluid">
                <!-- user registration form -->
                <div class="outer-w3-agile mt-3">
                    
                    <div class="row validform">
                        
                        <div class="col-md-12 order-md-1 validform2">
                            
                            <form>
                                 <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="application">Application</label>
                                        <select class="custom-select d-block w-100" id="application">
                                            <option value="">Choose...</option>             
												<?php
													//populate value using php
														$query = "SELECT * FROM application";
														$results=mysqli_query($conn, $query);
													//loop
														foreach ($results as $application){
												?>
											<option value="<?php echo $application["Application_ID"];?>"><?php echo $application["Application_Name"];?></option>
												<?php
													}
												?>											
                                        </select>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="module">Module</label>
                                        <select class="custom-select d-block w-100" id="app_module">
                                            <option value="">Choose...</option>
                                        </select>
                                    </div>                      
                                </div>
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="screen">Screen</label>
                                        <select class="custom-select d-block w-100" id="app_screen">
                                            <option value="">Choose...</option>
                                        </select>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="category">Ticket Category</label>
                                        <select class="custom-select d-block w-100" id="tic_category">
                                            <option value="">Choose...</option>
												<?php
													//populate value using php
														$query = "SELECT * FROM ticket_category";
														$results=mysqli_query($conn, $query);
													//loop
														foreach ($results as $category){
												?>
											<option value="<?php echo $category["Ticket_Category_ID"];?>"><?php echo $category["Category_Name"];?></option>
												<?php
													}
												?>											
                                        </select>
                                    </div>
                                                                        
                                </div>                                
								<hr>
								<label> TICKET EXPECTED RESOLUTION DATE</label>
								<hr>									
                                <div class="row">
                                     <div class="col-md-6 mb-3">
                                        <label for="tic_ex_res_date1">Start Date</label>
                                        <input type="date" class="form-control" id="tic_ex_res_date1" placeholder="Start Date">
										<span id='errorname1'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Please fill out this field.</span>
                                    </div>   
                                     <div class="col-md-6 mb-3">
                                        <label for="tic_ex_res_date2">End Date</label>
                                        <input type="date" class="form-control" id="tic_ex_res_date2" placeholder="End Date">
										<span id='errorname2'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Please fill out this field.</span>
                                    </div>									                                  
                                </div>
								<hr>
								<label> TICKET INITIATION DATE</label>
								<hr>
                                <div class="row">
                                     <div class="col-md-6 mb-3">
                                        <label for="tic_ini_date1">Start Date</label>
                                        <input type="date" class="form-control" id="tic_ini_date1" placeholder="Start Date">
										<span id='errorname3'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Please fill out this field.</span>
                                    </div>   
                                     <div class="col-md-6 mb-3">
                                        <label for="tic_ini_date2">End Date</label>
                                        <input type="date" class="form-control" id="tic_ini_date2" placeholder="End Date">
										<span id='errorname4'style="color:red;display:none"><i class="fa fa-exclamation-triangle"></i> Please fill out this field.</span>
                                    </div>									                                  
                                </div>								
								<hr>	
                                <div class="row">
                                     <div class="col-md-6 mb-3">
                                        <label for="t_priority">Ticket Priority</label>
                                        <select class="custom-select d-block w-100" id="t_priority">
                                            <option value="">Choose...</option>
												<?php
													//populate value using php
														$query = "SELECT * FROM ticket_priority";
														$results=mysqli_query($conn, $query);
													//loop
														foreach ($results as $priority){
												?>
											<option value="<?php echo $priority["Priority_ID"];?>"><?php echo $priority["Priority_Name"];?></option>
												<?php
													}
												?>											
                                        </select>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="group">Group By</label><br>
										<input name="group" type="radio" value="app" id="app"><label for="app" class="control-label">Application </label><br>
                                        <input name="group" type="radio" value="module" id="module"><label for="module" class="control-label">Module </label><br>
                                        <input name="group" type="radio" value="screen" id="screen"><label for="screen" class="control-label"> Screen </label><br>
                                        <input name="group" type="radio" value="cat" id="cat"><label for="cat" class="control-label">Ticket Category </label><br>
										<input name="group" type="radio" value="priority" id="priority"><label for="priority" class="control-label">Ticket Priority </label><br>									
									</div>
                                         <hr class="mb-12">
                                
								<button id="rep-form" class="btn btn-primary btn-lg btn-block error-w3l-btn" type="submit">GENERATE</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--// Forms-4 -->
            <div class="container-fluid">
                <!-- user registration form -->
                <div class="outer-w3-agile mt-3">
                 <table class="table table-bordered table table-hover" id="mytable">
        <thead>
            <tr>
			
                <th>COUNT(Ticket_ID)</th>
                <th><?php echo @$groupby;?></th>
				
            </tr>
        </thead>
        <tbody>
				
				  <?php 
					while(@$get = mysqli_fetch_array($TABLE))
					{						
					?>
					
                    <tr class="success">
					
					  <td><?php echo $get[''];?></td>
					  <td><?php echo $get[''];?></td>
					  
					</tr>
					<?php
					}
					?>
           
        </tbody>
		</table>				
                </div>
                </div>
                </div>
              
            </div>
		</section>
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
    $('#mytable').DataTable( {
		ordering: false,
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
<script type="text/javascript">
$("document").ready(function(){

	$("#rep-form").click(function(){
		/*variables*/
		var application_id=$("#application").val();
		var module_id=$("#app_module").val();
		var screen_id=$("#app_screen").val();
		var tic_cat_id=$("#tic_category").val();
		var ter_date1=$("#tic_ex_res_date1").val();
		var ter_date2=$("#tic_ex_res_date2").val();
		var tic_ini_date1=$("#tic_ini_date1").val();
		var tic_ini_date2=$("#tic_ini_date2").val();
		var t_priority=$("#t_priority").val();

		var group = "";
				
		if($('#app').is(":checked")){
			var group ='Application_ID';
		}
		if($('#module').is(":checked")){
			var group ='Module_ID';
		}
		if($('#screen').is(":checked")){
			var group ='Screen_ID';
		}
		if($('#cat').is(":checked")){
			var group ='Ticket_Category_ID';
		}
		if($('#priority').is(":checked")){
			var group ='Priority_ID';
		}
		
		var errr= "";
		
		$("#tic_ex_res_date1").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname1").hide();
		})
		$("#tic_ex_res_date2").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname2").hide();
		})
		$("#tic_ini_date1").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname3").hide();
		})
		$("#tic_ini_date12").keyup(function(){
			$(this).css("border", " 1px solid green");
			$("#errorname4").hide();
		})

		if(ter_date1 == '' && ter_date2 != ''){
			errr="Name required";
			$("#tic_ex_res_date1").css("border", " 1px solid red");
			$("#errorname1").show();
		}
		if(ter_date1 != '' && ter_date2== ''){
			errr="Name required";
			$("#tic_ex_res_date2").css("border", " 1px solid red");
			$("#errorname2").show();
		}
		if(tic_ini_date1 == '' && tic_ini_date2 != ''){
			errr="Name required";
			$("#tic_ini_date1").css("border", " 1px solid red");
			$("#errorname3").show();
		}
		if(tic_ini_date1 != '' && tic_ini_date2 == ''){
			errr="Name required";
			$("#tic_ini_date2").css("border", " 1px solid red");
			$("#errorname4").show();
		}		
	
if(errr==""){	
		$.ajax({ 
			type:'POST',
			data:{application_id:application_id,module_id:module_id,screen_id:screen_id,tic_cat_id:tic_cat_id,ter_date1:ter_date1,ter_date2:ter_date2,tic_ini_date1:tic_ini_date1,tic_ini_date2:tic_ini_date2,t_priority:t_priority,group:group},
			url: 'posts/reports.php',
  			success: function(text){
					if(text){
					location.href="groupby.php?stmt="+text;
					}
				}
				});	
				}else{
					
				}
				
return false;
	});	

$('#application').change(function(){
$('#app_module').empty(); //remove all existing options
$.post( "../ibg_staff/posts/module.php", {"Application_ID":$('#application').val()},function(return_data,status){
$("#app_module").append("<option value=''>Choose...</option>");

	if(return_data.data.length>0){
	$('#msg').html( return_data.data.length + ' records Found');
$.each(return_data.data, function(key,value){
$("#app_module").append("<option value='"+value.Module_ID+"'>"+value.Module_Name+"</option>");
});
}else{
$('#msg').html('No records Found');
}
}, "json");
setTimeout(function() { $("#msg").hide(); }, 2000);
});

$('#app_module').change(function(){
var Module_ID = $('#app_module').val();
$('#app_screen').empty(); //remove all existing options
$.get('../ibg_staff/posts/screen.php',{'Module_ID':Module_ID},function(return_data){
	if(return_data.data.length>0){
	$('#msg').html( return_data.data.length + ' records Found');
$.each(return_data.data, function(key,value){
$("#app_screen").append("<option value='"+value.Screen_ID+"'>"+value.Screen_Name+"</option>");
});
}else{
$('#msg').html('No records Found');
}
}, "json");
setTimeout(function() { $("#msg").hide(); }, 2000);
});

})
</script>	
	
</html>