
CREATE TABLE produtos(
codigo_produto smallint NOT NULL,
nome_produto varchar(80) NOT NULL,
descricao_produto text,
preco float NOT NULL,
peso float,
cod_categoria smallint NOT NULL,
cod_subcategoria smallint NOT NULL,
adicionais text
);

