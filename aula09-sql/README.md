# Aula 09 - Introdução ao PostgreSQL e SQL

## 🎯 Objetivo

Nesta aula você dará os primeiros passos no mundo dos **bancos de dados relacionais** utilizando o **PostgreSQL**.

Até agora, todos os dados utilizados durante os exercícios e projetos eram armazenados diretamente no código.

Embora isso seja suficiente para aprender programação, aplicações reais precisam armazenar informações de forma permanente.

É exatamente esse o papel de um banco de dados.

Ao final desta aula você será capaz de:

* Entender o que é um banco de dados relacional.
* Compreender a estrutura de tabelas, linhas e colunas.
* Criar um banco de dados.
* Criar tabelas.
* Inserir registros.
* Consultar dados utilizando SQL.
* Atualizar e remover registros.

> **Importante:** Nesta aula trabalharemos apenas com **SQL puro**. A integração entre PHP e PostgreSQL será realizada na próxima aula utilizando **PDO**.

---

# 📖 Por que aprender Banco de Dados?

Imagine o projeto da Calculadora de IMC.

Até agora os dados foram armazenados em arrays.

Exemplo:

```php
$produto = [
    "nome" => "Caneta",
    "preco" => 5.00,
    "quantidade" => 3
];
```

Isso funciona enquanto o programa está em execução.

Quando o script termina, todas essas informações são perdidas.

Em uma aplicação real, os dados precisam continuar existindo mesmo depois que o sistema é fechado.

É para isso que utilizamos um banco de dados.

```text
Aplicação

↓

Banco de Dados

↓

Informações salvas permanentemente
```

---

# 🧠 O que é um Banco de Dados?

Um banco de dados é um local utilizado para armazenar informações de forma organizada.

Dentro dele existem diversas tabelas.

Cada tabela armazena um tipo de informação.

Exemplo:

```text
Banco de Dados

│

├── Produtos

├── Clientes

├── Funcionários

├── Pedidos

└── Usuários
```

---

# 📦 Conceitos Fundamentais

## Banco de Dados (Database)

É o container que agrupa todas as tabelas de uma aplicação.

---

## Tabela (Table)

É uma estrutura organizada em linhas e colunas.

Cada tabela representa um tipo de informação.

Exemplo:

```text
Produtos
```

---

## Linha (Row)

Cada linha representa um registro.

Exemplo:

```text
Produto

↓

Caneta
```

---

## Coluna (Column)

Cada coluna representa uma característica do registro.

Exemplo:

```text
id

nome

preco

quantidade
```

---

## Chave Primária (PRIMARY KEY)

É um identificador único para cada registro.

Normalmente utilizamos uma coluna chamada:

```text
id
```

No PostgreSQL, esse campo costuma ser definido utilizando **SERIAL** ou **IDENTITY**, permitindo que o valor seja incrementado automaticamente.

---

## Tipos de Dados

Assim como PHP e JavaScript possuem tipos de dados, o PostgreSQL também possui.

Alguns dos mais utilizados:

| Tipo            | Utilização         |
| --------------- | ------------------ |
| `INTEGER`       | Números inteiros   |
| `VARCHAR(100)`  | Textos             |
| `NUMERIC(10,2)` | Valores monetários |
| `DATE`          | Datas              |
| `TIMESTAMP`     | Data e hora        |

---

# 🔄 CRUD

Praticamente todas as aplicações executam quatro operações básicas.

Essas operações são conhecidas pela sigla **CRUD**.

| Operação | Comando SQL |
| -------- | ----------- |
| Create   | `INSERT`    |
| Read     | `SELECT`    |
| Update   | `UPDATE`    |
| Delete   | `DELETE`    |

---

# Criando Registros (CREATE)

```sql
INSERT INTO produtos (nome, preco, quantidade)
VALUES ('Caneta', 5.00, 3);
```

---

# Consultando Dados (READ)

Consultar todos os registros:

```sql
SELECT * FROM produtos;
```

Consultar apenas algumas colunas:

```sql
SELECT nome, preco
FROM produtos;
```

Aplicando filtros:

```sql
SELECT *
FROM produtos
WHERE quantidade > 1;
```

---

# Atualizando Dados (UPDATE)

```sql
UPDATE produtos
SET preco = 6.50
WHERE nome = 'Caneta';
```

---

# Removendo Dados (DELETE)

```sql
DELETE FROM produtos
WHERE id = 1;
```

---

# 🔍 Comparação com PHP

Você já conhece praticamente todos esses conceitos.

Apenas mudamos a forma de armazenar as informações.

| PHP               | PostgreSQL         |
| ----------------- | ------------------ |
| Array de produtos | Tabela `produtos`  |
| Array associativo | Linha da tabela    |
| Chaves do array   | Colunas            |
| `foreach`         | `SELECT`           |
| `array_filter()`  | `WHERE`            |
| Objeto individual | Registro da tabela |

A lógica continua praticamente a mesma.

---

# 🛠️ Ambiente

Nesta aula será utilizado:

* PostgreSQL
* Terminal Linux / WSL
* Cliente `psql`

Para acessar o PostgreSQL execute:

```bash
sudo -u postgres psql
```

Caso utilize outro usuário:

```bash
psql -U seu_usuario -d postgres
```

Após conectar, você estará no console do PostgreSQL.

---

# 🏋️ Exercício Prático

## Parte 1

Crie um banco de dados chamado:

```text
curso_php
```

---

## Parte 2

Conecte-se ao banco criado.

Exemplo:

```sql
\c curso_php
```

---

## Parte 3

Crie uma tabela chamada:

```text
produtos
```

Ela deverá possuir as seguintes colunas:

| Coluna     | Tipo               |
| ---------- | ------------------ |
| id         | SERIAL PRIMARY KEY |
| nome       | VARCHAR(100)       |
| preco      | NUMERIC(10,2)      |
| quantidade | INTEGER            |

---

## Parte 4

Insira três produtos na tabela.

Exemplo:

* Caneta
* Caderno
* Mochila

---

## Parte 5

Consulte todos os registros utilizando:

```sql
SELECT * FROM produtos;
```

Verifique se todos os produtos foram cadastrados corretamente.

---

## Parte 6

Realize uma consulta filtrando apenas produtos cuja quantidade seja maior que 1.

Utilize a cláusula:

```sql
WHERE quantidade > 1;
```

---

# 🚀 Desafio Extra

Após concluir o exercício principal, tente realizar outras consultas.

Por exemplo:

* listar apenas os nomes dos produtos;
* listar apenas os preços;
* ordenar os produtos pelo preço;
* buscar apenas um produto específico;
* atualizar o preço de um produto;
* excluir um produto da tabela.

Pesquise a documentação oficial caso necessário.

---

# 💡 Dica de Programador

Não memorize comandos SQL.

Procure entender a lógica.

Quase toda aplicação desenvolvida utiliza operações de:

* inserir;
* consultar;
* atualizar;
* excluir.

Quando você dominar essas quatro operações, já conseguirá desenvolver boa parte dos sistemas CRUD encontrados no mercado.

O PostgreSQL é um dos bancos de dados relacionais mais utilizados em aplicações corporativas, sendo conhecido por sua robustez, confiabilidade e conformidade com os padrões SQL.

Nas próximas aulas esses comandos serão executados diretamente pelo PHP utilizando **PDO**, permitindo que suas aplicações gravem e consultem dados automaticamente.

---

# 📚 O que você aprendeu

Ao concluir esta aula você será capaz de:

* Entender a estrutura de um banco de dados relacional.
* Criar bancos de dados no PostgreSQL.
* Criar tabelas.
* Inserir registros utilizando SQL.
* Consultar dados com `SELECT`.
* Filtrar registros utilizando `WHERE`.
* Atualizar informações com `UPDATE`.
* Remover registros utilizando `DELETE`.
* Compreender a relação entre arrays, objetos e tabelas de banco de dados.

Na próxima aula esses conhecimentos serão integrados ao PHP utilizando **PDO** para desenvolver aplicações que armazenam dados de forma permanente no PostgreSQL.
