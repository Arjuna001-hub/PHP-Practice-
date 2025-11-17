<?php
//Implement a function to count and print the number of vowels in a string.

function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    
    $string = strtolower($string);
    
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    
    echo "String: '$string'<br>";
    echo "Number of vowels: $count";
}

countVowels("Arjuna Sharma");
?>