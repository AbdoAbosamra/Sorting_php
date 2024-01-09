<?php
////////////////////////////////////
/// Scalar types
// float or double
// int
//boolean
// string
////////////////////////////////
/////////////////////////////////////////
/// Compound types
/// array
/// object
/// callable
/// itertable
///
/// Spical type
/// Resource
/// NUll
///
/// var_dump() // to get the all information we need
/// Type casting with () before the value
/// Null will be false
/// if we print false will give us nothing empty string
$x = PHP_INT_MAX;
var_dump($x);
// if i want to convert string to int will be give us 0
// we have many methods to chek the type by is_datatype
// anytype have e the type will be float
// floor -> get the float number down
// ciel -> get th float number to the up

echo floor(3.9);
// do not compare two floats dicretly
//////////////////////////////////////////////////
/// String
// Is a series of characters
$first_name = 'ahmed';
$last_name = 'mohsen';
echo $first_name;
echo "<br>";
echo " {$first_name} Mohsen";

/////////////////////////////////////////
/// heredoc
$text = <<<TEXT
line1
line 2
line8

TEXT;
echo $text;
//Nowdoc will not print the vaibales inside
$text8= <<<'TEXT'
line $first_name
TEXT;
echo $text8;
// if the variable undefined yet will value will be null
// In arry i can not get the index of -1 array[-1]
$check =['a' , 'b' , 'w'];
//echo $check[-1]; // will give us undefined array key -1
// i can push new element with multiple ways
array_push($check,'c');
$check[] = 'h';
$check[5]='m';
//////////////////////////
echo '<pre>';
print_r($check);
///////////////////////
/// Associative array
// keys can be numeric and string