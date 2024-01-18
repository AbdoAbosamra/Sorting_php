<?php
$add = function($a ,$b){
    return $a + $b;
};
$result = $add(2,3); // using as clusre
echo $result;

// can be use as parameter of the function

function operation($a ,$b , $operate){
    return $operate($a ,$b);
}

$add_result = operation(2 , 6 ,function ($a ,$b){
    return $a*$b;
});

echo $add_result;

// some example to use anonymous function
$numbers = [1,2,4,8,16,32];
$squeard = array_map(function ($num){
    return $num *$num;
} , $numbers);

print_r($squeard);

