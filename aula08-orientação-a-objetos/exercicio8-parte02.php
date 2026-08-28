<?php

/**
 * Aula 8 - Orientação a Objetos básica
 * Etapa 2: Array de objetos
 */

class Produto
{
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome, $preco, $quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function valorTotal()
    {
        return $this->preco * $this->quantidade;
    }

    public function descricao()
    {
        $total = number_format($this->valorTotal(), 2);
        return "{$this->quantidade}x {$this->nome} - Total: R$ {$total}";
    }
}

// ---------- LISTA DE PRODUTOS ----------

$produtos = [
    new Produto("Caneta", 5.00, 3),
    new Produto("Caderno", 18.50, 2),
    new Produto("Mochila", 129.90, 1),
];

// ---------- RELATÓRIO ----------

echo "===== CARRINHO DE COMPRAS =====\n\n";

foreach ($produtos as $produto) {
    echo $produto->descricao() . "\n";
}

// ---------- TOTAL GERAL (array_reduce) ----------

$totalGeral = array_reduce($produtos, function ($acumulador, $produto) {
    return $acumulador + $produto->valorTotal();
}, 0);

echo "\nTotal geral do carrinho: R$ " . number_format($totalGeral, 2) . "\n";