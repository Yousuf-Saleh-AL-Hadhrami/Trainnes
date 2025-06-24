<?php 
session_start();

include "./authorize.php";
include "./../includes/header.php";
include "./../includes/config/timestamp.php";

echo "Welcome " . $_SESSION['full_name']. "Your ID is " . $_SESSION['id'] . "and You Are " . $_SESSION['role'];

echo "<br>";

echo date("Y-m-d H:i:s");

include "./../includes/footer.php";
