# Aula 03 - Loops (for, while e foreach)

## 🎯 Objetivo

Aprender a repetir tarefas utilizando estruturas de repetição.

---

## 📖 Teoria

Um loop permite executar a mesma ação várias vezes sem precisar copiar e colar código.

Analogia:

Em vez de escrever:

```text
Bata na porta
Bata na porta
Bata na porta
Bata na porta
Bata na porta
```

Você escreve:

```text
Bata na porta 5 vezes
```

E o loop faz o trabalho por você.

---

# 🔁 Loop For

Utilizado quando você sabe quantas vezes deseja repetir uma ação.

## PHP

```php
<?php

for ($i = 1; $i <= 5; $i++) {
    echo "Contagem: $i" . PHP_EOL;
}
```

## JavaScript

```javascript
for (let i = 1; i <= 5; i++) {
    console.log("Contagem: " + i);
}
```

### Estrutura do For

```php
for (início; condição; incremento)
```

Exemplo:

```php
for ($i = 1; $i <= 5; $i++)
```

* `$i = 1` → executa apenas uma vez no início
* `$i <= 5` → condição para continuar repetindo
* `$i++` → incrementa 1 a cada repetição

---

# 🔁 Loop While

Utilizado quando você não sabe exatamente quantas vezes irá repetir uma ação.

## PHP

```php
<?php

$saldo = 100;

while ($saldo > 0) {
    echo "Saldo atual: $saldo" . PHP_EOL;
    $saldo -= 30;
}
```

## JavaScript

```javascript
let saldo = 100;

while (saldo > 0) {
    console.log("Saldo atual: " + saldo);
    saldo -= 30;
}
```

### ⚠️ Atenção

Se você esquecer de alterar a variável que controla a condição, o programa entrará em um:

```text
Loop infinito
```

Por isso, sempre verifique se a condição ficará falsa em algum momento.

---

# 🔁 Foreach

Ideal para percorrer arrays.

## PHP

```php
<?php

$frutas = ["maçã", "banana", "uva"];

foreach ($frutas as $fruta) {
    echo $fruta . PHP_EOL;
}
```

## JavaScript

```javascript
let frutas = ["maçã", "banana", "uva"];

for (let fruta of frutas) {
    console.log(fruta);
}
```

Também é comum utilizar:

```javascript
frutas.forEach(function(fruta) {
    console.log(fruta);
});
```

---

## 🏋️ Exercício Prático

Crie os arquivos:

* `exercicio3.php`
* `exercicio3.js`

### Parte 1

Utilize um `for` para imprimir os números de:

```text
1 até 10
```

---

### Parte 2

Utilize um `for` para imprimir apenas os números pares de:

```text
1 até 20
```

Dica:

Utilize o operador de resto da divisão:

```php
%
```

Exemplo:

```php
10 % 2 == 0
```

Se o resto da divisão por 2 for zero, o número é par.

---

### Parte 3

Crie um array com 5 nomes.

Utilize:

* `foreach` no PHP
* `for...of` no JavaScript

Imprima cada nome individualmente.

---

## 🚀 Desafio Extra

Utilize um `while` para fazer uma contagem regressiva:

```text
10
9
8
7
6
5
4
3
2
1
```

Ao final imprima:

```text
🚀 Decolar!
```

---

## ✅ O que você aprendeu

* Loop for
* Loop while
* Loop foreach
* Arrays
* Operador %
* Repetição de tarefas
* Percorrer listas de dados
