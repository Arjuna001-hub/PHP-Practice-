<?php 
define('TAX_RATE',0.18);
$price=100;
$total=$price +($price*TAX_RATE);
echo"price:$price";
echo 'total with tax:$total';
?>
