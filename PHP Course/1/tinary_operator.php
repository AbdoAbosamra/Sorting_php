<?php
/*
 * Problem definition :
 * We want to provide an either-or branching condition
 * to assign a speceic value to varible in one line
 *
 */
$username = isset($_GET['username']) ? $_GET['username'] : 'Default';
// can be short to this form
$username = $_GET['username'] ?: 'default';

echo $username;

/*
 * $_value_ = (_expression to evaluate_) ? (if true) : (if false);
 *
 */

/*
 * The ternary pattern is a simple way to return a default value
 * when checking either system values or even parameters from a web request (those stored in the $_GET or $_POST superglobals).
 *  It is also a powerful way to switch logic in page templates based on the return of a particular function call.
 */

################################################################################################################################

