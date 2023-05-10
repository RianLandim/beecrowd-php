<?php

$input = file_get_contents('php://stdin');
$lines = explode("\n", trim($input));

while (count($lines) > 0) {
    list($Q, $D, $P) = array_map('intval', explode(' ', array_shift($lines)));

    if (!$D) {
        break;
    }

    $L = floor(($Q * $D * $P) / ($P - $Q));

    echo $L . ' pagina' . ($L > 1 ? 's' : '') . PHP_EOL;
}
?>