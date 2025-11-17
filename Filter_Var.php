<?php 
$age =25;
$age = filter_var($age, FILTER_VALIDATE_INT);
echo $age."<br>";
$age ="twenty five".".<br>";
$input ="<b>Hello</b><script>evil()</script>";
echo $input;
echo "<br>";
$clean = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
echo $clean;
?>