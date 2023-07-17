<?php 


include_once("class.php");

// $people = new person;
// $people->set_name("Giz");
// echo $people->get_name();



$child = new boy;
$child->set_height("5'7");
echo $child->get_height();

echo "<br>";

echo $child->set_name("Zey");
echo $child->get_name();
?>