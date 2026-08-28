# Aula 10 - Conectando PHP e Node.js ao PostgreSQL

## 🎯 Objetivo

Nesta aula você aprenderá a conectar aplicações **PHP** e **Node.js** ao **PostgreSQL**, executando operações de **CRUD** (Create, Read, Update e Delete) de forma segura.

Até a aula anterior executávamos comandos SQL diretamente no terminal do PostgreSQL. Agora chegou o momento de fazer isso através de código, permitindo que nossas aplicações gravem e consultem informações automaticamente.

Ao final desta aula você será capaz de:

* Conectar aplicações PHP ao PostgreSQL utilizando **PDO**.
* Conectar aplicações Node.js ao PostgreSQL utilizando o pacote **pg**.
* Executar comandos SQL a partir do código.
* Utilizar consultas parametrizadas (Prepared Statements).
* Implementar operações de CRUD.
* Compreender as diferenças entre PHP e Node.js na comunicação com o banco.

---

# 📖 O que é um Driver de Banco?

Para que uma linguagem consiga conversar com um banco de dados é necessário utilizar um **driver**.

O driver é responsável por abrir a conexão, enviar comandos SQL e receber os resultados.

Cada linguagem possui sua própria biblioteca.

| Linguagem | Biblioteca        |
| --------- | ----------------- |
| PHP       | PDO (`pdo_pgsql`) |
| Node.js   | `pg`              |

---

# PHP x Node.js

Embora ambas as linguagens executem exatamente as mesmas operações, a forma de escrever o código muda um pouco.

| PHP                               | Node.js                           |
| --------------------------------- | --------------------------------- |
| PDO                               | pg                                |
| `$pdo->prepare()`                 | `client.query()`                  |
| `execute([...])`                  | `query(sql, [...])`               |
| Não precisa fechar explicitamente | Deve chamar `client.end()`        |
| Código normalmente síncrono       | Código assíncrono (`async/await`) |

Apesar dessas diferenças, a lógica permanece exatamente a mesma.

---

# ⚙️ Pré-requisitos

Antes de iniciar esta aula, verifique se possui:

* PostgreSQL instalado;
* Banco de dados criado na Aula 09;
* Tabela `produtos`;
* PHP instalado;
* Node.js instalado.

---

# Configurando o PHP

Para utilizar PostgreSQL no PHP é necessário instalar a extensão PDO.

Ubuntu / WSL:

```bash
sudo apt install php-pgsql
```

Após instalar, reinicie o servidor PHP (caso esteja utilizando Apache ou PHP-FPM).

---

# Configurando o Node.js

No Node.js precisamos instalar o pacote oficial do PostgreSQL.

Dentro da pasta do projeto execute:

```bash
npm install pg
```

Isso instalará o driver utilizado durante toda a aula.

---

# 🔌 Conectando ao PostgreSQL

Tanto no PHP quanto no Node.js serão necessárias as seguintes informações:

* Host
* Porta
* Banco de dados
* Usuário
* Senha

Exemplo:

```text
Host: localhost
Porta: 5432
Banco: curso_php
Usuário: postgres
Senha: sua_senha_aqui
```

> **Importante:** substitua `sua_senha_aqui` pela senha configurada no seu PostgreSQL.

---

# DSN no PHP

O PDO utiliza uma string chamada **DSN (Data Source Name)** para definir a conexão.

Exemplo:

```text
pgsql:host=localhost;port=5432;dbname=curso_php
```

---

# Conexão no Node.js

No Node.js a conexão é criada através do objeto `Client`.

Ele recebe um objeto contendo todas as informações do banco.

Exemplo:

* host
* port
* database
* user
* password

Após configurar esses dados basta chamar:

```javascript
await client.connect();
```

---

# 🔒 Segurança - Prepared Statements

Esta é uma das partes mais importantes do curso.

Nunca concatene valores diretamente em uma consulta SQL.

❌ Errado

```php
$sql = "SELECT * FROM produtos WHERE nome = '$nome'";
```

```javascript
const sql = `SELECT * FROM produtos WHERE nome = '${nome}'`;
```

Esses exemplos permitem ataques conhecidos como **SQL Injection**.

---

## Forma correta

### PHP

```php
$stmt = $pdo->prepare(
    "SELECT * FROM produtos WHERE nome = ?"
);

$stmt->execute([$nome]);
```

### Node.js

```javascript
await client.query(
    "SELECT * FROM produtos WHERE nome = $1",
    [nome]
);
```

Observe uma diferença importante:

| PHP | Node.js             |
| --- | ------------------- |
| `?` | `$1`, `$2`, `$3`... |

No Node.js cada parâmetro recebe um número indicando sua posição.

---

# CRUD

Nesta aula serão implementadas as quatro operações fundamentais.

## CREATE

Inserção de registros utilizando `INSERT`.

---

## READ

Consulta de registros utilizando `SELECT`.

---

## UPDATE

Atualização de registros utilizando `UPDATE`.

---

## DELETE

Remoção de registros utilizando `DELETE`.

Todas as operações deverão utilizar consultas parametrizadas.

---

# 📂 Arquivos da Aula

Durante esta aula serão desenvolvidos dois arquivos.

```text
aula10-pdo-postgresql.php

aula10-node-postgresql.js
```

Ambos implementarão exatamente as mesmas operações.

---

# Node.js e Async/Await

Uma diferença importante é que o Node.js trabalha de forma assíncrona.

Por isso utilizamos:

```javascript
async function main() {

    await client.connect();

}
```

O `await` faz o programa esperar o término da operação antes de continuar.

Sem ele, diversas operações poderiam acontecer fora da ordem esperada.

---

# Encerrando a conexão

No PHP não é necessário fechar explicitamente a conexão.

Ela é encerrada automaticamente quando o script termina.

No Node.js isso deve ser feito manualmente.

```javascript
await client.end();
```

Essa prática libera os recursos utilizados pela conexão.

---

# 🏋️ Exercício Prático

## PHP

Desenvolva uma aplicação utilizando **PDO** capaz de:

* conectar ao PostgreSQL;
* inserir um produto;
* consultar todos os produtos;
* atualizar um registro;
* remover um registro.

Utilize apenas Prepared Statements.

---

## Node.js

Desenvolva a mesma aplicação utilizando o pacote **pg**.

Ela deverá:

* conectar ao PostgreSQL;
* inserir um produto;
* listar todos os produtos;
* realizar consultas com filtros;
* atualizar registros;
* remover registros;
* encerrar corretamente a conexão.

---

# 🚀 Desafio Extra

Após concluir a aula tente implementar:

* busca por nome;
* ordenação por preço;
* filtro por quantidade;
* atualização de estoque;
* exclusão por ID.

Implemente essas funcionalidades tanto em PHP quanto em Node.js.

---

# 💡 Boas Práticas

Sempre que desenvolver aplicações que utilizem banco de dados:

* Nunca concatene dados diretamente na SQL.
* Utilize consultas parametrizadas.
* Organize o código em funções.
* Trate possíveis erros utilizando `try/catch`.
* Feche conexões quando necessário.
* Utilize nomes claros para variáveis e consultas.

Essas práticas serão utilizadas durante todo o restante do curso.

---

# 📚 O que você aprendeu

Ao concluir esta aula você será capaz de:

* Conectar aplicações PHP ao PostgreSQL utilizando PDO.
* Conectar aplicações Node.js ao PostgreSQL utilizando o pacote `pg`.
* Configurar o driver `pdo_pgsql`.
* Instalar e utilizar o pacote `pg`.
* Executar comandos SQL através das duas linguagens.
* Implementar operações de CRUD.
* Utilizar consultas parametrizadas.
* Compreender as diferenças entre `?` (PHP) e `$1`, `$2`... (Node.js).
* Trabalhar com programação assíncrona utilizando `async/await`.
* Desenvolver aplicações mais seguras evitando SQL Injection.

Na próxima aula começaremos a integrar esses conhecimentos à construção de aplicações completas, utilizando formulários, banco de dados e organização de código em projetos cada vez mais próximos da realidade do mercado.
