<?php
function happy(): string{
    return "Happy";

}
echo happy();


class Person {
    public $name ='';
    function name($new_name = NULL){
        if (!is_null($new_name)){
            $this->name = $new_name;
        }
        return $this->name;
    }

}

$obj = new Person;
echo $obj->name('Hi');
echo is_object($obj);



//call_user_func($call_back);

$address = ['123 S Main St.', 'Anywhere', 'NY', '10001', 'USA'];

// Extracting each element as named variables
[$street, $city, $state, $zip, $country] = $address;

// Extracting and naming only the city
[,,$state,,] = $address;

// Extracting only the country
[,,,,$country] = $address;

var_dump($country);

// xor . it is generate true if one of the two the operator is true and another is not
// but not Two varialble is true should be different.

$abdo = 'secret';
$ahmed = $abdo;
unset($abdo);
echo $ahmed;

// so why i should use calling by refernce to avoid coping large arrays or sting

###########################################################################
# Imperative programming example
# this example explain the how  capitilize cahracters in string free of the function
$str = 'This is  an exaample';

if (ord($str[0]) >= 97 && ord($str[0])<= 122){
    $str[0] = chr(ord($str[0]- 32));

}
echo $str . PHP_EOL; // convert the first caracter to the capitacl characte


// To convert this code to resuable block of code
//  to be procedural block of code
function capitaliz_string($str){
    if (ord($str[0]) >= 97 && ord($str[0])<= 122){
        $str[0] = chr(ord($str[0]- 32));

    }
    return $str;
}
echo capitaliz_string($str);


// php by defualt pass the arguments by value so have copy and send to it so the original value can not change
// but in the complex types like objects it pass by refernce so can chage the original value.


// the Scond case of using static varibale is keep the value beteen multiple instamces
// it is static while any opertion keep the value static between calling and class between instances

class myclass{
    public static $varia = 2;
    public static function increment_value(){
        self::$varia ++;
    }



}
var_dump(myclass::$varia);
echo myclass::increment_value();
echo myclass::$varia;