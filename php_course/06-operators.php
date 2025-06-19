<?php 


/*

 - Arithemetic operators [ + , - , / , * , % , ** ]
 - Logical operators     [ && , || , and , or , xor ]
 - Comparison Operators   [ > , < , >= , <= , == , === , !== , !=== ]
 - Assignment Operators   [ = ]
 - Increment operators    [ post-increment [ ++ ] , [ pre-increment ++ ]]
 - decrement operators   [ post-decrement [ -- ] , [ pre-decrement -- ]]

*/

$x = null ;

if($x){
    echo "yes";
}

echo "<br>";

var_dump(isset($x));

echo "<br>";


$y = 10;

--$y;

++$y;

$y++;

$y--;

echo "<br>";

echo $y++;