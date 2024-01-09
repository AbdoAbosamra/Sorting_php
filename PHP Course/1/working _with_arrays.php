<?php
$a =['a' ,'b' , 'c' ,'d'];
$b = ['e' ,'f' ,'g'];
// + between two this arrys will be uioin but in the spical way it will be uion if  the operand 2 have new element in the different indexes of the array 1
$z = $a + $b;
var_dump($z);// in this case will do not any thing will result is $a
$b[] = 'm';
$b[] = 'w';
$b[] = 'j';
print_r($b);
$z = $a + $b;
echo "<br>";
print_r($z);// Now  will uioin other elements because it was in the different indexes
// In assciative arrays it will be array == other_arry if both keys and values are the same
// and if we use strict === will check also to the type of the values
// and this strict to give us true must be two arrays in the same order
// and - or is less precdence  &&  ||
// so to be more readble should be use brackts