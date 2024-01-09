<?php
// Increment have effect to null but decriment have no effect to it
// Increment have effect to string value but decrement  have no effect to it .
$t = 'abc';
echo ++$t; // will return abd
// && and in php
// || or in php
// and same && not recommand
// xor
// php has very important concept it is short circuting it was abbreviation if false and anything (and gate) php will not care with the second operand because First opernd is enough to generate the result


//bitwise operators
// calculate base on bits binary bits
$n = 9;
$f =8;

$d = $n & ~$f;
echo $d;
// and we have ~ negation operator -> filps the bits
// make every 0 to one and 1 to 0
