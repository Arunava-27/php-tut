<?php
/*

*/
$a = 8;
$b = 4;
// 1. Arithmetic Operator 

echo "For a + b, result is : ". ($a + $b). "<br>";
echo "For a - b, result is : ". ($a - $b). "<br>";
echo "For a * b, result is : ". ($a * $b). "<br>";
echo "For a / b, result is : ". ($a / $b). "<br>";
echo "For a % b, result is : ". ($a % $b). "<br>";
echo "For a ** b, result is : ". ($a ** $b). "<br>"; // exponential operator like a^b

// 2. Assignment Operators

$x = $a;
echo "For x, value is : " . $x . "<br>";
$a += 2;
echo "For a, value is : " . $a . "<br>";
$a -= 2;
echo "For a, value is : " . $a . "<br>";
$a *= 2;
echo "For a, value is : " . $a . "<br>";
$a /= 2;
echo "For a, value is : " . $a . "<br>";
$a %= 2;
echo "For a, value is : " . $a . "<br>";

// 3. Comparison Operators

$y = 2;
$z = 3;
echo "y = ". $y ." and " . "z = ". $z;
echo "<br>";
echo "For y == z, result is : ";
echo var_dump($y == $z);
echo "<br>";
echo "For y < yz result is : ";
echo var_dump($y < $z);
echo "<br>";
echo "For y > yz result is : ";
echo var_dump($y > $z);
echo "<br>";
echo "For y <= z, result is : ";
echo var_dump($y <= $z);
echo "<br>";
echo "For y >= z, result is : ";
echo var_dump($y >= $z);
echo "<br>";
echo "For y != z, result is : ";
echo var_dump($y != $z);
echo "<br>";

// 4. Logical Operators

$m = true;
$n = false;

echo "For m and n, result is : ";
echo var_dump($m and $n); // can be also written as "&&"
echo "<br>";
echo "For m >= n, result is : ";
echo var_dump($m or $n); // can be also written as "||"
echo "<br>";
echo "For !m, result is : ";
echo var_dump(!$m); // NOT
echo "<br>";

?>