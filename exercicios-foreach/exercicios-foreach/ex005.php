<?php
// Ex 5 — Média de notas: Cria um array com alunos, cada um com nome e nota. Percorre, calcula a média geral e imprime quem está acima e abaixo da média

echo "Média de notas: Cria um array com alunos, cada um com nome e nota. Percorre, calcula a média geral e imprime quem está acima e abaixo da média:" . "\n";

$alunos = [
    'Lucas' => 8.6,
    'Sara' => 9.5,
    'Heloisa' => 7.5,
    'Cecilia' => 7.5,
    'Julia' => 7.5
];

// Primeiro foreach — só soma as notas e armazena:
$somaNotas = 0;
foreach ($alunos as $nome => $nota) {
    $somaNotas = $somaNotas + $nota;
}

// Calcula a média real e imprime na tela se estiver acima ou abaixo:
$mediaTurma = $somaNotas / count($alunos);

// Segundo foreach — agora sim compara com a média real
foreach ($alunos as $nome => $nota) {
    if ($nota >= $mediaTurma) {
        echo $nome . " (" . $nota . ") — Acima da média\n";
    } else {
        echo $nome . " (" . $nota . ") — Abaixo da média\n";
    }
}

echo "Média da turma: " . $mediaTurma . "\n";
