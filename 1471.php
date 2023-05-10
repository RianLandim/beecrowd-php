<?php

while ($input = fgets(STDIN)) {

    $line1 = explode(" ", $input);
    $n = (int) $line1[0]; // Número total de voluntários que mergulharam
    $r = (int) $line1[1]; // Número de voluntários que retornaram


    $line2 = explode(" ", fgets(STDIN));
    $returned = array();
    for ($i = 0; $i < $r; $i++) {
        $returned[(int) $line2[$i]] = true;
    }

    // Verificação dos voluntários que não retornaram
    $missing = array();
    for ($i = 1; $i <= $n; $i++) {
        if (!isset($returned[$i])) {
            $missing[] = $i;
        }
    }

    // Impressão dos identificadores dos voluntários que não retornaram
    if (empty($missing)) {
        echo "*\n";
    } else {
        echo implode(" ", $missing) . "\n";
    }
}

?>
