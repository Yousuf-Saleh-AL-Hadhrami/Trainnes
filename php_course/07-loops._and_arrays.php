<?php 

/*

-for()
-while()
-do while()
-foreach()

*/

$a = 1;

for($i = 1; $i <= 10; $i++)
{
    if($i == 5 ) continue;
    echo $i . '<br>';
}

echo "<br>";

// while($a <= 15){

//      echo $a . '<br>';

//      $a++;
// }

echo "<br>";


do{
    
    echo $a . "-" . "Yousuf" . "<br>";

    $a++;

}while($a > 15);

// echo "<br>";

// $fruits = array();

// Indexed array
$fruits = ["Apple","Orange","Banana"];


echo count($fruits);

echo "<br>";

$fruits [] = "Kiwi";

array_push($fruits, "Grapes");

array_pop($fruits);

array_shift($fruits); // remove the first element from array

array_unshift($fruits, "Melown"); // add element to the begining of the array


var_dump($fruits);

// echo $fruits[3];


// Associative array 

$studentsMarks = [

     10 => 75,
     20 => 80,
     35 => 50 ,
     "om" => "oman",
     true => "Active",
     "mark" => 99
];

echo "<br>";

echo $studentsMarks["om"];

echo "<br>";

echo $studentsMarks[35];

echo "<br>";
echo "<br>";



foreach($studentsMarks as $key => $student){

    echo $key . "=>" . $student . "<br>";

}

// Multidiemensional Array

$students = [

    ["id" => 100 , "name" => "Yousuf", "address" => "Izki"],
    ["id" => 200 , "name" => "Ali", "address" => "Nizwa"],
    ["id" => 300 , "name" => "Salim", "address" => "Manah"],


];
?>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
    </tr>
<?php
foreach($students as $student)
{

     echo "<tr>";
     echo "<td>$student[id] </td>";
     echo "<td>$student[name] </td>";
     echo "<td>$student[address]</td>";
     echo "</tr>";


}

echo "</table>";