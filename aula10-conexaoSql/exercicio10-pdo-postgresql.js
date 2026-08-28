/**
 * Aula 10 - Node.js + PostgreSQL com o pacote "pg"
 *
 * Pré-requisito: instalar o driver
 *   npm install pg
 */

const { Client } = require("pg");

// ---------- 1. CONEXÃO ----------

const client = new Client({
  host: "127.0.0.1",
  port: 5432,
  database: "curso_php",
  user: "postgres",
  password: "sua_senha_aqui", // ajuste para a senha do seu usuário postgres
});

async function main() {
  try {
    await client.connect();
    console.log("Conexão estabelecida com sucesso!\n");

    // ---------- 2. INSERT (Create) ----------
    // Prepared statement: use $1, $2, $3... (não "?" como no PHP)

    const sqlInsert = "INSERT INTO produtos (nome, preco, quantidade) VALUES ($1, $2, $3)";
    await client.query(sqlInsert, ["Borracha", 2.50, 10]);
    console.log("Produto inserido com sucesso!\n");

    // ---------- 3. SELECT (Read) ----------

    const sqlSelect = "SELECT * FROM produtos ORDER BY id";
    const resultado = await client.query(sqlSelect);
    const produtos = resultado.rows;

    console.log("===== PRODUTOS CADASTRADOS =====");
    produtos.forEach((produto) => {
      console.log(`#${produto.id} - ${produto.nome} | R$ ${produto.preco} | Qtd: ${produto.quantidade}`);
    });

    // ---------- 4. SELECT com WHERE (parametrizado) ----------

    const sqlFiltro = "SELECT * FROM produtos WHERE quantidade > $1";
    const resultadoFiltro = await client.query(sqlFiltro, [1]);
    const produtosFiltrados = resultadoFiltro.rows;

    console.log("\n===== PRODUTOS COM QUANTIDADE > 1 =====");
    produtosFiltrados.forEach((produto) => {
      console.log(`${produto.nome} (qtd: ${produto.quantidade})`);
    });

    // ---------- 5. UPDATE ----------

    const sqlUpdate = "UPDATE produtos SET preco = $1 WHERE nome = $2";
    await client.query(sqlUpdate, [7.00, "Caneta"]);
    console.log("\nPreço da Caneta atualizado!");

    // ---------- 6. DELETE ----------

    const sqlDelete = "DELETE FROM produtos WHERE nome = $1";
    await client.query(sqlDelete, ["Borracha"]);
    console.log("Borracha removida!");

    // ---------- 7. Conferindo o resultado final ----------

    const resultadoFinal = await client.query("SELECT * FROM produtos ORDER BY id");
    console.log("\n===== ESTADO FINAL DA TABELA =====");
    resultadoFinal.rows.forEach((produto) => {
      console.log(`#${produto.id} - ${produto.nome} | R$ ${produto.preco} | Qtd: ${produto.quantidade}`);
    });
  } catch (erro) {
    console.error("Erro:", erro.message);
  } finally {
    // ---------- 8. Fechando a conexão ----------
    // Diferente do PHP (que não precisa fechar explicitamente),
    // em Node.js é importante encerrar a conexão manualmente.
    await client.end();
  }
}

main();