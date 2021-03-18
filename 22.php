<?php
$k = floatval($_POST['k']);
$t = floatval($_POST['t']);

$w = ($t * $t + 3 * $k * cos($t - 2)) / (2 + sqrt(1 + $k * $t)) - abs($k - $t);
$s = log($k - 4 * $t) + exp(2 * $k) - $t;

echo "w = $w\n";
echo "s = $s";
?>