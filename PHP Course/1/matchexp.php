<?php
// same as switch statement
$var =4;
$matched = match($var){ // and can be assign to the variable
    1 =>  "This statement",
    5,4 =>  "Another statement", // can do more than one key the same expression
    default=>"Here is default",
};
echo $matched;
// key and expression it is in php 8.0
// we don't have break statement here
// match is strict comparsion but switch is loose comparsion
// key can be multiple things like expression or conditional
// but in match every case can be have just one expression
