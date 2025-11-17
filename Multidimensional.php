<?php
$inventory=[
    "fruit"=>["Apple"=>50,"Banana"=>75],
    "Drinks"=>["Water"=>100,"juice"=>40]
];

foreach($inventory as $catogery =>$items){
    echo"<b>$catogery</b><br>";
    foreach($items as $item =>$qty){
        echo"$item=$qty<br>";
    }
}
echo"<br>";
?>