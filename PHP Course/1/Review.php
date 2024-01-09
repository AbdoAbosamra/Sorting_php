<?php
// Call by refernce will make the original element will modify
// call by value will not modify becouse jusy value was called not the acctual value
// key  in the associative array can be string or integer// if we have the same key in different datatype will be overeide the value
// vsn br  assgin key for one element of the array

$arr =['a','b' ,'c'];
echo array_pop($arr);
var_dump($arr);
// if i unset all elements and add new elements that will add indexes not start from bienging
// uniry accept one operator
//binary accept two operators
$a = +'10'; // when i add + or - will convert type to integer
$b = 20;
var_dump($a);
// if i want to assign two values in one line
$x = $y =20; // That is valid
var_dump($x,$y);
// The difiernce between == can be give us true if two values with diferent datatype
// but === must be in the same datatype '5' === 5 that will be false
$w = ($a+10 <=> $b);
var_dump($w);
// if we compasion two values 0 and 'hello' string will give us false because integer will be convert to string
// tinery operator
$tin = $a=== 10 ? "Sucsses" : "Not sucsses";
echo $tin;
$q= "markup"; //  to assgin to hello should be this value is null
$j = $q ?? "hello"; // if the firsu vlaue is null will assgin to the second value

var_dump($j);