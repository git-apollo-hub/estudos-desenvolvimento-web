# Aula 07 - Funções Nativas de Arrays

## 🎯 Objetivo

Nesta aula você aprenderá a utilizar funções nativas para manipular listas de forma mais simples e organizada.

Até agora você utilizou `foreach` e `forEach()` para percorrer arrays manualmente.

Embora isso continue sendo muito importante, existem funções prontas que resolvem os três padrões mais comuns de manipulação de listas:

* Transformar dados
* Filtrar dados
* Acumular valores

Ao final desta aula você será capaz de utilizar:

* `array_map()` / `.map()`
* `array_filter()` / `.filter()`
* `array_reduce()` / `.reduce()`

Essas funções são extremamente utilizadas em aplicações modernas.

---

# 📖 Teoria

Durante a aula anterior você percorreu uma lista de produtos utilizando um loop.

Provavelmente fez algo parecido com isso:

```text
Percorrer produtos

↓

Calcular valor total

↓

Somar os resultados
```

Sem perceber, você utilizou três padrões muito comuns em programação.

Esses padrões possuem funções específicas.

| Objetivo                  | Função |
| ------------------------- | ------ |
| Transformar uma lista     | map    |
| Filtrar elementos         | filter |
| Somar ou acumular valores | reduce |

---

# 🗺️ map

O `map` cria uma **nova lista**, transformando cada elemento da lista original.

O tamanho da nova lista será sempre o mesmo da lista original.

---

## PHP

```php
<?php

$precos = [15.90, 5.90, 2.90];

$precosComDesconto = array_map(function($preco) {
    return $preco * 0.9;
}, $precos);

print_r($precosComDesconto);
```

---

## JavaScript

```javascript
let precos = [15.90, 5.90, 2.90];

let precosComDesconto = precos.map(function(preco) {
    return preco * 0.9;
});

console.log(precosComDesconto);
```

---

## Resultado

```text
Lista original

15.90
5.90
2.90

↓

Lista nova

14.31
5.31
2.61
```

A lista original permanece inalterada.

---

# 🔎 filter

O `filter` devolve apenas os elementos que atendem uma determinada condição.

A função precisa retornar:

* `true` → mantém o elemento.
* `false` → remove o elemento.

---

## PHP

```php
<?php

$quantidades = [3, 10, 7, 0, 15];

$emEstoque = array_filter($quantidades, function($qtd) {
    return $qtd > 0;
});

print_r($emEstoque);
```

---

## JavaScript

```javascript
let quantidades = [3, 10, 7, 0, 15];

let emEstoque = quantidades.filter(function(qtd) {
    return qtd > 0;
});

console.log(emEstoque);
```

---

## Resultado

```text
Lista original

3
10
7
0
15

↓

Nova lista

3
10
7
15
```

O número zero foi removido porque não passou na condição.

---

# ➕ reduce

O `reduce` transforma toda uma lista em um único valor.

Normalmente ele é utilizado para:

* somatórios;
* médias;
* totais;
* estatísticas;
* concatenação de textos.

---

## PHP

```php
<?php

$valores = [47.70, 59.00, 20.30];

$total = array_reduce($valores, function($acumulado, $valorAtual) {
    return $acumulado + $valorAtual;
}, 0);

echo $total;
```

---

## JavaScript

```javascript
let valores = [47.70, 59.00, 20.30];

let total = valores.reduce(function(acumulado, valorAtual) {
    return acumulado + valorAtual;
}, 0);

console.log(total);
```

---

# 🧠 O acumulador

Na aula anterior você provavelmente fez algo parecido com:

```php
$total = 0;

foreach ($produtos as $produto) {

    $total += $produto["preco"] * $produto["quantidade"];

}
```

O `reduce()` faz exatamente isso internamente.

Você não precisa criar uma variável acumuladora manualmente.

---

# 🔍 Comparação PHP x JavaScript

| Objetivo          | PHP              | JavaScript  |
| ----------------- | ---------------- | ----------- |
| Transformar lista | `array_map()`    | `.map()`    |
| Filtrar elementos | `array_filter()` | `.filter()` |
| Acumular valores  | `array_reduce()` | `.reduce()` |

---

# 🏋️ Exercício Prático

Utilize o mesmo array de produtos criado na aula anterior.

Crie os arquivos:

* `exercicio7.php`
* `exercicio7.js`

---

## Parte 1

Utilize:

* `array_map()`
* `.map()`

Crie uma nova lista contendo apenas os nomes dos produtos.

Exemplo:

```text
[
"Caderno",
"Lápis",
"Borracha"
]
```

---

## Parte 2

Utilize:

* `array_filter()`
* `.filter()`

Crie uma nova lista contendo apenas os produtos cuja quantidade seja maior que cinco.

Exemplo:

```text
Produto A

Produto C

Produto D
```

---

## Parte 3

Utilize:

* `array_reduce()`
* `.reduce()`

Calcule o valor total do estoque.

Considere:

```text
Preço × Quantidade
```

Para cada produto.

Ao final obtenha apenas um número.

Exemplo:

```text
Valor total do estoque:

R$ 158,70
```

---

# 🚀 Desafio Extra

Na aula anterior você calculou o valor total do estoque utilizando um `foreach` ou `forEach()`.

Agora faça exatamente o mesmo cálculo utilizando `reduce()`.

Compare os dois resultados.

Eles devem ser exatamente iguais.

---

# 💡 Dica de Programador

Grande parte dos frameworks modernos utiliza esses métodos constantemente.

Sempre que precisar:

* modificar todos os elementos → use **map**;
* selecionar apenas alguns elementos → use **filter**;
* transformar uma lista em um único resultado → use **reduce**.

Com o tempo você perceberá que eles deixam o código muito mais limpo e fácil de entender do que loops tradicionais.

Isso não significa que `foreach` deixou de ser importante.

Na prática você utilizará ambos, escolhendo a ferramenta mais adequada para cada situação.

---

# 📚 O que você aprendeu

Ao concluir esta aula você será capaz de:

* Utilizar `array_map()` e `.map()`.
* Utilizar `array_filter()` e `.filter()`.
* Utilizar `array_reduce()` e `.reduce()`.
* Transformar listas.
* Filtrar elementos.
* Acumular valores.
* Escrever código mais moderno, organizado e reutilizável.

Esses métodos serão utilizados frequentemente nos próximos projetos do curso, principalmente ao trabalhar com bancos de dados, APIs e manipulação de coleções de dados.
