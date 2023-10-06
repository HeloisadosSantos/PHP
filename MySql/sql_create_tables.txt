create table produtos (
     codigo_produto smallint NOT NULL,
     nome_produto varchar(80) NOT NULL,
     descricao_produto text,
     preco float NOT NULL,
     peso float,
     cod_categoria smallint NOT NULL,
     cod_subcategoria smallint NOT NULL,
     adicionais text
);


create table categorias (
     codigo_categoria smallint NOT NULL,
     nome_categoria varchar(60) NOT NULL
);


create table subcategorias (
      codigo_subcategoria smallint NOT NULL,
      nome_subcategoria varchar(60) NOT NULL,
      codigo_categoria smallint NOT NULL
);



create table usuarios
(
	username varchar(10) NOT NULL,
	senha varchar(10) NOT NULL,
	nome varchar(80) NOT NULL,
	email varchar(80) NOT NULL,
	cidade varchar(40) NOT NULL,
	estado char(2) NOT NULL,
	primary key(username)
);
