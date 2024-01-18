<?php
/*
function get_book_title($isbn , $error = "Unable to Query"){
    try{
        $connection = get_database_connection();
        $book = query_isbn($connection ,$isbn);
        return $book->title;
    }catch {
        return $error;
    }
}
*/
// should be the defualt parameters in order not come first and the next paramter
// will raise Argument countError the second paramter will not defined

// To enforce using type safty and returning type
// Can i do that By this way
declare(strict_types =1 ); // this make strict type
// working n just this file not all files so the typing system in the othe file which you call will remain in the old typing system
function add(int $left , int  $right): int
{
    return $left + $right;

}

add(4,5);
//add(8 ,'7'); // will return fatal error


// to make type nullable add after the type ?

function say_hello(?string $message ){
    echo "Hello , ";

    if($message == null){
        echo "World!";
    }else{
        echo $message ."!";
    }



}

say_hello(null);
say_hello("SOmo");

// can use | to uniuon two datatypes can be asssign to the variable
function multiply(int|string $left ,int|string $right ){
    return $left * $right;
}

echo multiply(5,'6');

// To define a function with multiple parameters by using spread operator
function greatest(int ...$numbers): int{
    $greatest =  0;
    foreach ($numbers as $number){
        if ($number > $greatest){
            $greatest = $number;
        }
    }return $greatest;
}

echo greatest(8,9,7,10,22,36,45,77,41,25,65,47,25,19,13);
// The spread operator automatically adds all parameters passed in that particular position or after it to an array