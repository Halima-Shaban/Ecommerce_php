<?php

//boolean

$is_admin =true; 
echo gettype($is_admin =true);
echo "<br>";
//string
$name ="eee";
echo gettype($name ="eee");
echo "<br>";
//int
$price =10;

echo gettype($price =10);
echo "<br>";
//float
$total =5.5;

echo gettype($total =5.5);
echo "<br>";
//null
$color ="null";

echo gettype($color ="null");
echo "<br>";

//object
class uses{

}
//array
$color =["red" , "blak"];

echo gettype($color =["red" , "blak"]);
echo "<br>";
$first_name ="fatma";
$last_name =" azeem";
echo $first_name . $last_name ;