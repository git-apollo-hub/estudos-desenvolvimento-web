<?php
// Ex 3 — Soma total: Cria um array com 5 preços de produtos. Percorre, soma tudo e imprime o total no final.

$precos = [5.80, 6.48, 7.46, 2.99, 5.97];
$valorTotal = 0;

echo "Soma total: Cria um array com 5 preços de produtos. Percorre, soma tudo e imprime o total no final." . PHP_EOL;

foreach ($precos as $preco) {

    $valorTotal = $valorTotal + $preco;
}

echo 'O valor total é: ' . $valorTotal;
