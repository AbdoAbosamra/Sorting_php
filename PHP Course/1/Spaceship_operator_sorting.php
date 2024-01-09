<?php

class person{
    public $firstname ;
    public $lastname;
    public function __construct($first ,$last)
    {
        $this->firstname = $first;
        $this->lastname = $last;
    }

}

$presidents = [];

$presidents[] = new Person('George', 'Washington');
$presidents[] = new Person('John', 'Adams');
$presidents[] = new Person('Thomas', 'Jefferson');
// ...
$presidents[] = new Person('Barack', 'Obama');
$presidents[] = new Person('Donald', 'Trump');
$presidents[] = new Person('Joseph', 'Biden');


function presdintial_sorter($left , $right){
    return [$left->lastname , $left->firstname]
        <=>
        [$right->lastname , $right->firstname];
}

usort($presidents , 'presdintial_sorter');
echo '<pre>';
print_r($presidents);


// that is spaceship in details
/*
 * function sorter($a, $b) {
    return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
    }
 *
 */