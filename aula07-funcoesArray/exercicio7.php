<?php 

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

echo "Use array_map para criar uma nova lista contendo só os nomes dos produtos (ex: ['Caderno', 'Lapis', 'Borracha'])." . PHP_EOL;

$listaProdutos = array_map(function($produto) {
    return $produto['nome'];
}, $produtos);

print_r($listaProdutos);

echo "Use array_filter para criar uma lista só com os produtos que tenham quantidade maior que 5." . PHP_EOL;

$quantidadeSupCinco = array_filter($produtos, function($produto) {
    return $produto['quantidade'] > 5;
});

print_r($quantidadeSupCinco);

echo "Use array_reduce para calcular a soma total dos valores (preco * quantidade) de todos os produtos — e compare se o resultado é igual ao que você já tinha calculado manualmente com foreach/forEach no exercício anterior." . PHP_EOL;

$somaTotal = array_reduce($produtos, function($acumulador, $produto) {
    return $acumulador + ($produto['preco'] * $produto['quantidade']);
}, 0);

echo "Soma total: R$ " . number_format($somaTotal, 2, ',', '.') . PHP_EOL;

?>