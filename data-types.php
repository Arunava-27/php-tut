<?php
// php primary data types
/*
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
 */ 

 // Strings 
$name = "Arunava";
$friend = "Rahul";
echo "$name's friend is $friend";

// Integer 
$income = 500000;
$debt = -1000;
echo "\n"; //space
echo $income;
echo $debt;

// Float 
$income = 5.5;
$debt = -0.5;
echo "<br>";
echo $income;
echo "<br>";
echo $debt;

// Boolean 
$x = true;
$is_friend = false;
// var_dump() : shows datatype and value of a variable 
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);

// Object - Instances of a class
// Example : Employee is a class ----> Arunava Can be one Object

//  Array
$friends = array("Rohan", "subham", "Skillf", "Larry");
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo var_dump($friends[0]);

// Null
$name1 = null;
echo "<br>";
echo var_dump($name1);
?>