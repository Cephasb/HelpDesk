<?php
include("../config/base.php");

if($_SESSION['login']==0){
header("location:../index.php");
}

if($stmt = $conn->prepare("SELECT * FROM application_users WHERE AppUser_ID=?")){ 

   $id=$_SESSION['id'];
   $stmt->bind_param("s", $id);
   $stmt -> execute();
   $RES = get_result($stmt); 
   $hearderinfo = array_shift( $RES );
   $username= $hearderinfo['AppUserName'];
   $mail= $hearderinfo['AppUserEmail'];
   $phone= $hearderinfo['AppUserPhone'];
   $address= $hearderinfo['Contact_Address'];
   
}

if ($stmt = $conn->prepare("SELECT * FROM ticket")) 
   {	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$total_reported = $stmt->num_rows;
    
   }
  
if ($stmt = $conn->prepare("SELECT * FROM ticket where Test_Date IS NOT NULL")) 
   {	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$total_resolved = $stmt->num_rows;
    
   }  
   
if ($stmt = $conn->prepare("SELECT * FROM ticket where Test_Date IS NULL")) 
   {	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$total_pending = $stmt->num_rows;
    
   }
   
if ($stmt = $conn->prepare("SELECT * FROM application_users")) 
   {	    	   
    $stmt->execute();  
    $RESULT = get_result($stmt); 
	$get = array_shift( $RESULT );
	$total_users = $stmt->num_rows;
    
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
    
    <!-- //Meta Tags -->

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
                    <a href="index.php">E-HelpDesk</a>
                </h1>
                <span>HD</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index.php">
                        <i class="fa fa-tachometer"></i>
                        Dashboard
                    </a>
                </li>
                 <li>
                    <a href="ticket_view.php">
                        <i class="fas fa-tv"></i>
                        Tickets
                    </a>
                    
                </li>
                   <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Reports
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="reports.php">General </a>
                        </li>
                        <li>
                           <a href="groupby.php">Group By </a>
                        </li>
                    </ul>
                </li>				
                   <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Users
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="appusers.php">Add User</a>
                        </li>
                        <!--
                        <li>
                            <a href="appclients.php">Add Client</a>
                        </li>
                        -->
                        <li>
                           <a href="appusersview.php">View Users</a>
                        </li>
                    </ul>
                </li>
                
                    <li>
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-gear fa-spin"></i>
                        System Settings
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu3">
                    <!--
                        <li>
                            <a href="sms_config.php">SMS Gateway</a>
                        </li>
                        
                        <li>
                            <a href="email_config.php">Email Configuration</a>
                        </li>
                    -->
                        <li>
                            <a href="applications.php">Applications</a>
                        </li>
                        <li>
                            <a href="appdocuments.php">Application Documents</a>
                        </li>
                        <li>
                            <a href="appgroups.php">Application Group</a>
                        </li>
                        <li>
                            <a href="appmodules.php">Application Modules</a>
                        </li>
                        <li>
                            <a href="appscreens.php">Application Screens</a>
                        </li>
                        <li>
                            <a href="ticket_category.php">Ticket Category</a>
                        </li>
                        <li>
                           <a href="ticket_documents.php">Ticket Documents</a>
                        </li>
                         <li>
                           <a href="ticket_priority.php">Ticket Priority</a>
                        </li>
                        <li>
                           <a href="ticket_approval.php">Ticket Approval</a>
                        </li>
                    </ul>
                </li>
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

