<?php

$a = 65;
$b = 9;

if ($a > 78 ) {
    echo "a = $a is greater than 78.";
}
else{
    echo "a = $a is smaller than 78.";
}
echo "<br>";

// if else ladder

$age = 54;

if ($age > 18) {
    echo "alchohol , chai , water are allowed";
}
elseif ($age > 13) {
    echo "chai and water are allowed only";
}
else{
    echo "water is allowed only";
}
echo "<br>";
echo "Done!";
echo "<br>";

$driverAge = 66;

if ($driverAge >= 24 && $driverAge <=65) {
    echo "You can drive.";
}
elseif ($driverAge < 24) {
    echo "Too young to drive!";
}
else{
    echo "Too old to drive!";
}
?>