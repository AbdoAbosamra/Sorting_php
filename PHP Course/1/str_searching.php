<?php
// to searching string on another string
// can use it with strpos() and strrpos()
// that first occurence return postion
$long_string = <<< TEST
This is some ,string for testing, the search on , strings
TEST;
$pos = strpos($long_string , ',');
if ($pos !== false){
    echo "Comma is not found";
}else{
    echo "Comma is found in the position $pos";
}

echo $pos;

// To return the last ouccurence of the specific string
$l_pos = strrpos($long_string , ',');
echo $l_pos; // will return 48


// searching returning the rest of the string

$rest = strstr($long_string , ',');
echo "<br>";
echo $rest;
/*
 * As with strrpos(), strrchr() searches backward in the string
 * ,but only for a single character, not for an entire string.
 */
$test = strrchr($long_string ,','); // from backword of the strstr

echo "<br>";
echo $test;

#decomposition string

// decompose the url to values in the array
$bits = parse_url("https://learning.oreilly.com/library/view/programming-php-4th/9781492054122/ch04.html#miscellaneous_string_functions");
print_r($bits);
// convert to keys shecma - and host and path  and fragment

/*
 * The possible keys of the hash are scheme, host, port, user, pass, path, query, and fragment.
 *
 */