<?php 

/* superglobals or predefined variables  */

// $GLOBALS
// $_GET
// $_POST
// $_REQUEST => $_GET , $_POST , $_COOKIE 
// $_SERVER  => INFORMATION ABOUT SERVER AND CLIEN
// $_SESSION 
// $_COOKIE
// $_FILES 
// $_ENV

echo "<pre>";

var_dump($_SERVER);

?>

<a href="users.php?id=10">Edit</a>

<form action="users.php" method="post">
    <input type="text" name="name">
    <input type="submit" value="Save">
</form>



