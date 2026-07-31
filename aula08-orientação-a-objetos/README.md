# Aula 08 - Introdução à Orientação a Objetos (POO)

## 🎯 Objetivo

Nesta aula você dará os primeiros passos em **Programação Orientada a Objetos (POO)**.

Até agora, utilizamos variáveis, funções e arrays para resolver problemas. Esses recursos continuam sendo importantes, mas à medida que as aplicações crescem surge a necessidade de organizar melhor o código.

A Programação Orientada a Objetos resolve esse problema agrupando **dados** e **comportamentos** em uma única estrutura chamada **classe**.

Ao final desta aula você será capaz de:

* Entender o conceito de classe e objeto.
* Criar classes em PHP e JavaScript.
* Criar atributos e métodos.
* Utilizar construtores.
* Instanciar objetos.
* Compreender a diferença entre programação procedural e orientação a objetos.

---

# 📖 Por que isso importa?

Na aula do projeto da Calculadora de IMC utilizamos um array associativo para representar uma pessoa.

Exemplo:

```php
$pessoa = [
    "nome" => "Lucas",
    "peso" => 70,
    "altura" => 1.75
];
```

Esse formato funciona muito bem.

Entretanto, existe um problema.

As funções responsáveis por calcular o IMC ficam separadas dos dados da pessoa.

```text
Pessoa
│
├── Nome
├── Peso
└── Altura

↓

Função calcularImc()

↓

Função classificarImc()
```

Nada impede que outro trecho do código altere essas informações de forma incorreta.

A Programação Orientada a Objetos propõe uma organização diferente.

Ela reúne **dados** e **comportamentos** dentro da mesma estrutura.

Essa estrutura recebe o nome de **Classe**.

---

# 🧠 Analogia

Imagine um projeto de construção.

A planta de uma casa descreve:

* quantidade de quartos;
* quantidade de banheiros;
* tamanho da sala;
* garagem.

Essa planta não é uma casa.

Ela apenas descreve como uma casa deve ser construída.

Uma **classe** funciona exatamente dessa forma.

Ela é o modelo.

Quando utilizamos esse modelo para criar uma casa de verdade, temos um **objeto**.

```text
Classe (Projeto)

↓

Objeto 1

↓

Objeto 2

↓

Objeto 3
```

Todos os objetos seguem o mesmo modelo, mas possuem valores diferentes.

---

# Conceitos Fundamentais

## Classe

É um modelo utilizado para criar objetos.

Exemplo:

```text
Pessoa

Produto

Carro

Cliente
```

---

## Objeto

É uma instância criada a partir de uma classe.

Exemplo:

```text
Classe

↓

Pessoa

↓

Objeto

Nome: Lucas

Idade: 25
```

---

## Atributos

São as características do objeto.

Exemplo:

```text
Produto

↓

Nome

Preço

Quantidade
```

---

## Métodos

São as ações que o objeto pode executar.

Exemplo:

```text
Produto

↓

calcularValor()

descricao()

aplicarDesconto()
```

---

## Construtor

O construtor é um método especial executado automaticamente quando um objeto é criado.

Sua função é inicializar os atributos.

---

# 🔍 Comparação PHP x JavaScript

| Conceito                     | PHP               | JavaScript        |
| ---------------------------- | ----------------- | ----------------- |
| Definir classe               | `class Pessoa {}` | `class Pessoa {}` |
| Construtor                   | `__construct()`   | `constructor()`   |
| Criar objeto                 | `new Pessoa()`    | `new Pessoa()`    |
| Referência ao próprio objeto | `$this`           | `this`            |
| Acessar atributos            | `->`              | `.`               |

---

# Classe em PHP

```php
class Pessoa {

    public $nome;
    public $idade;

    public function __construct($nome, $idade) {

        $this->nome = $nome;
        $this->idade = $idade;

    }

    public function apresentar() {

        return "Oi, eu sou {$this->nome} e tenho {$this->idade} anos.";

    }

}

$pessoa = new Pessoa("Lucas", 25);

echo $pessoa->apresentar();
```

---

# Classe em JavaScript

```javascript
class Pessoa {

    constructor(nome, idade) {

        this.nome = nome;
        this.idade = idade;

    }

    apresentar() {

        return `Oi, eu sou ${this.nome} e tenho ${this.idade} anos.`;

    }

}

const pessoa = new Pessoa("Lucas", 25);

console.log(pessoa.apresentar());
```

---

# 📌 Diferenças importantes

## PHP

Os atributos normalmente são declarados antes do construtor.

```php
public $nome;
public $idade;
```

Para acessar um atributo utiliza-se:

```php
$this->nome
```

---

## JavaScript

Os atributos normalmente são criados dentro do construtor.

```javascript
this.nome = nome;
```

Para acessar um atributo utiliza-se:

```javascript
this.nome
```

---

# 🆚 Procedural x Orientado a Objetos

Até agora você programou utilizando funções separadas.

```text
Dados

↓

Função A

↓

Função B

↓

Função C
```

Na Orientação a Objetos tudo fica organizado em um único lugar.

```text
Classe Produto

├── nome

├── preco

├── quantidade

├── valorTotal()

└── descricao()
```

Essa organização facilita a manutenção e o crescimento dos sistemas.

---

# 🏋️ Exercício Prático

Crie os arquivos:

* `exercicio8.php`
* `exercicio8.js`

---

## Parte 1

Crie uma classe chamada:

```text
Produto
```

---

## Parte 2

Adicione os seguintes atributos:

* nome
* preco
* quantidade

---

## Parte 3

Crie um construtor que receba esses três valores.

---

## Parte 4

Implemente um método chamado:

```text
valorTotal()
```

Esse método deverá retornar:

```text
preço × quantidade
```

---

## Parte 5

Implemente um método chamado:

```text
descricao()
```

Ele deverá retornar uma frase semelhante a:

```text
3x Caneta

Total: R$ 15.00
```

Lembre-se:

O método deve **retornar** a string.

Quem chama o método decide se irá imprimir ou utilizar esse valor de outra forma.

---

## Parte 6

Crie um objeto da classe.

Exemplo:

```text
Caneta

Preço: R$ 5.00

Quantidade: 3
```

---

## Parte 7

Utilize os métodos criados para exibir:

* valor total;
* descrição do produto.

---

# 🚀 Desafio Extra

Crie dois ou três objetos diferentes.

Exemplo:

* Caneta
* Caderno
* Borracha

Percorra todos os objetos e exiba suas descrições.

Se desejar, utilize um array de objetos para praticar os conceitos aprendidos nas aulas anteriores.

---

# 💡 Dica de Programador

A Programação Orientada a Objetos é utilizada na maioria dos sistemas profissionais.

Frameworks modernos como:

* Laravel
* Symfony
* Spring Boot
* NestJS
* Angular

utilizam esse paradigma extensivamente.

Por isso, compreender bem os conceitos básicos de **classe**, **objeto**, **atributos**, **métodos** e **construtores** é fundamental antes de avançar para assuntos como herança, encapsulamento, interfaces e polimorfismo.

Não tenha pressa.

Uma boa base em Orientação a Objetos facilitará todo o restante da sua jornada como desenvolvedor.

---

# 📚 O que você aprendeu

Ao concluir esta aula você será capaz de:

* Entender a diferença entre programação procedural e orientação a objetos.
* Criar classes em PHP e JavaScript.
* Criar objetos utilizando `new`.
* Declarar atributos.
* Criar construtores.
* Implementar métodos.
* Utilizar `this` e `$this`.
* Organizar código de forma mais estruturada e reutilizável.

Nas próximas aulas continuaremos evoluindo esse conhecimento até chegar aos conceitos mais avançados da Programação Orientada a Objetos.
