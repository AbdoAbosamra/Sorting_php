<?php
// variable of variable
// make the value of the variable be the variable
 $name = 'Ahmed';
 $$name = 'khaled';
 echo $$name;
# How to declear constant
    define('PI' , 3.14);
    print PI;
    const Square = 20;
    echo "<br>" .  Square;
// What is the different between define and const?
// The full answer in php note 0.3
// false will print nothing and the same as ""
//true will print 1
// gettype() to get the type of the value
// null is special datatype
// resource that is extrnal resource  file connect with - refer to