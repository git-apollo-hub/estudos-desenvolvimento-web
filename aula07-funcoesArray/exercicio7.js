// Crie um array associativo (PHP) / objeto (JS) representando um produto, com as chaves: nome, preco, quantidade.

let unicoProduto = {
    nome: "Caderno",
    preco: 15.90,
    quantidade: 3
}

// Imprima uma frase tipo: "Produto: Caderno, Preço: 15.90, Quantidade: 3".

console.log("Produto: " + unicoProduto.nome + ", Preço: R$" + unicoProduto.preco.toFixed(2) + ", Quantidade: " + unicoProduto.quantidade);

console.log("===");

// Crie um array de produtos (lista de 3 produtos, cada um com nome, preco, quantidade, igual o exemplo dos alunos acima).

let produtos = [
    {
        nome: "Caderno",
        preco: 15.90,
        quantidade: 3
    },
    {
        nome: "Lapis",
        preco: 5.90,
        quantidade: 10
    },
    {
        nome: "Borracha",
        preco: 2.90,
        quantidade: 7
    }
]

// Percorra essa lista com foreach/forEach e, para cada produto, calcule e imprima o valor total (preco * quantidade). Exemplo: "Caderno: 3 unidades x R$ 15.90 = R$ 47.70".

let somaTotal = 0



produtos.forEach(function(produto) {

    let valorTotal = produto.preco * produto.quantidade;

    console.log("Produto: " + produto.nome);
    console.log("Preço R$: " + produto.preco.toFixed(2));
    console.log("Quantidade: " + produto.quantidade);
    console.log(produto.nome + " : " + produto.quantidade + " unidades X R$ " + produto.preco.toFixed(2) + " = " + valorTotal.toFixed(2))
    console.log("===")

    somaTotal = somaTotal + valorTotal;
})

// Desafio extra: depois de percorrer todos os produtos, calcule e imprima a soma do valor total de todos os produtos juntos (você vai precisar de uma variável "acumuladora" fora do loop, que soma a cada repetição — isso é uma técnica clássica de loop que ainda não tínhamos praticado isoladamente).

console.log("Valor total de todos os produtos: R$ " + somaTotal.toFixed(2));