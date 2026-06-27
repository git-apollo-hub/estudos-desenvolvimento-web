# Aula 06 - Arrays Associativos

## 🎯 Objetivo

Nesta aula você aprenderá a organizar informações utilizando **arrays associativos** em PHP e **objetos (Objects)** em JavaScript.

Diferente dos arrays tradicionais, onde os elementos são acessados por índices numéricos, os arrays associativos permitem utilizar **nomes (chaves)** para identificar cada informação, tornando o código muito mais organizado e legível.

Ao final desta aula você será capaz de:

* Criar arrays associativos em PHP.
* Criar objetos em JavaScript.
* Acessar informações utilizando chaves.
* Percorrer estruturas utilizando loops.
* Trabalhar com listas de objetos, estrutura muito utilizada em bancos de dados e APIs.

---

# 📖 Teoria

Até agora você utilizou arrays como listas numeradas.

Exemplo:

```php
$frutas = ["Maçã", "Banana", "Uva"];
```

Nesse caso, cada elemento possui um índice:

```text
0 → Maçã

1 → Banana

2 → Uva
```

Isso funciona bem para listas simples.

Mas imagine armazenar informações de uma pessoa.

Em vez de acessar:

```text
pessoa[0]
pessoa[1]
pessoa[2]
```

seria muito mais fácil utilizar:

```text
pessoa["nome"]

pessoa["idade"]

pessoa["email"]
```

É exatamente isso que os arrays associativos fazem.

---

# 🧠 Analogia

Imagine um arquivo de fichas.

Cada gaveta possui uma etiqueta.

```text
Nome

Idade

Profissão

Telefone
```

Em vez de procurar "a terceira gaveta", você procura pela etiqueta.

Arrays associativos funcionam exatamente dessa forma.

---

# Arrays Associativos em PHP

## Criando um array associativo

```php
<?php

$pessoa = [
    "nome" => "Lucas",
    "idade" => 32,
    "profissao" => "Estudante de programação"
];
```

Cada informação possui uma chave.

---

## Acessando informações

```php
echo $pessoa["nome"];

echo $pessoa["idade"];
```

Resultado:

```text
Lucas

32
```

---

## Percorrendo um Array Associativo

Você também pode percorrer todas as chaves e valores utilizando o `foreach`.

```php
foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor" . PHP_EOL;
}
```

Resultado:

```text
nome: Lucas

idade: 32

profissao: Estudante de programação
```

---

# JavaScript - Objects

No JavaScript essa estrutura recebe outro nome:

```text
Object
```

Apesar do nome diferente, a ideia é exatamente a mesma.

---

## Criando um Objeto

```javascript
let pessoa = {
    nome: "Lucas",
    idade: 32,
    profissao: "Estudante de programação"
};
```

---

## Acessando informações

Você pode acessar os dados de duas formas.

### Notação de ponto

```javascript
console.log(pessoa.nome);
```

### Notação de colchetes

```javascript
console.log(pessoa["idade"]);
```

As duas formas são corretas.

---

## Percorrendo um Objeto

```javascript
for (let chave in pessoa) {
    console.log(chave + ": " + pessoa[chave]);
}
```

Resultado:

```text
nome: Lucas

idade: 32

profissao: Estudante de programação
```

---

# 🔍 Comparação PHP x JavaScript

| Conceito              | PHP                   | JavaScript                        |
| --------------------- | --------------------- | --------------------------------- |
| Nome da estrutura     | Array Associativo     | Object                            |
| Criar                 | `["nome" => "Lucas"]` | `{ nome: "Lucas" }`               |
| Acessar               | `$pessoa["nome"]`     | `pessoa.nome` ou `pessoa["nome"]` |
| Separador chave/valor | `=>`                  | `:`                               |
| Percorrer             | `foreach`             | `for...in`                        |

---

# ⚠️ Atenção

Existe uma pequena diferença entre PHP e JavaScript.

No PHP, as chaves de texto precisam estar entre aspas.

```php
"nome" => "Lucas"
```

No JavaScript, ao criar o objeto, normalmente não utilizamos aspas.

```javascript
nome: "Lucas"
```

Porém, ao acessar os dados, ambas as formas funcionam.

```javascript
pessoa.nome

pessoa["nome"]
```

---

# 📦 Arrays de Arrays Associativos

No mundo real normalmente não trabalhamos com apenas uma pessoa.

Trabalhamos com listas.

Por exemplo:

* vários alunos;
* vários produtos;
* vários clientes.

---

## PHP

```php
<?php

$alunos = [
    [
        "nome" => "Lucas",
        "nota" => 9.5
    ],
    [
        "nome" => "Sara",
        "nota" => 7.0
    ],
    [
        "nome" => "Heloisa",
        "nota" => 8.2
    ]
];

foreach ($alunos as $aluno) {
    echo $aluno["nome"] . " tirou " . $aluno["nota"] . PHP_EOL;
}
```

---

## JavaScript

```javascript
let alunos = [
    {
        nome: "Lucas",
        nota: 9.5
    },
    {
        nome: "Sara",
        nota: 7.0
    },
    {
        nome: "Heloisa",
        nota: 8.2
    }
];

alunos.forEach(function(aluno) {
    console.log(aluno.nome + " tirou " + aluno.nota);
});
```

---

# 💡 Onde isso é utilizado?

Essa estrutura aparece praticamente em qualquer sistema moderno.

Por exemplo:

* consultas ao banco de dados;
* respostas de APIs REST;
* arquivos JSON;
* sistemas de cadastro;
* e-commerce;
* sistemas financeiros.

Aprender arrays associativos é um passo importante para trabalhar com aplicações reais.

---

# 🏋️ Exercício Prático

Crie os arquivos:

* `exercicio6.php`
* `exercicio6.js`

---

## Parte 1

Crie um produto utilizando:

* Array Associativo (PHP)
* Object (JavaScript)

O produto deverá possuir:

* nome
* preco
* quantidade

Exemplo:

```text
Nome: Caderno

Preço: 15.90

Quantidade: 3
```

---

## Parte 2

Imprima uma frase semelhante a:

```text
Produto: Caderno

Preço: R$ 15.90

Quantidade: 3
```

---

## Parte 3

Crie uma lista contendo três produtos.

Cada produto deverá possuir:

* nome
* preco
* quantidade

Exemplo:

```text
Caderno

Caneta

Lápis
```

---

## Parte 4

Percorra a lista utilizando:

* `foreach` no PHP
* `forEach()` no JavaScript

Para cada produto calcule:

```text
preço × quantidade
```

Exemplo:

```text
Caderno:

3 unidades x R$ 15.90 = R$ 47.70
```

Faça isso para todos os produtos.

---

# 🚀 Desafio Extra

Depois de percorrer todos os produtos, calcule o valor total do estoque.

Para isso utilize uma variável acumuladora.

Exemplo:

```php
$total = 0;
```

A cada repetição do loop, some o valor do produto ao total.

Ao final imprima:

```text
Valor total do estoque:

R$ XXX.XX
```

Essa técnica é muito utilizada para:

* somatórios;
* médias;
* totais de vendas;
* relatórios financeiros.

---

# 💡 Dica de Programador

Quando você começar a trabalhar com bancos de dados e APIs, perceberá que a maioria das informações será representada exatamente dessa forma:

Uma lista de registros, onde cada registro possui várias informações nomeadas.

Exemplo:

```text
Produto

↓

Nome

Preço

Quantidade

Categoria

Fornecedor
```

Quanto mais confortável você estiver com arrays associativos e objetos, mais fácil será trabalhar com sistemas reais.

---

# 📚 O que você aprendeu

Ao concluir esta aula você será capaz de:

* Criar arrays associativos em PHP.
* Criar objetos em JavaScript.
* Acessar valores utilizando chaves.
* Percorrer objetos e arrays associativos.
* Trabalhar com listas de registros.
* Calcular totais utilizando variáveis acumuladoras.
* Entender a estrutura utilizada por bancos de dados e APIs.
