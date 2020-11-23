<?php
include("../config/base.php");
if ($_SESSION['login']==0) {
	  header('location:../index.php');
   }
   
$uid = $_SESSION['id'];
$stmt = $conn->prepare("SELECT * FROM ticket JOIN ticket_staff_assignment ON ticket.Ticket_ID=ticket_staff_assignment.Ticket_ID WHERE ticket_staff_assignment.AppUser_ID=? order by ticket_staff_assignment.Staff_Assignment_ID desc");
$stmt->bind_param("i", $uid);	   
$stmt -> execute();
$RESULT = get_result($stmt);

if($stmt = $conn->prepare("SELECT * FROM application_users WHERE AppUser_ID=?")){ 

   $stmt->bind_param("s", $uid);
   $stmt -> execute();
   $RES = get_result($stmt); 
   $hearderinfo = array_shift( $RES );
   $username= $hearderinfo['AppUserName'];
   $mail= $hearderinfo['AppUserEmail'];
   $phone= $hearderinfo['AppUserPhone'];
   $address= $hearderinfo['Contact_Address'];
   $staff= $hearderinfo['Staff_Yes_No'];
   
} 

if ($stmt = $conn->prepare("SELECT * FROM ticket where AppUser_ID=? ")) 
   {

	$stmt->bind_param("i", $uid);	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$total_reported = $stmt->num_rows;
    
   } 

if ($stmt = $conn->prepare("SELECT * FROM ticket where AppUser_ID=? and Test_Date IS NOT NULL")) 
   {

	$stmt->bind_param("i", $uid);	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$total_resolved = $stmt->num_rows;
    
   }

if($stmt = $conn->prepare("SELECT * FROM ticket where AppUser_ID=? order by Ticket_ID desc"))
{
   $stmt->bind_param("i", $uid);	
   $stmt -> execute();
   $FAULTS = get_result($stmt); 
}   
?>   
<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-HelpDesk | Dashboard</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="../css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="../css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="../css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--// Style-sheets -->
<link rel="stylesheet" type="text/css" href="../DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/Buttons-1.5.4/css/buttons.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/Scroller-1.5.0/css/scroller.bootstrap4.css"/>
<link rel="stylesheet" type="text/css" href="../DataTables/Responsive-2.2.2/css/responsive.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.dataTables.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.js"></script>
</head>
<body>
<div class="se-pre-con"></div>
    
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="dashboard.php">E-HelpDesk</a>
                </h1>
                <span>HD</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="fa fa-tachometer"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Ticket(s)
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
					<?php
					if($staff==1 || $staff=='1'){
					?>
					<li>
                            <a href="ticketing.php">Ticket Reporting</a>
                        </li>
					<?php
					}else{
					?>
					<li>
                        <a href="ticketing.php">Ticket Reporting</a>
                    </li>
					<?php
					}
					?>
                        <li>
                            <a href="ticket_view.php">View Ticket Assigned</a>
                        </li>
						
					<li>
                        <a href="faults.php">All Ticket Reported</a>
                    </li>
                    </ul>
                </li>
                <!--
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                        Reports
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                            <a href="ticket.php">Applications</a>
                        </li>
                        
                        <li>
                            <a href="appdocuments.php">Application Documents</a>
                        </li>
                        <li>
                            <a href="appmodules.php">Application Modules</a>
                        </li>
                            <a href="appscreens.php">Application Screens</a>
                        <li>
                            <a href="modals.php">Modals</a>
                        </li>
                        <li>
                            <a href="tables.php">Tables</a>
                        </li>
                    </ul>
                </li>
                -->
            </ul>
        </nav>
         <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                                        <ul class="top-icons-agileits-w3layouts float-right">
                         
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="../images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits"><?php echo $username?></h3>
                                        <a href="mailto:info@example.com"><?php echo $mail?></a>
                                    </div>
                                </div>
                                <a href="profile.php" class="dropdown-item mt-3">
                                    <h4>
                                     <i class="far fa-user mr-3"></i>Edit Profile</h4></a>
                                </a>
                                <a href="changepassword.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-link mr-3"></i>Change Password</h4>
                                </a>
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../config/logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

