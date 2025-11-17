<html>
    <form action=""method="GET">   
<select name="flower">
    <option value="poppy">Poppy</option>
    <option value="daisy">Daisy</option>
    <option value="tulip">Tulip</option>
</select>
<input type="Submit"value="Submit">
</form>

<?php 
$flower = filter_input(INPUT_GET, "flower");
echo "Selected flower: ".$flower;
?>
</html>