<?php 

try{

    $connection = mysqli_connect("localhost","root","","sms");
} catch(Throwable $e){

    echo $e->getMessage();
}