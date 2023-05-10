<?php

class Camiseta {
    public $nome;
    public $cor;
    public $tamanho;

    function __construct($n, $c, $t) {
        $this->nome = $n;
        $this->cor = $c;
        $this->tamanho = $t;
    }
}

function comp($a, $b) {
    if ($a->cor == $b->cor) {
        if ($a->tamanho == $b->tamanho) {
            if ($a->nome < $b->nome) {
                return -1;
            } elseif ($a->nome > $b->nome) {
                return 1;
            } else {
                return 0;
            }
        } elseif ($a->tamanho > $b->tamanho) {
            return -1;
        } else {
            return 1;
        }
    } elseif ($a->cor < $b->cor) {
        return -1;
    } else {
        return 1;
    }
}

function particao(&$V, $inicio, $fim) {
    $pivo = $V[$fim - 1];
    $i = $inicio;
    for ($j = $inicio; $j < $fim; ++$j) {
        if (comp($V[$j], $pivo) < 0) {
            [$V[$j], $V[$i]] = [$V[$i], $V[$j]];
            ++$i;
        }
    }

    if (comp($pivo, $V[$i]) < 0) {
        [$V[$fim - 1], $V[$i]] = [$V[$i], $V[$fim - 1]];
    }

    return $i;
}

function quickSort(&$V, $inicio, $fim) {
    if ($fim > $inicio) {
        $posicaoPivo = particao($V, $inicio, $fim);
        quickSort($V, $inicio, $posicaoPivo);
        quickSort($V, $posicaoPivo + 1, $fim);
    }
}

$first = true;
while (true) {
    try {
        $N = (int) fgets(STDIN);

        if ($N == 0) {
            break;
        }

        if ($first) {
            $first = false;
        } else {
            echo "\n";
        }

        $camisetas = [];
        for ($i = 0; $i < $N; ++$i) {
            $nome = rtrim(fgets(STDIN));
            [$cor, $tamanho] = explode(" ", rtrim(fgets(STDIN)));

            $camisetas[] = new Camiseta($nome, $cor, $tamanho);
        }

        quickSort($camisetas, 0, count($camisetas));

        foreach ($camisetas as $camiseta) {
            echo "{$camiseta->cor} {$camiseta->tamanho} {$camiseta->nome}\n";
        }
    } catch (Exception $e) {
        break;
    }
}

?>