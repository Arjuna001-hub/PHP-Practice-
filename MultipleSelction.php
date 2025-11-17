<html>
    <form action=""method="GET">

<select name="flowers[]"size="3" multiple>
    <option value="poppy">Poppy</option>
    <option value="daisy">Daisy</option>
    <option value="tulip">Tulip</option>
    <option value="rose">Rose</option>
    <option value="sunflower">Sunflower</option>
    <option value="lily">Lily</option>
</select>
<input type="Submit"value="Submit">
</form>

<?php 
$flowers = filter_input(INPUT_GET, "flowers", options: FILTER_REQUIRE_ARRAY);
if (empty($flowers)){
    print("no flowers selected");
}else{
    print implode("+", $flowers);
}
?>
</html>