<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = "admin";

    if($user == $_POST['username']){

        $_SESSION['is_login'] = true;
        $_SESSION['username'] = "Ali";

        header("location: page2.php");
        exit;
    }

}


?>
    
  <form action="" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" ><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" ><br><br>

    <input type="submit" value="Login">
  </form>

</body>
</html>