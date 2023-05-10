<?php

while (($entrada = fgets(STDIN))) {

  $valores = explode(" ", $entrada);
  $n = (int)$valores[0];
  $m = (int)$valores[1];


  $soma = 0;
  for ($i = 0; $i < $n; $i++) {
    $digito = $m % 10;
    $soma += $digito;
    $m = (int)($m / 10);
  }


  $divisivel = ($soma % 3 == 0) ? "sim" : "nao";


  echo "$soma $divisivel\n";
}

?>
