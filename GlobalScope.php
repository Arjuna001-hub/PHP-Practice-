<?php 
$y = 50;

function testGlobal() {
    global $y;
    echo "Value of global y inside function: $y<br>";
}

testGlobal();
echo "Outside function: $y<br>";

// Using $GLOBALS
$x = 20;

function displayGlobal() {
    echo "Value of global x using GLOBALS: " . $GLOBALS['x'];
}

displayGlobal();
?>
