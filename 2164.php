<?php
$n = (int)(fgets(STDIN));

$phi = (1 + sqrt(5)) / 2;
$fibonacci = (pow($phi, $n) - pow(1 - $phi, $n)) / sqrt(5);

echo number_format($fibonacci, 1, '.', '') . "\n";

?>
