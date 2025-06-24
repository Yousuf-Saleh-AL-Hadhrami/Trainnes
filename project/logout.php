<?php 

session_start();

// unset($_SESSION['is_login']);

session_unset(); // unsetting all session variables 

session_destroy();

header("location:login.php");
exit;
