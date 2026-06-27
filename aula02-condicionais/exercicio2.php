<?php

$idade = 60;
$carteira = true;

if ($idade <= 11) {
    echo "Voce é uma criança!";
} 

elseif ($idade <= 17) {
    echo "Voce é um adolecente!";
} 

elseif ($idade <= 59) {

    if ($carteira) {
        echo "Voce é um adulto e pode dirigir!";
    } else {
    echo "Voce é um adulto!";
    }
} 

else {
        if ($carteira) {
        echo "Voce é um idoso e pode dirigir!";
    } else {
    echo "Voce é um idoso!";
    }
}