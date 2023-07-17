<?php 


$colors = array("Pula" => "Red","Itim" => "Black","Puti" => "White");

$total = count($colors) ."<br/> <br>";

echo " The total colors is " .$total;
print_r($colors);

echo "<br/>" .$colors['Itim'] ."<br/> <br>";



$numbers = array(1, 2, 5, 4, 3, 6, 7, 8);
rsort($numbers);
sort($numbers);
print_r($numbers);
echo "<br> <br>";



//Searching inside the Array
if(in_array("Red", $colors)) {

    echo "You Win";
} else {
    echo "You Loss";
}





?>  