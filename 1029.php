<?php

$F = array_fill(0, 40, -1);
$CF = array_fill(0, 40, -1);

$F[0] = 0;
$F[1] = 1;

$CF[0] = 1;
$CF[1] = 1;

function calcula($n) {
    global $F, $CF;

    if ($F[$n] == -1) {
        list($result1, $num_calls1) = calcula($n - 1);
        list($result2, $num_calls2) = calcula($n - 2);
        $F[$n] = $result1 + $result2;
        $CF[$n] = $num_calls1 + $num_calls2 + 1;
    }

    return array($F[$n], $CF[$n]);
}

$N = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $N; ++$i) {
    $X = intval(trim(fgets(STDIN)));
    list($result, $num_calls) = calcula($X);
    echo "fib($X) = " . ($num_calls - 1) . " calls = $result\n";
}

?>