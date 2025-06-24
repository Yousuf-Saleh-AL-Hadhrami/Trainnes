<?php 

include "./includes/database.php";

mysqli_query($connection, " INSERT INTO users VALUES 
                           (NOT NULL, 'admin', '". password_hash(123456, PASSWORD_BCRYPT). "',
                            'Yousuf','AL Hadhrami', 'admin'),
                            (NOT NULL, 'maryam', '". password_hash(123456, PASSWORD_BCRYPT). "',
                            'Maryam','AL Rashdi', 'teacher'),
                            (NOT NULL, 'amal', '". password_hash(123456, PASSWORD_BCRYPT). "',
                            'Amal','AL Riyami', 'student')
                            
                            
                            ");  