# Aula 04 - Funções

## 🎯 Objetivo

Aprender a criar funções para reutilizar código, receber parâmetros e retornar valores.

---

## 📖 Teoria

Uma função é um bloco de código reutilizável que você "empacota" com um nome e pode executar quantas vezes quiser.

Em vez de copiar e colar o mesmo código várias vezes, você cria uma função e a chama quando precisar.

### Analogia

Imagine uma receita de bolo.

Você escreve a receita uma única vez e, sempre que quiser fazer um bolo, basta seguir a receita novamente.

No código é a mesma ideia:

* A receita = função
* Fazer o bolo = chamar a função

---

## Estrutura Básica

### PHP

```php
<?php

function saudacao($nome) {
    echo "Olá, " . $nome . "!" . PHP_EOL;
}

saudacao("Lucas");
saudacao("Sara");
```

### JavaScript

```javascript
function saudacao(nome) {
    console.log("Olá, " + nome + "!");
}

saudacao("Lucas");
saudacao("Sara");
```

---

## 🔍 Comparação PHP x JavaScript

| Conceito     | PHP                 | JavaScript          |
| ------------ | ------------------- | ------------------- |
| Criar função | `function nome()`   | `function nome()`   |
| Parâmetro    | `$nome`             | `nome`              |
| Chamada      | `saudacao("Lucas")` | `saudacao("Lucas")` |
| Retorno      | `return`            | `return`            |

A principal diferença é que no PHP os parâmetros utilizam `$` e no JavaScript não.

---

# 🔁 Funções que Retornam Valores

Até agora você utilizou bastante `echo` e `console.log`.

Mas normalmente uma função não exibe o resultado diretamente.

Ela calcula algo e devolve esse resultado usando `return`.

---

## PHP

```php
<?php

function somar($a, $b) {
    return $a + $b;
}

$resultado = somar(5, 3);

echo "O resultado é: " . $resultado;
```

---

## JavaScript

```javascript
function somar(a, b) {
    return a + b;
}

let resultado = somar(5, 3);

console.log("O resultado é: " + resultado);
```

---

## ⚠️ Diferença entre echo e return

### echo / console.log

Exibe um valor na tela.

```php
function somar($a, $b) {
    echo $a + $b;
}
```

Nesse caso o valor é mostrado, mas não pode ser reutilizado facilmente.

---

### return

Devolve o valor para quem chamou a função.

```php
function somar($a, $b) {
    return $a + $b;
}

$resultado = somar(5, 3);
```

Agora você pode:

* Guardar em variável
* Fazer cálculos
* Comparar resultados
* Utilizar em outras funções

Essa será a base da nossa futura Calculadora.

---

# ⚡ Arrow Functions (JavaScript)

O JavaScript moderno possui uma sintaxe mais compacta para criar funções.

Ela é chamada de Arrow Function.

```javascript
const somar = (a, b) => {
    return a + b;
};

console.log(somar(5, 3));
```

Ela faz exatamente a mesma coisa que uma função tradicional.

Por enquanto você pode continuar usando a sintaxe tradicional.

Voltaremos às Arrow Functions mais adiante.

---

## 🏋️ Exercício Prático

Crie os arquivos:

* `exercicio4.php`
* `exercicio4.js`

---

### Parte 1

Crie uma função:

```php
somar(a, b)
```

Ela deve retornar a soma dos dois números.

Exemplo:

```text
somar(5, 3)

Resultado: 8
```

---

### Parte 2

Crie uma função:

```php
ehPar(numero)
```

Ela deve retornar:

```text
true
```

quando o número for par.

E:

```text
false
```

quando for ímpar.

Dica:

Você já conhece o operador `%`.

Exemplo:

```php
10 % 2 == 0
```

---

### Parte 3

Crie uma função:

```php
saudacaoPersonalizada(nome, periodo)
```

Receba:

* Nome
* Período do dia

O período pode ser:

* manhã
* tarde
* noite

Retorne mensagens como:

```text
Bom dia, Lucas!
Boa tarde, Lucas!
Boa noite, Lucas!
```

Utilize `if`, `elseif` e `else` dentro da função.

---

## 🚀 Desafio Extra

Chame todas as funções utilizando pelo menos dois valores diferentes.

Exemplos:

```text
somar(10, 5)
somar(20, 7)

ehPar(10)
ehPar(11)

saudacaoPersonalizada("Lucas", "manhã")
saudacaoPersonalizada("Sara", "noite")
```

Imprima os resultados utilizando:

* `echo` no PHP
* `console.log()` no JavaScript

Lembre-se:

A impressão deve acontecer fora da função.

As funções devem apenas retornar os valores.

---

## 💡 Dica de Programador

Uma boa função deve possuir uma única responsabilidade.

Exemplos:

✅ Somar números
✅ Verificar se um número é par
✅ Gerar uma saudação

Evite criar funções gigantes que fazem muitas coisas ao mesmo tempo.

Funções pequenas são mais fáceis de entender, testar e reutilizar.

---

## ✅ O que você aprendeu

* Criar funções
* Receber parâmetros
* Retornar valores com `return`
* Diferença entre `echo` e `return`
* Reutilização de código
* Organização de lógica em funções
* Introdução às Arrow Functions no JavaScript
