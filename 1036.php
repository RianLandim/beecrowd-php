<?php

$input = readline();
$lines = explode("\n", $input);

list($a, $b, $c) = array_map("floatval", explode(" ", trim(array_shift($lines))));

$delta = $b * $b - 4 * $a * $c;

if ($a != 0 && $delta > -1) {
  $R1 = (-$b + sqrt($delta)) / (2 * $a);
  $R2 = (-$b - sqrt($delta)) / (2 * $a);

  printf("R1 = %.5f\n", $R1);
  printf("R2 = %.5f\n", $R2);
} else {
  echo "Impossivel calcular\n";
}

?>