<?php 

session_start();

if(!isset($_SESSION['is_login'])){
    header("location:login.php");
    exit;
}

// echo $number;


echo "<br>";

echo "welcome" . $_SESSION['name'];

echo "<br>";

?>
<a href="logout.php">Logout</a>