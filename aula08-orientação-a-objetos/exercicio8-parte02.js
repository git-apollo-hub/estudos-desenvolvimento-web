/**
 * Aula 8 - Orientação a Objetos básica
 * Etapa 2: Array de objetos
 */

class Produto {
  constructor(nome, preco, quantidade) {
    this.nome = nome;
    this.preco = preco;
    this.quantidade = quantidade;
  }

  valorTotal() {
    return this.preco * this.quantidade;
  }

  descricao() {
    const total = this.valorTotal().toFixed(2);
    return `${this.quantidade}x ${this.nome} - Total: R$ ${total}`;
  }
}

// ---------- LISTA DE PRODUTOS ----------

const produtos = [
  new Produto("Caneta", 5.0, 3),
  new Produto("Caderno", 18.5, 2),
  new Produto("Mochila", 129.9, 1),
];

// ---------- RELATÓRIO ----------

console.log("===== CARRINHO DE COMPRAS =====\n");

produtos.forEach((produto) => {
  console.log(produto.descricao());
});

// ---------- TOTAL GERAL (reduce) ----------

const totalGeral = produtos.reduce((acumulador, produto) => acumulador + produto.valorTotal(), 0);

console.log(`\nTotal geral do carrinho: R$ ${totalGeral.toFixed(2)}`);