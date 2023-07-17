<?php

// String
$str = "Hello";


var_dump($str);
echo "</br> </br>";

$check = str_replace(" ", "", $str);
echo strlen($check);
echo "</br> </br>";



// Constant
define("Sensei", "Hi");
echo Sensei;
echo "</br> </br>";


$num1 = 10;
$num2 = 20;

echo $num1 += $num2;
echo "</br>";
echo $num1;
echo "</br> </br>";



// if statement  
$integer = 20;

if($integer === 20 xor $integer <50) {
    echo "True";
} else {
    echo "False";
}
echo "</br> </br>";



//Loop

$x = 1;

/*
while($x <=10) {
    
    echo "This is number " .$x ."</br>";
    $x++;
}   */


/*
do{
    echo "This is number " .$x ."</br>";
    $x++;
} while($x <=10);  */

/*
for($i = 5; $i >= 1; $i--) {
    echo "This is number " .$i ."</br>";
}  */


/*
$name = "Shauntalle";
$age = 18;
$male = true;


$data = array($name, $age, $male);

foreach($data as $results) {
    echo $results ."</br>";
}  */






