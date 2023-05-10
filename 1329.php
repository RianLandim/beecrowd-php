<?php
    $input = fgets(STDIN);
    $lines = explode("\n", $input);

    while(count($lines)) {
    $N = (int)array_shift($lines);

    if (!$N) break;

    $maria = array_reduce(array_map("intval", explode(" ", trim(array_shift($lines)))), function($acc, $curr) {
        return (!$curr ? $acc + 1 : $acc);
    }, 0);

    $joao = $N - $maria;

    echo "Mary won $maria times and John won $joao times\n";
    }
?>