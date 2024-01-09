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