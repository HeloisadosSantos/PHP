
INSERT INTO produtos
   (codigo_produto,nome_produto, preco, cod_categoria, cod_subcategoria) 
VALUES (2, 'Camiseta do Flamengo', 49.95, 5, 2 );


INSERT INTO categorias VALUES (1 , 'Eletrodomésticos');
INSERT INTO categorias VALUES (2 , 'Cama, Mesa e Banho');
INSERT INTO categorias VALUES (3 , 'Áudio e Vídeo');
INSERT INTO categorias VALUES (4 , 'Informática');
INSERT INTO categorias VALUES (5 , 'Artigos Esportivos');
INSERT INTO subcategorias VALUES (1 , 'Bolas de Futebol',  5);
INSERT INTO subcategorias VALUES (2 , 'Camisetas de Futebol',  5);
INSERT INTO subcategorias VALUES (3 , 'Tênis e Chuteiras',  5);
INSERT INTO subcategorias VALUES (4 , 'Raquetes de Tênis',  5);
INSERT INTO subcategorias VALUES (1 , 'DVDs',  3);
INSERT INTO subcategorias VALUES (2 , 'CDs',  3);
INSERT INTO subcategorias VALUES (3 , 'Aparelhos de Som',  3);


INSERT INTO subcategorias VALUES (1 , 'Notebooks' , 4);
INSERT INTO subcategorias VALUES (2 , 'Monitores' , 4);
INSERT INTO subcategorias VALUES (1 , 'Refrigeradores' , 1);
INSERT INTO produtos VALUES (
     3,
     'Notebook Compaq Presário',
     'Computador portátil com processador Pentium III 500 MHz',
     3300,
     3.5,
     4,
     1,
    'Com 32MB de memória RAM e HD de 4.3GB' );