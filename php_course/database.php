<?php 

// PDO => PHP DATA OBJECT 

try {

$connection = mysqli_connect("localhost","root","","trainees");

if($connection){
    // echo "Connected to database";
}

} catch( Throwable $e){

    echo $e->getMessage();
}