<?php
// Write a function addTax($price) that adds a global tax rate to a product price.
$taxRate = 15; // 15% tax

function addTax($price) {
    global $taxRate;
    $totalPrice = $price + ($price * $taxRate / 100);
    return $totalPrice;
}

$result = addTax(100);

echo "Total price with tax: $result<br>";
?>
