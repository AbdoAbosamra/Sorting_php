<?php
// Removing whitespace

// use that by trim() , ltrim() , rtrim()
// trim() returns a copy of string with whitespace removed from the beginning and the end

$title = " This is string in PHP \n";
$tirmed_string = trim($title);
echo $tirmed_string;
echo "<br>";
echo "This is another string";

$string1 = "HOW to";
$string2 = "speical view";
// strtolower() and strtoupper() operate on entire strings
//ucfirst() operates only on the first character of the string
//ucwords()operates on the first character of each word in the string.

print strtolower($string1); //how to
print "<br>";
print strtoupper($string2); // SPEICAL VIEW
print "<br>";
print ucfirst($string2); // Speical view
print "<br>";
print ucwords($string2); // Speical View
print "<br>";
// To create "TiTle case"
print "This is in the title case : " .ucwords(strtolower($string1));
//$meta_tags = get_meta_tags('https://learning.oreilly.com/library/view/programming-php-4th/9781492054122/ch04.html#changing_case');
//print_r($meta_tags);

# Query String

$baseURL = "wwww.google.com/q=";
$query = 'PHP sessions -cookies';
$url = $baseURL . urlencode($query); // any space convert to + sign
echo $url;
//strcmp()
$str1 = 'Ahmed';
$str2 = 'AHMED';
$n = strcmp($str1 , $str2);
$t = strcasecmp($str1 , $str2); // convert to lower case before compare two strings.
echo '<br>';
echo $n;
echo '<br>';
echo $t;
// we have also strncmp() , and strncasecmp() , with specific length
$q = strncmp($str1 ,$str2 , 3);
echo '<br>';

$w = strncasecmp($str1,$str2 ,3);
echo $q;
echo '<br>';
echo $w;
$common = similar_text($str1 ,$str1 ,$percent ); // will generate to us percent of the similarty of the two texts
echo '<br>';
printf("The similar characters number is %d represents approximatly %.2f%% ." , $common , $percent);
$str_algo = levenshtein($str1 , $str2); // will give us how many characters similar to another string and render which charcters is changed
echo $str_algo;
