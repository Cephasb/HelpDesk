<?php  
session_start(); //to ensure you are using same session
session_unset(); //to unset all sessions
session_destroy(); //destroy the session
header("location:../index.php"); //go to login  screen 
exit;
?>