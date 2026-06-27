<?php 

echo "=======================" . PHP_EOL;

// Crie uma função somar($a, $b) que retorna a soma.

function somar($valorA, $valorB) {
    return $valorA + $valorB;
}

$resultado1 = somar(1, 4);
$resultado2 = somar(1, 2);
$resultado3 = somar(1, 3);

echo "A soma é: " . $resultado1 . PHP_EOL;
echo "A soma é: " . $resultado2 . PHP_EOL;
echo "A soma é: " . $resultado3 . PHP_EOL;

echo "=======================" . PHP_EOL;

// Crie uma função ehPar($numero) que retorna true se o número for par, false se for ímpar (dica: você já sabe usar %).

function ehPar($numero) {
    if ($numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

$resultado1 = ehPar(51);
$resultado2 = ehPar(2);
$resultado3 = ehPar(9);

echo "É par? " . ($resultado1 ? "Sim" : "Não") . PHP_EOL;
echo "É par? " . ($resultado2 ? "Sim" : "Não") . PHP_EOL;
echo "É par? " . ($resultado3 ? "Sim" : "Não") . PHP_EOL;

echo "=======================" . PHP_EOL;

// Crie uma função saudacaoPersonalizada($nome, $periodo) que recebe o nome e o período do dia ("manhã", "tarde", "noite") e retorna uma frase como "Bom dia, Lucas!" (varie a frase conforme o período usando if/else dentro da função).

function saudacaoPersonalizada($nome, $periodo) {
    if ($periodo === "Manhã") {
        return "Ola $nome! Bom dia" . PHP_EOL;
    } elseif ($periodo === "Tarde") {
        return "Ola $nome! Boa Tarde" . PHP_EOL;
    } else {
        return "Ola $nome! Boa Noite" . PHP_EOL;
    }
}

$resultado1 = saudacaoPersonalizada("Lucas", "Manhã");
$resultado2 = saudacaoPersonalizada("Sara", "Tarde");
$resultado3 = saudacaoPersonalizada("Heloisa", "Noite");

echo $resultado1;
echo $resultado2;
echo $resultado3;

?>