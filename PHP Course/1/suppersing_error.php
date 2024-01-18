<?php
// To supress error by the @ oerator
// to just keep the code runing and ignore the error just keep running that may be usefull for interact with files

$fo = @fopen("Some File name" , 'r');
echo " some thing else";
// casting object to array
class person{
     var $name  = 'ahmed'; // if we do not add var , will be error
     var $age = 44; // if we do not add var , will be error
}

$o = new Person;
$a = (array) $o;

print_r($a);
$isoperson =  $o instanceof Person;
echo $isoperson;

#######################################################################################################
#Functions
# Built-in Functions
# strlen()  to get the lenght of the string
$length = strlen("PHP");

// can i doubler any value with a magic trick
function doubler($value)
{
    return $value << 1;
}
echo 'Some thing so importanat';
echo doubler(20);