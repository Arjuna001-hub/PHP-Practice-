<?php 
function testStatic(){
    static $count=0; // initialized only once 
    $count++;
    echo "static count=$count<br>";
}
testStatic();
testStatic();
testStatic();
?>