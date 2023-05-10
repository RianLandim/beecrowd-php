<?php
$input = fgets(STDIN);
$lines = explode("\n", $input);

$n = (int)array_shift($lines);

$frequencias = array_fill(0, 2001, 0);

for ($i = 0; $i < $n; ++$i) {
  $x = (int)array_shift($lines);

  ++$frequencias[$x];
}

for ($i = 1; $i < 2001; ++$i) {
  if ($frequencias[$i] > 0) echo "$i aparece {$frequencias[$i]} vez(es)\n";
}

?>