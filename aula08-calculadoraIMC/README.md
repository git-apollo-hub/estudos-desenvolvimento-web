# Aula 08 - Projeto: Calculadora de IMC

## 🎯 Objetivo

Neste projeto você irá desenvolver uma **Calculadora de IMC (Índice de Massa Corporal)** utilizando os conhecimentos adquiridos até o momento.

Além de calcular o IMC de uma pessoa, o sistema será capaz de:

* Calcular o IMC de várias pessoas.
* Classificar cada resultado.
* Armazenar os dados utilizando arrays associativos.
* Gerar um relatório completo.
* Calcular a média de IMC do grupo.

Este projeto marca a transição dos exercícios isolados para aplicações cada vez mais próximas de sistemas reais.

---

# 📖 O Projeto

A calculadora deverá trabalhar com informações como:

* Nome
* Peso
* Altura
* IMC
* Classificação

Cada pessoa será representada por um array associativo (PHP) ou objeto (JavaScript).

Exemplo:

```php
$pessoa = [
    "nome" => "Lucas",
    "peso" => 70,
    "altura" => 1.75,
    "imc" => 22.86,
    "classificacao" => "Peso normal"
];
```

---

# 📚 O que é IMC?

O **Índice de Massa Corporal (IMC)** é um cálculo utilizado para estimar se uma pessoa está dentro da faixa de peso considerada adequada para sua altura.

A fórmula é simples:

```text
IMC = Peso ÷ (Altura × Altura)
```

Exemplo:

```text
Peso: 70 kg

Altura: 1.75 m

IMC = 70 ÷ (1.75 × 1.75)

IMC = 22.86
```

---

# 📊 Classificação do IMC

| IMC               | Classificação      |
| ----------------- | ------------------ |
| Menor que 18.5    | Abaixo do peso     |
| Entre 18.5 e 24.9 | Peso normal        |
| Entre 25.0 e 29.9 | Sobrepeso          |
| Entre 30.0 e 34.9 | Obesidade Grau I   |
| Entre 35.0 e 39.9 | Obesidade Grau II  |
| 40 ou mais        | Obesidade Grau III |

---

# 🧠 Planejamento

Este projeto será desenvolvido em etapas.

Cada etapa adicionará uma nova funcionalidade.

## Etapa 1

* Criar a função `calcularImc()`.
* Criar a função `classificarImc()`.
* Criar um array contendo três pessoas.
* Calcular o IMC de cada pessoa.
* Armazenar o resultado dentro do próprio array.
* Exibir um relatório.
* Calcular a média de IMC utilizando `array_reduce()`.

---

## Próximas Etapas

Nas próximas aulas este projeto continuará evoluindo.

Entre as melhorias previstas estão:

* Entrada de dados pelo terminal.
* Cadastro de pessoas pelo usuário.
* Menu interativo.
* Validação de dados.
* Organização em múltiplos arquivos.
* Estrutura mais próxima de um sistema real.

---

# 🛠️ Estrutura Inicial

O projeto deverá possuir:

```text
calculadora-imc.php
calculadora-imc.js
```

Cada versão deverá implementar exatamente a mesma lógica.

---

# 🏋️ Exercício Prático

Crie os arquivos:

* `calculadora-imc.php`
* `calculadora-imc.js`

Implemente:

### Parte 1

Crie uma função:

```text
calcularImc(peso, altura)
```

Ela deverá retornar o IMC arredondado para duas casas decimais utilizando:

```php
round()
```

ou

```javascript
toFixed()
```

(conforme a linguagem utilizada).

---

### Parte 2

Crie uma função:

```text
classificarImc(imc)
```

Ela deverá retornar a classificação correspondente conforme a tabela de IMC.

---

### Parte 3

Crie um array contendo três pessoas.

Cada pessoa deverá possuir:

* nome
* peso
* altura

---

### Parte 4

Percorra o array utilizando:

* `foreach` (PHP)
* `forEach()` (JavaScript)

Para cada pessoa:

* calcule o IMC;
* descubra a classificação;
* armazene essas informações no próprio array.

---

### Parte 5

Exiba um relatório semelhante ao exemplo abaixo:

```text
Nome: Lucas

Peso: 70 kg

Altura: 1.75 m

IMC: 22.86

Classificação: Peso normal

--------------------------
```

---

### Parte 6

Utilize:

* `array_reduce()`
* `.reduce()`

para calcular a média de IMC do grupo.

Exemplo:

```text
Média de IMC do grupo:

24.10
```

---

# 🚀 Desafio Extra

Pesquise como funciona o cálculo oficial do IMC e compare os resultados da sua aplicação com uma calculadora online.

Verifique se todos os valores calculados estão corretos.

---

# 💡 Dica de Programador

Perceba como este projeto reúne praticamente todos os conceitos estudados até agora:

* Variáveis
* Condicionais
* Loops
* Funções
* Arrays Associativos
* map
* filter
* reduce

Essa combinação de conhecimentos é exatamente o que acontece no desenvolvimento de sistemas reais.

---

# 📚 O que você aprendeu

Ao concluir esta primeira etapa você será capaz de:

* Criar funções para cálculos.
* Trabalhar com listas de registros.
* Atualizar arrays associativos.
* Utilizar `array_reduce()` em um problema real.
* Organizar melhor a lógica de uma aplicação.

Este projeto continuará evoluindo nas próximas aulas até se tornar uma aplicação interativa executada pelo terminal.
