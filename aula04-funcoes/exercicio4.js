console.log("======================")
console.log("Crie uma função somar($a, $b) que retorna a soma.")

function somar(a, b) {
    return a + b;
}

let resultado1 = somar(1, 5);
let resultado2 = somar(1, 7);
let resultado3 = somar(1, 10);

console.log("O resultado da soma é: " + resultado1);
console.log("O resultado da soma é: " + resultado2);
console.log("O resultado da soma é: " + resultado3);

console.log("======================")
console.log("Crie uma função ehPar($numero) que retorna true se o número for par, false se for ímpar")

function ehPar(numero) {
    if (numero % 2 == 0 ) {
        return true;
    } else {
        return false;
    }
}

let resultado4 = ehPar(50);
let resultado5 = ehPar(30);
let resultado6 = ehPar(45);

console.log("É par? " + (resultado4 ? "Sim" : "Não"));
console.log("É par? " + (resultado5 ? "Sim" : "Não"));
console.log("É par? " + (resultado6 ? "Sim" : "Não"));

console.log("======================")
console.log("Crie uma função saudacaoPersonalizada($nome, $periodo) que recebe o nome e o período do dia (manhã, tarde, noite) e retorna uma frase como Bom dia, Lucas! (varie a frase conforme o período usando if/else dentro da função)")

function saudacaoPersonalizada(nome, periodo) {
    if (periodo === "Manhã") {
        return "Ola " + nome + "! Bom dia";
    } else if (periodo === "Tarde") {
        return "Ola " + nome + "! Boa Tarde";
    } else {
        return "Ola " + nome + "! Boa Noite";
    }
}

let resultado7 = saudacaoPersonalizada("Lucas", "Manhã");
let resultado8 = saudacaoPersonalizada("Lucas", "Tarde");
let resultado9 = saudacaoPersonalizada("Lucas", "Noite");

console.log(resultado7);
console.log(resultado8);
console.log(resultado9);

