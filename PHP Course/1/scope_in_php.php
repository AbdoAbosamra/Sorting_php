<?php

#################################################
#Comparsion between Local scope vs global scope
#################################################


function updateCounter(){
    $counter =NULL;
    global $counter; // but after add this line that make the variable converted from local to global scope
    $counter++;
    $GLOBALS['counter']++; // can use it also as alternative way

}
$counter = 10;
updateCounter();
echo $counter; // counter didnot update because vatiable in local scope

##############################################################################
# Static variable
###############################
//here it is keep its value with all calls of the functions
function update_a(){
    static $a = 0;
    $a ++;
    echo $a;
}
update_a(); // will return 1 ;
update_a(); // will return 2 ;
update_a(); // will return 3 ;
update_a(); // will return 4 ;
update_a(); // will return 5 ;
echo $a;  // it is not visible here

################################################################
// at the end we have function parameters it is local in the function

