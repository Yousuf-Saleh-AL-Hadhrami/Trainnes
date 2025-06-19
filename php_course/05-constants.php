<?php 

/*
  - User defined constants 
  - built-in constants 
  - magic constants 

*/


echo PHP_VERSION . '<br>';

echo PHP_INT_MAX  . '<br>';

echo PHP_FLOAT_MAX  . '<br>';

echo __DIR__ . '<br>';

echo __LINE__. '<br>';

echo __FILE__. '<br>';


define('LINK', 'https://www.google.com');

echo "<a href='". LINK ."'> Google </a>";

// LINK = 'XYZ'; can not be changed 

