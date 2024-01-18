<?php
// we have now inside a function
// two get the Arguments
// and get the number of arguments

function coint_list()
{
    if(func_num_args() == 0){
        return false;
    }
    else{
        $count = 0;
        for($i = 0; $i < func_num_args(); $i++){
            $count += func_get_arg($i);
        }
    }
    return $count . func_get_args()[1];
}

echo coint_list(2,4,6,7);

// so i can directly control to the function parameters
/*
 * The result of any of these functions cannot directly be used as a parameter to another function. Instead, you must first set a variable to the result of the function, and then use that in the function call. The following expression will not work:

foo(func_num_args());
Instead, use:

$count = func_num_args();
foo($count);
 *
 *
 *
 *
 */

// if the function should take two variables and take just one variable will be excute but will warning raise
# variable function
function do_something(){
    return "Do something";
}

$var_func = 'do_something'; // this is the way to create variable function

echo $var_func();

