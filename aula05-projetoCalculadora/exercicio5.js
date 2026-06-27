const prompt = require('prompt-sync')();

// definição as funções

function somar(numero1, numero2) {
    return numero1 + numero2;
}

function subtrair(numero1, numero2) {
    return numero1 - numero2;
}

function multiplicar(numero1, numero2) {
    return numero1 * numero2;
}

function dividir(numero1, numero2) {
    if (numero2 == 0) {
        return "Erro: divisão por zero não é permitida.";
    }
    return numero1 / numero2;
}

// seleciona a operação desejada de acordo com a variavel recebida

function operacao(numero1, numero2, operacao) {
    if (operacao == "somar") {
        return somar(numero1, numero2);
    } else if (operacao == "subtrair") {
        return subtrair(numero1, numero2);
    } else if (operacao == "multiplicar") {
        return multiplicar(numero1, numero2);
    } else if (operacao == "dividir") {
        return dividir(numero1, numero2);
    } else {
        return "Selecione uma operação válida!";
    }
}

// valida se realmente é numero

function ehNumerico(resultado) {
    if (typeof resultado === "number") {
        return "O resultado é: " + resultado.toFixed(2);
    } else {
        return resultado;
    }
}

// Interação do usuario

const numero1 = parseFloat(prompt("Digite o primeiro número: "));
const numero2 = parseFloat(prompt("Digite o segundo número: "));
const operacaoEscolhida = prompt("Digite a operação (somar, subtrair, multiplicar, dividir): ");

console.log("Você digitou: " + numero1 + ", " + numero2 + ", " + operacaoEscolhida);

const chamaOperacao = operacao(numero1, numero2, operacaoEscolhida);
const resultado = ehNumerico(chamaOperacao);

console.log(resultado);