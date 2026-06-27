<?php 
// Crie um array associativo (PHP) / objeto (JS) representando um produto, com as chaves: nome, preco, quantidade.

$unicoProduto = [
    "nome" => "Caderno",
    "preco" => 15.90,
    "quantidade" => 3
];

// Imprima uma frase tipo: "Produto: Caderno, Preço: 15.90, Quantidade: 3".

echo "Produto: {$unicoProduto['nome']}, Preço: R$" . number_format($unicoProduto['preco'], 2, ',', '.') . ", Quantidade: {$unicoProduto['quantidade']}." . PHP_EOL;

echo "---" . PHP_EOL;

// Crie um array de produtos (lista de 3 produtos, cada um com nome, preco, quantidade, igual o exemplo dos alunos acima).

$produtos = [
    [
    "nome" => "Caderno",
    "preco" => 15.90,
    "quantidade" => 3
],
    [
    "nome" => "Lapis",
    "preco" => 5.90,
    "quantidade" => 10
],
    [
    "nome" => "Borracha",
    "preco" => 2.90,
    "quantidade" => 7
]
];

// Percorra essa lista com foreach/forEach e, para cada produto, calcule e imprima o valor total (preco * quantidade). Exemplo: "Caderno: 3 unidades x R$ 15.90 = R$ 47.70".

$somaTotal = 0;

foreach ($produtos as $produto) {

    $valorTotal = $produto['preco'] * $produto['quantidade'];

    echo "Nome: " . $produto['nome'] . PHP_EOL;
    echo "Preço: R$ " . number_format($produto['preco'], 2, ',', '.') . PHP_EOL;
    echo "Quantidade: " . $produto['quantidade'] . PHP_EOL;
    echo $produto['nome'] . ": " . $produto['quantidade'] . " unidades x R$ " . number_format($produto['preco'], 2, ',', '.') . " = R$ " . number_format($valorTotal, 2, ',', '.') . PHP_EOL;

    echo "---" . PHP_EOL;

    $somaTotal += $valorTotal;
    
}

// Desafio extra: depois de percorrer todos os produtos, calcule e imprima a soma do valor total de todos os produtos juntos (você vai precisar de uma variável "acumuladora" fora do loop, que soma a cada repetição — isso é uma técnica clássica de loop que ainda não tínhamos praticado isoladamente).

echo "Valor total de todos os produtos: R$ " . number_format($somaTotal, 2, ',', '.') . PHP_EOL;

?>