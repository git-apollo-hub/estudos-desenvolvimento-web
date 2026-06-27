# Aula 01 - Variáveis, Tipos e Saída de Dados

## 🎯 Objetivo

Aprender o conceito de variáveis, os principais tipos de dados em PHP e JavaScript, e como exibir informações na tela.

---

## 📖 Teoria

Uma variável é uma caixinha com nome que guarda um valor.

Pense em uma gaveta etiquetada:

* A etiqueta é o nome da variável.
* O conteúdo é o valor armazenado.

---

## Exemplo em PHP

```php
<?php

$nome = "Maria";       // string (texto)
$idade = 25;           // int (número inteiro)
$altura = 1.65;        // float (número decimal)
$ativo = true;         // bool (verdadeiro/falso)

echo "Nome: " . $nome . ", Idade: " . $idade;
```

---

## Exemplo em JavaScript

```javascript
let nome = "Maria";     // string
let idade = 25;         // number
let altura = 1.65;      // number (JS não separa int/float)
let ativo = true;       // boolean

console.log("Nome: " + nome + ", Idade: " + idade);
```

---

## 🔍 Comparação Importante

| Conceito     | PHP                     | JavaScript              |
| ------------ | ----------------------- | ----------------------- |
| Variáveis    | Usa `$` antes do nome   | Não usa `$`             |
| Declaração   | Apenas nome da variável | `let`, `const` ou `var` |
| Concatenação | `.` (ponto)             | `+`                     |
| Inteiros     | `int`                   | `number`                |
| Decimais     | `float`                 | `number`                |
| Booleanos    | `bool`                  | `boolean`               |

---

## 🏋️ Exercício Prático

Crie os arquivos:

* `exercicio1.php`
* `exercicio1.js`

### Requisitos

1. Crie uma variável para seu nome.
2. Crie uma variável para sua idade.
3. Crie uma variável informando se você gosta de programar (`true` ou `false`).
4. Imprima uma frase contendo as três informações.

### Exemplo esperado

```text
Meu nome é João, tenho 30 anos e gosto de programar: true
```

---

## 🚀 Desafio Extra

Crie uma variável para armazenar o ano de nascimento.

Dica:

```text
Ano atual - idade
```

Imprima também o resultado.

---

## ✅ O que você aprendeu

* Criar variáveis
* Trabalhar com tipos básicos
* Exibir informações na tela
* Concatenar textos e variáveis
* Diferenças básicas entre PHP e JavaScript
