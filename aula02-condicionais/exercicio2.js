let idade = 61;
let carteira = false;

if (idade <= 11) {
    console.log("Voce é uma criança");
}

else if (idade <= 17) {
    console.log("Voce é um adolecente");
}

else if (idade <= 59) {
    if (carteira) {
        console.log("Voce é um adulto e pode dirigir");
    } else {
        console.log("Voce é um adulto!");
    }
}

else {
    if (carteira) {
        console.log("Voce é um idoso e pode dirigir");
    } else {
        console.log("Voce é um idoso!");
    }
}


