<?php
session_start();

include "./includes/header.php";
include "./includes/database.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = " SELECT * FROM users";
    $result = mysqli_query($connection, $query) or die("Error in Query ". mysqli_error($connection));
    $user = mysqli_fetch_assoc($result);

   if($user)
   {
      $error = "";

      if(password_verify($password, $user['password']))
      {
         $_SESSION['is_login'] = true;
         $_SESSION['role'] = $user['role'];
         $_SESSION['id'] = $user['id'];
         $_SESSION['full_name'] = $user['fname'] . " " . $user['lname'];


         if($user['role'] === 'admin'){
          header("location:admin/dashboard.php");
          exit;
         } elseif($user['role'] === 'teacher'){
           header("location:teacher/dashboard.php");
          exit;
         }else{
           header("location:student/dashboard.php");
          exit;
         }
      }
   }

}
?>


<?php 

if(isset($_SESSION['is_login'])){

     if($_SESSION['role'] === 'admin'){
            header("location:./admin/dashboard.php");
            exit;
     } elseif($_SESSION['role'] === 'teacher'){

         header("location:./teacher/dashboard.php");
            exit;
     } else {

         header("location:./student/dashboard.php");
            exit;
     }

}
?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <h3 class="text-center mb-4">Login</h3>
      <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</div>