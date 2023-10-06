
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



