<?php
//Use string functions (strtoupper, strrev, str_repeat) to manipulate a sentence.

$sentence = "Hello It`s me A.K Sharma";

echo "Original " . $sentence . "<br>";
echo "Uppercase " . strtoupper($sentence) . "<br>";
echo "Reversed " . strrev($sentence) . "<br>";
echo "Repeated " . str_repeat($sentence . " ", 3) . "<br>";
?>