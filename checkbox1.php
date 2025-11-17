<!DOCTYPE html>
<html>
<body>

<form action="" method="GET">
    <label><input type="checkbox" name="toppings[]" value="olives"> Olives</label>
    <label><input type="checkbox" name="toppings[]" value="pepper"> Pepper</label>
    <label><input type="checkbox" name="toppings[]" value="garlic"> Garlic</label>

    <input type="submit" value="Submit">
</form>
<?php 
$toppings = filter_input(INPUT_GET, "toppings",options: FILTER_REQUIRE_ARRAY);

if (empty($toppings)) {
    print "No extra toppings selected";
} else {
    print "Toppings: " . implode("+", $toppings);
}
?>

</body>
</html>
