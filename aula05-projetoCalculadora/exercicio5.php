<?php

//decisão da operação

function operacao($numero1, $numero2, $operacao) {
    
    if ($operacao == "somar") {
        return somar($numero1, $numero2);
}   elseif ($operacao == "subtrair") {
        return subtrair($numero1, $numero2);
}   elseif ($operacao == "multiplicar") {
        return multiplicar($numero1, $numero2);
}   elseif ($operacao == "dividir") {
        return dividir($numero1, $numero2);
}   else {
    echo "selecione uma operação valida!";
}
}

// operações:
//soma
function somar($numero1, $numero2) {
    return $numero1 + $numero2;
}

//subtração
function subtrair($numero1, $numero2) {
    return $numero1 - $numero2;
}

//multiplicação
function multiplicar($numero1, $numero2) {
    return $numero1 * $numero2;
}

//divisão
function dividir($numero1, $numero2) {
    if ($numero2 == 0) {
        return "Erro: divisão por zero não é permitida.";
    }
    return $numero1 / $numero2;
}

//valida se é numero mesmo

function ehNumerico($resultado) {
    if (is_numeric($resultado)) {
    return "O resultado é: " . number_format($resultado, 2, ',', '.'); 
    } else {
       return $resultado;
}
}

// Interação com usuario:

$numero1 = (int) readline("Digite o primeiro número: ");   // converte pra inteiro
$numero2 = (int) readline("Digite o primeiro número: ");   // converte pra inteiro
$operacao = readline("Digite a operação (somar, subtrair, multiplicar, dividir): ");

echo "Você digitou: $numero1, $numero2, $operacao" . PHP_EOL;

$chamaOperacao = operacao($numero1, $numero2, $operacao);

$resultado = ehNumerico($chamaOperacao);

echo $resultado . PHP_EOL;