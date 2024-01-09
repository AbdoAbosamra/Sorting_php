<?php
// coalescing null operator
// if the first value is not set to null ??

$username = $_GET['username'] ?? 'not logged in';
$username = $_GET['username'] ?: 'not logged in'; // same functionallty but with waring if the first operaotor is undefined
// if the first value is null will assign to the defualt value.
// it is shorthand to tenary operator ?:

/*
 *
Syntactic sugar is shorthand for performing a common yet verbose operation in code.
 The developers of languages introduce such features to save keystrokes and render routine,
oft-repeated blocks of code via simpler and more concise syntax.
 */

/*
 * Both of the following lines of code are functionally equivalent,
 * but the ternary form will trigger a notice if the expression being evaluated is undefined:


$a = $b ?: $c;
$a = $b ?? $c;
 *
 *
 *
 */


