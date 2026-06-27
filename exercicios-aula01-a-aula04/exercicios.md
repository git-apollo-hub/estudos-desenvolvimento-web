# 🏋️ Lista de Exercícios - Módulo 01

## 📚 Conteúdos abordados

Antes de iniciar esta lista de exercícios, você já deve conhecer:

* Variáveis
* Tipos de dados
* Operadores
* Condicionais (`if`, `else`, `elseif`)
* Loops (`for`, `while`, `foreach`)
* Arrays
* Funções
* Parâmetros
* Retorno de valores (`return`)

> **Importante:** Todos os exercícios devem ser desenvolvidos em **PHP** e **JavaScript**.

---

# Exercício 01 - Apresentação

Crie uma função chamada:

```text
apresentacao()
```

Ela deve receber:

* Nome
* Idade
* Cidade

E retornar uma frase como:

```text
Olá! Meu nome é Lucas, tenho 30 anos e moro em Curitiba.
```

---

# Exercício 02 - Calculadora de Idade

Crie uma função que receba o ano de nascimento.

Ela deve retornar a idade da pessoa considerando o ano atual (2026).

Exemplo:

```text
Ano: 1998

Resultado:
28 anos
```

---

# Exercício 03 - Maior de Idade

Utilizando a função criada anteriormente, informe se a pessoa é:

* Menor de idade
* Maior de idade

---

# Exercício 04 - Número Par ou Ímpar

Crie uma função:

```text
ehPar(numero)
```

Retorne:

* true
* false

Depois utilize um `if` para imprimir:

```text
Número par.
```

ou

```text
Número ímpar.
```

---

# Exercício 05 - Tabuada

Utilize um `for` para imprimir a tabuada de um número.

Exemplo:

```text
Tabuada do 7

7 x 1 = 7

7 x 2 = 14

...

7 x 10 = 70
```

---

# Exercício 06 - Contagem de Pares

Utilizando um `for`, conte quantos números pares existem entre:

```text
1 e 100
```

Ao final imprima:

```text
Existem 50 números pares.
```

---

# Exercício 07 - Lista de Alunos

Crie um array contendo pelo menos 8 nomes.

Utilize:

* `foreach` (PHP)
* `for...of` (JavaScript)

para imprimir todos os alunos.

---

# Exercício 08 - Média de Notas

Crie um array com cinco notas.

Some todas utilizando um loop.

Depois calcule a média.

Classifique:

* Aprovado
* Recuperação
* Reprovado

---

# Exercício 09 - Saudação Inteligente

Crie uma função:

```text
saudacao(nome, horario)
```

Se o horário for:

* até 11 → Bom dia
* até 17 → Boa tarde
* acima disso → Boa noite

Exemplo:

```text
Boa noite, Lucas!
```

---

# Exercício 10 - Contagem Regressiva

Utilize um `while` para fazer:

```text
20

19

18

...

1
```

Ao final imprima:

```text
🚀 Fim da contagem!
```

---

# Exercício 11 - Sistema de Login

Crie duas variáveis:

```text
usuario

senha
```

Utilize um `if`.

Se forem iguais aos valores cadastrados:

```text
Usuário autenticado.
```

Caso contrário:

```text
Usuário ou senha inválidos.
```

---

# Exercício 12 - Contador de Vogais

Crie um array contendo letras.

Conte quantas vogais existem.

Exemplo:

```text
A
B
C
E
F
I
```

Resultado:

```text
Foram encontradas 3 vogais.
```

---

# Exercício 13 - Caixa Eletrônico

Crie uma função:

```text
sacar(valor)
```

Considere um saldo inicial de:

```text
1000
```

Se houver saldo suficiente:

```text
Saque realizado.

Saldo restante: R$ XXX
```

Caso contrário:

```text
Saldo insuficiente.
```

---

# Exercício 14 - Cadastro de Produtos

Crie um array contendo pelo menos cinco produtos.

Percorra a lista imprimindo:

```text
Produto 1

Produto 2

Produto 3
```

Ao final imprima:

```text
Total de produtos: 5
```

---

# Exercício 15 ⭐ Desafio Final

Crie uma pequena calculadora utilizando funções.

Ela deverá possuir:

* somar()
* subtrair()
* multiplicar()
* dividir()

Cada função deverá utilizar `return`.

Depois chame todas elas e imprima:

```text
Soma: 15

Subtração: 8

Multiplicação: 40

Divisão: 5
```

---

# 🥇 Desafio Extra

Crie um pequeno sistema de boletim escolar.

Cada aluno possui:

* Nome
* Nota

O programa deverá:

* armazenar vários alunos em arrays;
* calcular a média de cada aluno;
* informar se foi aprovado;
* imprimir todos utilizando loops;
* utilizar funções para organizar o código.

---

# 📌 Regras

* Desenvolva todos os exercícios em **PHP** e **JavaScript**.
* Utilize nomes de variáveis claros.
* Evite repetir código.
* Sempre que possível, utilize funções.
* Teste diferentes valores antes de considerar um exercício concluído.

---

# 🎯 Objetivo

Ao concluir esta lista você será capaz de:

* Criar programas simples utilizando PHP e JavaScript.
* Utilizar variáveis e tipos de dados.
* Tomar decisões com condicionais.
* Repetir tarefas utilizando loops.
* Criar funções reutilizáveis.
* Resolver pequenos problemas de lógica.

Esses conhecimentos servirão como base para os próximos módulos do curso, onde construiremos aplicações cada vez mais próximas de sistemas reais.
