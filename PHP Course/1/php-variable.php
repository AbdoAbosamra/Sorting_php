<?php
$giftbox;
//echo empty($giftbox);
echo isset($giftbox);
if (isset($giftbox)){
    echo "This is something Like that";

}else{
    echo "That is Not";
}
echo "<br>";
//  Constant
if (!defined('MY_CONSTANT')){
    define('MY_CONSTANT' , 4);
}
//$x = MT_CONSTANT; // pirior php 8 will accept this as literal string
// class scope using class_name::attribute_or_method
// A/B testing in php
$headline0 = 'Ten Tips for Writing Great Headlines';
$headline1 = 'The S1tep-by-Step to Writing Powerful Headlines';

echo ${'headline' .crc32($_SERVER['REMOTE_ADDR']) %2};
// What s $_server ?
// It was array system-defined superglobal vaiable that contains usefull information about server runing your code and in comming request that triggerd PHP to run in first place
//  so the exact contnet of thisparticular arraywiil differ from server to server particulay based on whether you used NGINX or Apache HTTP Server
// but it is usualy contanins helpful information like request headers - request paths and the filename of the currenyly executenig script



# Swaping variables in place
// we want to exchange two values stored in two values without defining any additional variable
// First solution
$a = 10 ;
$b = 40;
list($a , $b) = array($b ,$a);
echo $a , $b ;
[$a ,$b] =[$b ,$a];
