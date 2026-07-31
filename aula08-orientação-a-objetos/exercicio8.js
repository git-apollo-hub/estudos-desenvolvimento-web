/**
 * Aula 8 - Orientação a Objetos básica
 * Exercício: classe Produto
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

// ---------- USO ----------

const produto1 = new Produto("Caneta", 5.0, 3);

console.log(produto1.descricao());
console.log("Valor total (bruto):", produto1.valorTotal());