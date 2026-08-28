<?php

/**
 * Aula 10 - PHP + PostgreSQL com PDO
 *
 * Pré-requisito: extensão pdo_pgsql habilitada no PHP.
 * Verifique com: php -m | grep pdo_pgsql
 * Se não aparecer, instale com: sudo apt install php-pgsql
 */

// ---------- 1. CONEXÃO ----------

$host = "127.0.0.1";
$porta = "5432";
$banco = "curso_php";
$usuario = "postgres";
$senha = "sua_senha_aqui"; // ajuste para a senha do seu usuário postgres

try {
    $dsn = "pgsql:host={$host};port={$porta};dbname={$banco}";
    $pdo = new PDO($dsn, $usuario, $senha);

    // Faz o PDO lançar exceções em caso de erro (boa prática)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão estabelecida com sucesso!\n\n";
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage() . "\n");
}

// ---------- 2. INSERT (Create) ----------
// Sempre use prepared statements (com ?) - nunca concatene valores direto na query!

$sqlInsert = "INSERT INTO produtos (nome, preco, quantidade) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sqlInsert);
$stmt->execute(["Borracha", 2.50, 10]);

echo "Produto inserido com sucesso!\n\n";

// ---------- 3. SELECT (Read) ----------

$sqlSelect = "SELECT * FROM produtos ORDER BY id";
$stmt = $pdo->query($sqlSelect);
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "===== PRODUTOS CADASTRADOS =====\n";
foreach ($produtos as $produto) {
    echo "#{$produto['id']} - {$produto['nome']} | R$ {$produto['preco']} | Qtd: {$produto['quantidade']}\n";
}

// ---------- 4. SELECT com WHERE (parametrizado) ----------

$sqlFiltro = "SELECT * FROM produtos WHERE quantidade > ?";
$stmt = $pdo->prepare($sqlFiltro);
$stmt->execute([1]);
$produtosFiltrados = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "\n===== PRODUTOS COM QUANTIDADE > 1 =====\n";
foreach ($produtosFiltrados as $produto) {
    echo "{$produto['nome']} (qtd: {$produto['quantidade']})\n";
}

// ---------- 5. UPDATE ----------

$sqlUpdate = "UPDATE produtos SET preco = ? WHERE nome = ?";
$stmt = $pdo->prepare($sqlUpdate);
$stmt->execute([7.00, "Caneta"]);

echo "\nPreço da Caneta atualizado!\n";

// ---------- 6. DELETE ----------

$sqlDelete = "DELETE FROM produtos WHERE nome = ?";
$stmt = $pdo->prepare($sqlDelete);
$stmt->execute(["Borracha"]);

echo "Borracha removida!\n";

// ---------- 7. Conferindo o resultado final ----------

$stmt = $pdo->query("SELECT * FROM produtos ORDER BY id");
$produtosFinal = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "\n===== ESTADO FINAL DA TABELA =====\n";
foreach ($produtosFinal as $produto) {
    echo "#{$produto['id']} - {$produto['nome']} | R$ {$produto['preco']} | Qtd: {$produto['quantidade']}\n";
}

// ---------- 8. Fechando a conexão ----------
// Em PHP, não existe "close()" explícito no PDO — basta deixar a variável
// sair de escopo, ou definir como null quando quiser liberar antes do fim do script.
$pdo = null;