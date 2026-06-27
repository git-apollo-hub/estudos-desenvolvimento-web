# Aula 05 - Projeto: Calculadora Simples

## 🎯 Objetivo

Nesta aula você irá desenvolver seu primeiro projeto utilizando todos os conceitos aprendidos até agora.

Durante o desenvolvimento você utilizará:

* Variáveis
* Condicionais (`if`, `elseif` e `else`)
* Funções
* Parâmetros
* Retorno de valores (`return`)
* Organização do código

Ao final da aula você terá uma calculadora funcional desenvolvida em **PHP** e **JavaScript**, pronta para fazer parte do seu portfólio no GitHub.

---

# 📖 O Projeto

Você irá criar uma calculadora capaz de realizar quatro operações matemáticas básicas:

* Soma
* Subtração
* Multiplicação
* Divisão

O programa deverá:

* Receber dois números
* Receber uma operação
* Executar a função correspondente
* Exibir o resultado

Além disso, sua calculadora deverá impedir divisões por zero.

---

# 🧠 Planejamento

Antes de escrever o código, pense na lógica do programa.

A calculadora precisará de:

* Dois números
* Uma operação escolhida pelo usuário
* Quatro funções
* Uma estrutura condicional para decidir qual função executar

Visualmente, a lógica será semelhante a:

```text
Número 1
      ↓
Número 2
      ↓
Operação escolhida
      ↓
if / elseif / else
      ↓
Função correta
      ↓
Resultado
```

---

# Etapa 1 — Criando as Funções

Cada operação matemática será representada por uma função.

## PHP

```php
<?php

function somar($a, $b) {
    return $a + $b;
}

function subtrair($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {

    if ($b == 0) {
        return "Erro: divisão por zero não é permitida.";
    }

    return $a / $b;
}
```

---

## JavaScript

```javascript
function somar(a, b) {
    return a + b;
}

function subtrair(a, b) {
    return a - b;
}

function multiplicar(a, b) {
    return a * b;
}

function dividir(a, b) {

    if (b == 0) {
        return "Erro: divisão por zero não é permitida.";
    }

    return a / b;
}
```

---

# Etapa 2 — Criando as Variáveis

Crie três variáveis.

Exemplo em PHP:

```php
$numero1 = 10;
$numero2 = 5;
$operacao = "soma";
```

Exemplo em JavaScript:

```javascript
let numero1 = 10;
let numero2 = 5;
let operacao = "soma";
```

A variável **operacao** poderá receber um dos seguintes valores:

* `"soma"`
* `"subtracao"`
* `"multiplicacao"`
* `"divisao"`

---

# Etapa 3 — Escolhendo a Operação

Utilize uma estrutura:

```text
if
elseif
else
```

para verificar qual operação foi escolhida.

Dependendo do valor da variável **operacao**, chame a função correspondente.

Exemplo de lógica:

```text
Se operação = soma

↓

Executa função somar()

Se operação = divisão

↓

Executa função dividir()
```

O resultado retornado pela função deverá ser armazenado em uma variável.

Exemplo:

```php
$resultado = somar($numero1, $numero2);
```

---

# Etapa 4 — Exibindo o Resultado

Após executar a operação, imprima uma mensagem semelhante a:

```text
O resultado de 10 soma 5 é: 15
```

Faça isso utilizando:

* `echo` no PHP
* `console.log()` no JavaScript

---

# 🧪 Testes

Depois que a calculadora estiver pronta, teste todas as operações.

Exemplo:

| Número 1 | Operação      | Número 2 | Resultado esperado |
| -------- | ------------- | -------- | ------------------ |
| 10       | soma          | 5        | 15                 |
| 10       | subtração     | 5        | 5                  |
| 10       | multiplicação | 5        | 50                 |
| 10       | divisão       | 5        | 2                  |
| 10       | divisão       | 0        | Mensagem de erro   |

---

# ⚠️ Divisão por Zero

Uma calculadora nunca deve permitir dividir um número por zero.

Por isso utilizamos:

```php
if ($b == 0)
```

ou

```javascript
if (b == 0)
```

Caso isso aconteça, a função deverá retornar uma mensagem de erro em vez de realizar a operação.

---

# 🏋️ Exercício Prático

Crie os arquivos:

* `calculadora.php`
* `calculadora.js`

Seu programa deverá possuir:

* ✅ função `somar()`
* ✅ função `subtrair()`
* ✅ função `multiplicar()`
* ✅ função `dividir()`
* ✅ tratamento para divisão por zero
* ✅ duas variáveis numéricas
* ✅ uma variável indicando a operação
* ✅ estrutura `if / elseif / else`
* ✅ impressão do resultado

---

# 🚀 Desafio Extra

Faça vários testes alterando:

* os números
* a operação

Verifique se todas as situações funcionam corretamente.

Teste especialmente:

```text
10 / 0
```

O programa não deve apresentar erro.

Ele deve informar ao usuário que essa operação não é permitida.

---

# 💡 Dica de Programador

Perceba que cada função possui apenas uma responsabilidade.

* `somar()` apenas soma.
* `subtrair()` apenas subtrai.
* `multiplicar()` apenas multiplica.
* `dividir()` apenas divide.

Essa organização torna o código mais limpo, fácil de entender e muito mais simples de manter.

Nos próximos projetos, esse padrão será utilizado constantemente.

---

# 📚 O que você aprendeu

Ao concluir este projeto você será capaz de:

* Criar funções reutilizáveis.
* Trabalhar com retorno de valores (`return`).
* Utilizar estruturas condicionais para controlar o fluxo do programa.
* Organizar um projeto simples.
* Tratar erros básicos, como divisão por zero.
* Desenvolver seu primeiro projeto em PHP e JavaScript.

---

# 🎯 Próxima Aula

Na próxima aula iremos evoluir esta calculadora.

Em vez de alterar os números diretamente no código, o programa passará a receber os valores digitados pelo usuário através do terminal.

Esse será o primeiro passo para construir aplicações realmente interativas.
