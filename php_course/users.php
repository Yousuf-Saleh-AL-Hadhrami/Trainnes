<?php 

 $id = isset($_GET['id']) ? $_GET['id'] : intval(0);

 $name = isset($_POST['name']) ? $_POST['name'] : "";


echo $id;
echo "<br>";
echo $name;

