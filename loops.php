<?php
// echo "while loop <br>";
// $i = 1;
// while ($i <= 5) {
//     echo "$i <br>";
//     $i++;
// }

// echo "for loop <br>";
// for ($i=1; $i <= 5; $i++) { 
//     echo "$i <br>";
// }
// for ($aru=18; $aru < 100; $aru++) { // tab press kore var to var traverse kora jai
//     echo "$aru age <br>";
// }

echo "Do while loop <br>";
$j = 0;
do {
    echo "$j while <br>";
    $j += 2;
} while ($j <= 10);

$a = 20; // executes atleast once even if while condition is false.
do {
    echo "it is $a and limit is 10<br>";
} while ($a <= 10);

echo "foreach loop!<br>";
// foreach is used to iterate object having keys and key values.
$arr = array("arunava", "rahul", "dona", "anwesha", "mainak");
foreach ($arr as $value) {
    echo "$value <br>";
}
?>