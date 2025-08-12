<?php 

session_start();

setCookie("yousuf",bin2hex("yousuf programmer"), time() + 30 * 24 * 60 * 60);

//echo $_COOKIE["yousuf"];

echo $_SERVER["REQUEST_METHOD"];

?>

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

  echo $_SERVER["REQUEST_METHOD"];

  $username= $_POST['username'];
  $password= $_POST['password'];

    $users = [
      ["username" => "admin", "name" => "Yousuf AL Hadhrami", "password" => "123456"],
      ["username" => "ali", "name"=> "Ali AL Hadhrami", "password" => "123456"],
    ];

    foreach($users as $user){
  
      if($user && $user['username'] == $username){

        if($user['password'] == $password){

         $_SESSION['username'] = $user['username'];
         $_SESSION['name'] = $user['name'];
         $_SESSION['is_login'] = true;

         header("location: page2.php");
         exit;

      } else {

        echo "Username and poassword incorreect!";
      }
    }

    }
   

}


?>
    
  <form action="" method="post" autocomplete="off">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" ><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" ><br><br>

    <input type="submit" value="Login">
  </form>

</body>
</html>


