<?php
$i = 0;
while ($i <= 15){
    echo $i++;
}
// if we have while true so we must have break to avoid inifinte loop
for ($e = 0 ; $e <= 20 ; $e++):
    echo $e;
endfor;
// if i have count to get the size of array to be more clean code should not be in the for loop itself but it is better than
// using define before the for and use the variable to limit for loop

// To use foreach
$programming_languages =['php' ,'go' ,'c++' ,'Rust' , 'c'];

foreach ($programming_languages as $language){
    echo $language ."<br>";
} // That will be easier to use than for ecpically when print elements of the array
// Can be usefull also in the using assosiactive array
foreach ($programming_languages as $key => &$language){
    echo $key .":" . $language . "<br>";
}

// callingby refernce and by value
// TO CALL BY REFERNCE  should add & brefore variable
unset($language);
echo $language; // undefined