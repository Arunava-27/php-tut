<?php
$name = "Arunava";
echo $name;
echo "<br>";
echo strlen($name); // returns string length
echo "<br>";
echo "length of my strung is : ". strlen($name); // '.' for concatenation of strings
$sent = "Arunava kundu is a good boy";
echo "<br>";
echo $sent;
echo "<br>";
echo "Total words : ". str_word_count($sent); // str_word_count : function to count words.
// Reverse String
echo "<br>";
echo strrev($name);
echo "<br>";
echo strrev($sent);
// Index position of a String
echo "<br>";
echo strpos($sent, "is");
echo "<br>";
echo strpos($name, "a"); // returns position of first small letter 'a' .
// Replace string with another string
echo "<br>";
echo str_replace("Arunava", "Rahul" , $sent); // (<replace_value>, <replace_with_value>, <replace_from_string>)
echo "<br>";
echo str_replace("a", "d", $name);
echo "<br>";
echo str_repeat($name."<br>", 10); // repeat a string
echo "<br>";
// Trimming of Strings
echo "<pre>"; // The <pre> HTML element represents preformatted text which is to be presented exactly as written in the HTML file.
echo rtrim("       I am a good boy       "); // white spaces trimmed from right
echo ltrim("       I am a bad boy        "); // white spaces trimmed from left
echo "</pre>";
?>