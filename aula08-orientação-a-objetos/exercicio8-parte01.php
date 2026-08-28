<?php
/**
 * Aula 8 - Orientação a Objetos básica
 * Exercício: classe Produto
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

// ---------- USO ----------

$produto1 = new Produto("Caneta", 5.00, 3);

echo $produto1->descricao() . "\n";
echo "Valor total (bruto): " . $produto1->valorTotal() . "\n";