<?php
// Ex 4 — Estoque: Cria um array associativo com 4 produtos, cada um com nome e quantidade. Percorre e imprime só os produtos com quantidade menor que 10 como alerta

$produtos = [
    'cerrote' => 8,
    'prego' => 10,
    'martelo' => 5,
    'madeira' => 1
];

$contador = 1;

echo "Esses são os produtos com estoque abaixo de 10 unidade:" . PHP_EOL;

foreach ($produtos as $nome => $quantidade) {
    if ($quantidade < 10) {
        // echo "Esses produtos estão com estoque baixo: " . "\n";
        echo $contador . "º Produto: " . $nome . " = " . $quantidade . "\n";
        $contador = $contador + 1;
    }
}
