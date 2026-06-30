<?php
//Ex 6 — Agrupador: Cria um array com 6 transações, cada uma com tipo (entrada ou saída) e valor. Percorre e calcula o total de entradas e o total de saídas separados. No final imprime o saldo.

echo "Ex 6 — Agrupador: Cria um array com 6 transações, cada uma com tipo (entrada ou saída) e valor. Percorre e calcula o total de entradas e o total de saídas separados. No final imprime o saldo: \n";

$transacoes = [
    ['tipo' => 'entrada', 'valor' => 500],
    ['tipo' => 'saida',   'valor' => 400],
    ['tipo' => 'entrada', 'valor' => 600],
    ['tipo' => 'saida',   'valor' => 600],
    ['tipo' => 'saida',   'valor' => 600],
    ['tipo' => 'entrada', 'valor' => 1600]
];

$totalEntradas = 0;
$totalSaidas = 0;

foreach ($transacoes as $transacao) {

    // $transacao é ['tipo' => 'entrada', 'valor' => 500]
    // $transacao['tipo'] é 'entrada'
    // $transacao['valor'] é 500

    if ($transacao['tipo'] == 'entrada') {
        $totalEntradas = $totalEntradas + $transacao['valor'];
    } else {
        $totalSaidas = $totalSaidas + $transacao['valor'];
    }
}

$saldo = $totalEntradas - $totalSaidas;

echo "Voce recebeu R$" . $totalEntradas . " e gastou R$" . $totalSaidas . "\n";
echo "Seu saldo após as entradas e saidas é de: " . $saldo . "\n";
