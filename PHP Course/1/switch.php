<?php
$x =80;
switch ($x){
    case 80:
    case 90:
        echo "it is 90"; // in this case 80 and 90 will have the same body
        break;
    default:
        echo " it is out of range";


}
// so important tip if i want give two cases to the same body
// switch is loose data type means does not check the type
