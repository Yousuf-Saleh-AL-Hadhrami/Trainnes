<?php 
declare(strict_types=1);

date_default_timezone_set("Asia/Muscat");

/*
  - built-in functions 
  - user defined functions 
*/

// echo strlen("  s");

echo "<br>";

$string = "I,Love,PHP";

$explodedString = explode(",", $string);

var_dump($explodedString);

$arrayString = $explodedString[0] . ' ' . $explodedString[1] . ' ' . $explodedString[2];

echo "<br>";

echo ucfirst("first");

echo "<br>";

echo "================================= <br>";

function sayHello(): void
{
    echo "Hello";
}


function hi(string $name , string $address = 'Muscat') :string {

    return $name . " You are from " . $address;
}


function calc(array|int $numbers , bool $status = false ):int|array|null|string {
        $result = 0;
        $avg = 0;
        $max = $numbers[0];
        $min = $numbers[0];


        if(!$status){
            return null;
        }
    if(is_array($numbers) ){

        for($i = 0; $i < count($numbers); $i++){

            $result += $numbers[$i] ;

            if($numbers[$i] > $max){

                $max = $numbers[$i];
            }

            if($numbers[$i] < $min){

                $min = $numbers[$i];
            }
        }

        $avg = $result / count($numbers);

      return "Sum = " . $result . "<br>".
              "Avg = " . $avg . "<br>". 
              "Max = " . $max . "<br>" .
              "Min = " . $min . "<br>" ;
              
    } 

    return $numbers;
}

function nextDate($date , $days){

$dateInseconds = strtotime($date , strtotime($date));
$nextTenDays = $dateInseconds + strtotime("+ $days days");

return date("Y-m-d H:i:s", $dateInseconds + $days * 24 * 60 * 60);
// return date("Y-m-d H:i:s", $dateInseconds + strtotime("+$days days"));

}

function trans($word){

    $word = strtolower($word);

    $words = [
        "welcome" => "مرحبا",

    ];

    if(array_key_exists(strtolower($word), $words)){

        return $words[$word];
    }

     return $word;
}

sayHello();
echo "<br>";
echo hi("Yousuf", "Izki");
echo "<br>";
echo calc([6,3,2,1,7], false);
echo "<br>";
echo nextDate("1-1-1990", 10);
echo "<br>";

echo trans("WelcOme");




