# Aula 02 - Condicionais (if / else / elseif)

## 🎯 Objetivo

Aprender a tomar decisões dentro do código utilizando estruturas condicionais.

---

## 📖 Teoria

Condicional é uma "bifurcação de caminho" no código:

> Se isso for verdade, faça X.
> Senão, faça Y.

Analogia:

Imagine um guarda de trânsito.

* Se o sinal estiver verde, os carros passam.
* Senão, eles param.

Não existe meio-termo: a condição é verdadeira ou falsa.

---

## Exemplo em PHP

```php
<?php

$idade = 17;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
```

---

## Exemplo em JavaScript

```javascript
let idade = 17;

if (idade >= 18) {
    console.log("Você é maior de idade.");
} else {
    console.log("Você é menor de idade.");
}
```

---

## 🔍 Operadores de Comparação

| Operador | PHP | JavaScript | Significado          |
| -------- | --- | ---------- | -------------------- |
| ==       | ==  | ==         | Compara apenas valor |
| ===      | === | ===        | Compara valor e tipo |
| !=       | !=  | !=         | Diferente            |
| >        | >   | >          | Maior                |
| <        | <   | <          | Menor                |
| >=       | >=  | >=         | Maior ou igual       |
| <=       | <=  | <=         | Menor ou igual       |
| &&       | &&  | &&         | E (AND)              |
| ||       | ||  | ||         | Ou (OR)              |

---

## ⚠️ Dica Importante

Sempre prefira utilizar:

```php
===
```

em vez de:

```php
==
```

Exemplo:

```php
"5" == 5;   // true
"5" === 5;  // false
```

O operador `===` evita bugs silenciosos causados por conversão automática de tipos.

---

## Encadeando Condições

### PHP

```php
<?php

$nota = 75;

if ($nota >= 90) {
    echo "Conceito A";
} elseif ($nota >= 70) {
    echo "Conceito B";
} elseif ($nota >= 50) {
    echo "Conceito C";
} else {
    echo "Reprovado";
}
```

No JavaScript a estrutura é praticamente idêntica, trocando apenas `echo` por `console.log()`.

---

## 🏋️ Exercício Prático

Crie os arquivos:

* `exercicio2.php`
* `exercicio2.js`

### Requisitos

Crie uma variável idade e classifique a pessoa como:

| Classificação | Condição                     |
| ------------- | ---------------------------- |
| Criança       | idade menor que 12           |
| Adolescente   | idade entre 12 e 17          |
| Adulto        | idade entre 18 e 59          |
| Idoso         | idade igual ou superior a 60 |

Imprima a classificação encontrada.

---

## 🚀 Desafio Extra

Crie uma segunda variável:

```php
$temCNH = true;
```

ou

```javascript
let temCNH = true;
```

Se a pessoa for adulta **e** possuir CNH, imprima:

```text
Pode dirigir.
```

Utilize o operador lógico:

```php
&&
```

---

## 💡 Dica de Programador

Teste o programa com pelo menos dois valores diferentes de idade.

Não valide apenas o cenário principal. Bons desenvolvedores sempre testam múltiplos cenários para garantir que a lógica está correta.

---

## ✅ O que você aprendeu

* if
* else
* elseif
* Operadores relacionais
* Operadores lógicos
* Tomada de decisão no código
