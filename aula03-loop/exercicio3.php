<?php 

// Use um for para imprimir os números de 1 a 10.
echo "======================" . PHP_EOL;

echo "Sequencia de 1 a 10. " . PHP_EOL;

for ($sequencia = 1; $sequencia <= 10 ; $sequencia++) { 
    echo $sequencia . PHP_EOL; 
}

echo "======================" . PHP_EOL;

echo "Use um for para imprimir só os números pares de 1 a 20." . PHP_EOL;

for ($i=0; $i <= 20; $i++) { 
    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }
}

echo "======================" . PHP_EOL;

echo "Crie um array com 5 nomes de sua escolha e use foreach (PHP) e for...of (JS) para imprimir cada nome." . PHP_EOL;

$nomes = ["Lucas", "Sara", "Heloisa", "Cecilia", "Julia"];
$contador = 1;

foreach ($nomes as $nome) {
    echo $contador++ . "º nome: " . $nome . PHP_EOL; 
}

echo "======================" . PHP_EOL;

echo "Use while para simular uma contagem regressiva de 10 até 1, e ao final imprima 'Decolar'! 🚀" . PHP_EOL;

$contador = 10;

while ($contador >= 1) {
    echo $contador . PHP_EOL;
    $contador--;
}
echo "Decolar! 🚀";


?>