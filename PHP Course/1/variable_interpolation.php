<?php
$name = "John";
$str = "This is some string";
$res = "This is Good $str and interpolation as this name $name";
echo $res;

#############################################
// can be another way to interpolation
// heredoc interpolation

# but can not use here a single qoute
$name = 'Fred';
$str = 'Hello, $name'; // single-quoted
echo $str;
//  The result is : Hello, $name
echo "<br>";
echo "This is ignored\rThis is another";

// Here Documnets
$some_doc = <<< Start
sdsdasdasd
sdasdasdas
dasdasdas
dasasdasdas
dsasdasas
dasasasdas
dasdasdas
dasasasdasd
dsasdasdasd
dsadasdsada
dsasasddsas
Start;
echo $some_doc;


// can use also use printf
// for printing values
$day = 20;
$mount = 7;
$year = 1999;
printf('%2d/%2d/%4d' ,  $day , $mount , $year);
$date = sprintf("%02d/%02d/%04d", $mount, $day, $year);
// now we can interpolate $date wherever we need a date
echo $date;
var_dump($date);

for($i = 0; $i < strlen($str) ; $i++){
    printf("The %d charter is %s \n" ,$i ,$str[$i]);
}
