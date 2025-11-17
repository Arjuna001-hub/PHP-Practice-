<!DOCTYPE html>
<html>
<body>

<form action="" method="GET">
    <input type="checkbox" name="olives"> Olives <br>
    <input type="checkbox" name="pepper"> Pepper <br>
    <input type="checkbox" name="garlic"> Garlic salt <br><br>

    <input type="submit" value="Submit">
</form>

<?php 
if (filter_has_var(INPUT_GET, 'olives')) {
    echo "Olives selected<br>";
}

if (filter_has_var(INPUT_GET, 'pepper')) {
    echo "Pepper selected<br>";
}

if (filter_has_var(INPUT_GET, 'garlic')) {
    echo "Garlic salt selected<br>";
}
?>

</body>
</html>
