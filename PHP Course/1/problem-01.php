<?php

# Version 1 of my code
function FindIntersection($strArr){
    $filtered_string1 = explode(',',$strArr[0]);
    $filtered_string2 = explode(',' ,$strArr[1]);
    $strArr =[];
    for($i = 0 ; $i < count($filtered_string1);$i++){
        for($j = 0 ; $j < count($filtered_string2);$j++){
           if($filtered_string1[$i]==$filtered_string2[$j]){
                $strArr[] = $filtered_string1[$i];
           }else{
               continue;
           }
        }
    }
    return $strArr;
}

/*
function FindIntersection($strArr){
    $res = [];
    $filtered_string1 = str_replace(',' , '' ,$strArr[0]);
    $filtered_string2 = str_replace(',' , '' ,$strArr[1]);

    for($i = 0 ; $i < strlen($filtered_string1);$i++){
            if($filtered_string1[$i]==$filtered_string2[$i]){
                $res[] = $filtered_string1[$i];
            }else{
                continue;
            }
        }

    return $res;
}
*/

// Soultion 1 :
// Split string to numbers

$s ='1,3,4,6,7';
echo str_replace(',', '' ,$s);

// array split


$arr = ['1,2,3,4,5,6,7', '2,5,7'];
$filtered_string1 = (array)$arr[0];
$filtered_string2 = (array)$arr[1];
echo "<pre>";


echo "<pre>";

print_r( FindIntersection($arr));



$byte_length = strlen('😃'); // => 4
//$string_length = mb_strlen('😃'); // => 1
//echo $string_length;

//echo mb_strlen('😃');

$e  = chunk_split(' Ahmed Mohsen ');
echo gettype($e);
echo "<br>";
var_dump($e);
echo chunk_split(' Ahmed Mohsen ');
$y = 'help go';
echo ucwords($y);
$r = 'stringarray';
echo '<pre>';
print_r(str_split($r));
arr