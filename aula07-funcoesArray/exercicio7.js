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

let listaProdutos = produtos.map(function(produto) {
    return produto.nome;
})

console.log(listaProdutos);

console.log("============================================");

let quantidadeSupCinco = produtos.filter(function(produto) {
    return produto.quantidade > 5;
})

console.log(quantidadeSupCinco);

console.log("============================================");

let somaTotal = produtos.reduce(function(acumulador, produto) {
    return acumulador + (produto.preco * produto.quantidade);
}, 0);

console.log("Soma total: R$ " + somaTotal.toFixed(2));