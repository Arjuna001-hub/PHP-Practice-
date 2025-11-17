<?php 
echo "<table border='1' cellpadding='5'>";
for($row =1;$row=5; $row++){
    echo "<tr>";
    for($col=1;$col<=5;$col++){
        $product = $row  * $col;
        echo "<td>$product</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>