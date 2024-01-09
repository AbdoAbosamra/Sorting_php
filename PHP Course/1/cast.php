<?php
$price = (int) '5'; // This make me type casting  or type conversion
echo $price;
echo gettype($price);
$count = 5;
$tax = "15";
$total = $count + $tax ;
echo $total;
echo gettype($total);

$value =10;
$value_2 = 'string';
$value_3 =false;

echo (bool)$value;
echo (string)$value;
var_dump( (int)$value_2);

// and can cast to arry and object