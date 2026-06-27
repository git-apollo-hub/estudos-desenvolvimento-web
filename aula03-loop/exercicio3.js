// Use um for para imprimir os números de 1 a 10.

console.log("======================")
console.log("Sequencia de 1 a 10.")

for (let index = 1; index <= 10; index++) {
    console.log(index);    
}

console.log("======================")
console.log("Use um for para imprimir só os números pares de 1 a 20.")

for (let index = 1; index <= 20; index++) {
    if (index % 2 == 0) {
        console.log(index)
    }
}

console.log("======================")
console.log("Crie um array com 5 nomes de sua escolha e use foreach (PHP) e for...of (JS) para imprimir cada nome.")

let nomes = ["Lucas", "Sara", "Heloisa", "Cecilia", "Julia"];

nomes.forEach(function(nome) {
   console.log(nome);
});

console.log("======================")
console.log("Use while para simular uma contagem regressiva de 10 até 1, e ao final imprima 'Decolar'! 🚀")

let contador = 10;

while (contador >= 1) {
    console.log(contador);
    contador--;
}
console.log("Decolar! 🚀")