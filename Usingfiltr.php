<?php 
$name = filter_input(INPUT_GET, 'name');
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);

echo $name;
echo "<br>";

if ($email === false) {  
    echo "Email is not valid";
} else {
    echo "Email is valid: $email";
}
?>
