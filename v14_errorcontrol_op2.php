<?php
include_once "util.php";

/*
Bitwise Operators
- are used to perform bit-level operations
- & | ^ ~ << >>


*/
h1("Bitwise Operators: & | ^ ~ << >>");
$x = 6; // 110
$y = 3; // 011

var_dump($x & $y);
br();
echo "equivalente binario: ";
br();
var_dump($x & $y, decbin($x & $y));
br();
var_dump($x | $y, decbin($x | $y));

// at 9:18 v14


?>  