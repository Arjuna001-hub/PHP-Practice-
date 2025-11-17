<?php 
$age =25;
var_dump(filter_var($age, FILTER_VALIDATE_INT));
$age ="twenty five".".<br>";
var_dump(filter_var($age, FILTER_VALIDATE_INT));
$input ="<b>Hello</b><script>evil()</script>";
$clean = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
?>