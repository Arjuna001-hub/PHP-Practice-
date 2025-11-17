<?php 
function testLocal() {
    $x = 10;
    echo "Inside function x = $x<br>";
}

testLocal();
echo "Outside function x = $x"; // This will show a notice because $x is local to the function
?>
