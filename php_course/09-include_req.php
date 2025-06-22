<?php 

// include , include_once , require , require_one 
include "database.php";

$query = " CREATE TABLE IF NOT EXISTS
           users(
                 id INT PRIMARY KEY AUTO_INCREMENT , username VARCHAR(255),
                 password VARCHAR(84)
                 )";
mysqli_query($connection , $query);

if (mysqli_query($connection, $query)) {
    echo "Table created or already exists.";
} else {
    echo "Error creating table: " . mysqli_error($connection);
}