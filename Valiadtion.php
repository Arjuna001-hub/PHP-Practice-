<?php 
$email =filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if($email === false || $email === null){/* invalid  */}



$safe =filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$cleanEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$str ="<h1> Hello World </h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>