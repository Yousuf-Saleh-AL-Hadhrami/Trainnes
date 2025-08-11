<?php 

/*
   - bit  [ 0 , 1 ]
   - byte [ 8 bits ] => number or a character 
   - kilobyte => 1024 => byte
   - megabyte => 1024 => kilobyte
   - Gigabyte => 1024 Megabyte
   - Terabyte => 1024 GigaByte 

   ============================================

   - Binary [ 0 , 1 ]
   - Octal  [0 - 7]
   - Hexadecimal [ 0 - 9 , A - F]
   - Decimal     [ 0 , 9 ]

   ============================================

        0     1     0   0   0     0     0    1   => 0 => 255 [ 0 , 254 ]

       128   64    32   16   8     4     2     1       
       2^7   2^6   2^5  2^4  2^3   2^2   2^1  2^0    => 0

         128   64    32   16   8     4     1024    512   256    
       2^15   2^14   2^13  2^12  2^11   2^10   2^9  2^8    => 0


   

*/
// Unix epoch time 

use Nette\Utils\DateTime;

echo date_default_timezone_get();
echo "<br>";

echo date_default_timezone_set("Asia/Muscat");
echo "<br>";

echo date_default_timezone_get();


echo "<br>";
echo time() . " => " . date("Y-m-d H:i:s", time());
echo "<br>";
echo ini_get("date.timezone"); 
echo "<br>";
echo ini_get("session.gc_maxlifetime") /60;
echo "<br>";


echo date("Y-m-d H:i:s", time() + 7 * 24 * 60 * 60);

echo "<br>";

$date1 = "1970-01-01";
$date1ToTimestamp = strtotime($date1);

echo date("Y-m-l", $date1ToTimestamp);

echo "<br>";

echo date("Y-m-d H:i:s", strtotime("+10days", $date1ToTimestamp));

echo "<br>";


function getArabicDay($dateTime)
{
    $day = date("l", strtotime($dateTime));

    switch ($day) {
        case "Saturday":
            return "السبت";
        case "Sunday":
            return "الأحد";
        case "Monday":
            return "الاثنين";
        case "Tuesday":
            return "الثلاثاء";
        case "Wednesday":
            return "الأربعاء";
        case "Thursday":
            return "الخميس";
        case "Friday":
            return "الجمعة";
        default:
            return "غير معروف"; // Unknown
    }
}


echo getArabicDay("2005-05-05");