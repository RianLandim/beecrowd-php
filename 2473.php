<?php

$aposta = explode(' ', readline());
$sorteados = explode(' ', readline());

$acertos = 0;

foreach ($aposta as $numero) {
    if (in_array($numero, $sorteados)) {
        $acertos++;
    }
}

if ($acertos == 3) {
    echo "terno\n";
} elseif ($acertos == 4) {
    echo "quadra\n";
} elseif ($acertos == 5) {
    echo "quina\n";
} elseif ($acertos == 6) {
    echo "sena\n";
} else {
    echo "azar\n";
}

?>
