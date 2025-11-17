<?php 
function areaofRectangle($length,$width){
    $area= $length*$width;
    return $area;
}
$result= areaofRectangle(8,5);
echo "Area=$result";
?>