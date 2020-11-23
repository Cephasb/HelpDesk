<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$dbname = "ehelp_desk";

$conn = new mysqli($host, $username, $password, $dbname);

if(mysqli_connect_errno())
{
	printf("Connection failed: %s\n", mysqli_connect_error());
	exit();
}

function get_result( $stmt ) {
    $RESULT = array();
    $stmt->store_result();
    for ( $i = 0; $i < $stmt->num_rows; $i++ ) {
        $Metadata = $stmt->result_metadata();
        $PARAMS = array();
        while ( $Field = $Metadata->fetch_field() ) {
            $PARAMS[] = &$RESULT[ $i ][ $Field->name ];
        }
        call_user_func_array( array( $stmt, 'bind_result' ), $PARAMS );
        $stmt->fetch();
    }
    return $RESULT;
}

 if(isset($_POST['login-form'])){

   $email= $conn->real_escape_string($_POST['email']);
   $password= $conn->real_escape_string($_POST['password']);   
   $ref_url=$_SERVER['REQUEST_URI'];
   
   /* create a prepared statement */
   if ($stmt = $conn->prepare("SELECT * FROM application_users WHERE AppUserEmail=? and AppUserPassword=?")) 
   {	
   /* bind parameters for markers */
   $stmt->bind_param("ss", $email, $password);	
   
   /* execute query */
   $stmt->execute();  
   
   /* get result and store in variable $result */
   $RESULT = get_result($stmt);  
   
   /* fetch result */
   $get = array_shift( $RESULT );  
   
   /* Do num rows */
   $total_num_rows = $stmt->num_rows;   
   }

   if ($total_num_rows > 0){
	/* Store some values in a SESSION */	
	   $_SESSION['login']=1;
	   
	   $_SESSION['id']=$get['AppUser_ID'];

	   $_SESSION['username']=$get['AppUserName'];

	   $role=$get['Staff_Yes_No'];

	   $confirm=$get['Confirm'];	

	if($role==0 && $confirm==0){   
	   header("location:admin/index.php");
	}
	if($role==1 && $confirm==0){   
	   header("location:ibg_staff/dashboard.php");
	}
	if($role==2 && $confirm==0){   
	   header("location:ibg_staff/dashboard.php");
	}
	if($role==1 && $confirm==1){   
	   header("location:ibg_staff/changepassword.php");
	}
	if($role==2 && $confirm==1){   
	   header("location:ibg_staff/changepassword.php");
	}	

   }else{
	/* invalid credentials */	   
	   echo'
<script type="text/javascript">
	alert("INCORRECT CREDENTIALS!\n E-mail or Password wrong");	
</script>
';
		}
	}

?>