<?php
$colors =['red' , 'green' , ' blue'];
echo $colors[0];

# Associative array
$student = [
    'age'=>'20',
    'name'=>'ahmed',
    'phone'=>'0124578520'
];
echo $student['age'];
/*
var_dump($student);
# alternative
print_r($student);
array_unshift($student , 'email');
var_dump($student);
$colors[] = 'black';
var_dump($colors);
unset($colors[3]);
var_dump($colors);
echo count($colors);
*/
// how to reverse php arrays
$reversed_colors =array_reverse($colors);
print_r($reversed_colors);