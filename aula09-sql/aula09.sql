-- =========================================
-- Aula 9 - MySQL na prática (adaptado para PostgreSQL)
-- =========================================

-- ---------- 1. Criar o banco de dados ----------
-- Execute este comando fora de uma transação, conectado ao banco padrão (postgres)
CREATE DATABASE curso_php;

-- ---------- 2. Conectar ao banco recém-criado ----------
-- No psql, use o comando de barra (não é SQL puro):
-- \c curso_php

-- ---------- 3. Criar a tabela produtos ----------
CREATE TABLE produtos (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    quantidade INT NOT NULL
);

-- ---------- 4. Inserir os 3 produtos ----------
INSERT INTO produtos (nome, preco, quantidade) VALUES
    ('Caneta', 5.00, 3),
    ('Caderno', 18.50, 2),
    ('Mochila', 129.90, 1);

-- ---------- 5. Conferir todos os registros ----------
SELECT * FROM produtos;

-- ---------- 6. Filtrar produtos com quantidade > 1 ----------
SELECT * FROM produtos WHERE quantidade > 1;

-- ---------- Extras úteis (comandos de terminal do psql, não SQL) ----------
-- \l          -> lista bancos de dados
-- \dt         -> lista tabelas do banco atual
-- \d produtos -> mostra a estrutura (colunas/tipos) da tabela produtos
-- \q          -> sai do psql

-- ---------- Bônus: outros comandos CRUD para praticar depois ----------

-- UPDATE (atualizar preço da Caneta)
UPDATE produtos SET preco = 6.50 WHERE nome = 'Caneta';

-- DELETE (remover pelo id)
-- DELETE FROM produtos WHERE id = 1;

-- SELECT ordenado por preço, do mais caro ao mais barato
SELECT nome, preco FROM produtos ORDER BY preco DESC;

-- SELECT contando quantos produtos existem
SELECT COUNT(*) FROM produtos;

-- SELECT somando o valor total do estoque (preco * quantidade)
SELECT SUM(preco * quantidade) AS valor_total_estoque FROM produtos;