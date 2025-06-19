<?php 
 date_default_timezone_set("Asia/Muscat");

echo date_default_timezone_get();

// unix epoch time => 1-1-1970 00:00:00 UTC , GMT 
echo "<br>";

echo time();

$date = "10-12-1992";
$dateInseconds =  strtotime($date);

$nextWeek = strtotime("next saturday");

echo "<br>";

echo date("Y-m-d-l H:i:s", $nextWeek);

echo "<br>";

$years = floor(time() / (365 * 24 * 60 * 60))  ;

echo $years * 12;
echo "<br>";

echo $years / 12;