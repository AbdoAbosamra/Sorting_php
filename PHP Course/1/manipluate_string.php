<?php
// manipulationg and searching strings
// searching for fixed strings

$long_string = <<< TEST
This is some string for testing the search on strings
TEST;

$piece = substr($long_string , 10 , 30);
$another_piece = substr($long_string , 30);
echo $piece;
echo "<br>";
echo $another_piece;
echo "<br>";

// to calculate the count of  repeated substring in the large string
$count = substr_count($long_string , "the");
$count = substr_count($long_string , "the");
echo "Repeadted $count";
echo "<br>";

//substr_replace()
// This string replace with partion text with offset and length
$modified_str = substr_replace($long_string , "testing" , 20 , 30);
echo $modified_str;
// can be append by use the length 0
// and can use it to deleting without addition some text in replace

// strrev : to reverse copy of the original string
echo "<br>";
echo strrev($piece);
// for repeating some text multiple times or count's times
echo str_repeat('_.-.', 40);

#############################################################
#excloding and imploding

// break the string into array values
$val1 = "The,That,These";
$exploded = explode(',' ,$val1);
print_r($exploded);

// Implode It is create large string from samller array values
$imploeded = implode('-' ,$exploded);
echo $imploeded;
//The join() function is an alias for implode()
//
//Tokenizing
$first_chunk = strtok($val1 , ',');
echo $first_chunk;
$next_chunk = strtok(',');
echo $next_chunk;

// That is good example about token

$string = "Fred,Flintstone,35,Wilma";
$token = strtok($string, ",");

while ($token !== false) {
    echo("{$token}<br />");
    $token = strtok(",");
}
