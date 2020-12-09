drop database if exists banco_escola;

create database banco_escola;

use banco_escola;

CREATE TABLE usuario(
	cpf_usuario      INT	 (11) NOT NULL,
	nome_usuario     VARCHAR (30) NOT NULL,
	login_usuario    VARCHAR (30) NOT NULL,
	senha_usuario    VARCHAR (30) NOT NULL,
	resposta_usuario VARCHAR (15) NOT NULL,
	primary key (cpf_usuario)
);

CREATE TABLE aluno(
	ra_aluno       INT     (15) NOT NULL,
	rg_aluno       INT     (15) NOT NULL,
	nome_aluno     VARCHAR (30) NOT NULL,
	sala_aluno     INT     (2)  NOT NULL,
	periodo_aluno  VARCHAR (10) NOT NULL,
	turma_aluno    VARCHAR (20) NOT NULL,
	endereco_aluno VARCHAR (30) NOT NULL,
	serie_aluno    INT     (1)  NOT NULL,
	telefone_aluno INT     (11) NOT NULL,
	cpf_usuario    INT          NOT NULL,
	primary key (ra_aluno),
	foreign key (cpf_usuario) references usuario(cpf_usuario)
);

CREATE TABLE funcionario(
	codigo_funcionario    INT     (5)  NOT NULL,
	rg_funcionario        INT     (11) NOT NULL,
	cpf_funcionario       INT     (11) NOT NULL,
	materia_funcionario   VARCHAR (30) NOT NULL,
	endereco_funcionario  VARCHAR (50) NOT NULL,
	nome_funcionario      VARCHAR (30) NOT NULL,
	horario_funcionario   VARCHAR (20) NOT NULL,
	cpf_usuario           INT          NOT NULL,
	primary key (codigo_funcionario),
	foreign key (cpf_usuario) references usuario(cpf_usuario)
);

CREATE TABLE emprestimo(
	codigo_emprestimo      INT (5) NOT NULL,
	dt_retirada_emprestimo DATE    NOT NULL,
	ra_aluno               INT     NOT NULL,
	codigo_funcionario INT NOT NULL,
	PRIMARY KEY (codigo_emprestimo),
	FOREIGN KEY (ra_aluno) references aluno(ra_aluno),
	FOREIGN KEY (codigo_funcionario) REFERENCES funcionario(codigo_funcionario)
);

CREATE TABLE livro(
	codigo_livro     INT     (5)  NOT NULL,
	nome_livro       VARCHAR (30) NOT NULL,
	quantidade_livro INT     (5)  NOT NULL,
	editora_livro    VARCHAR (30) NOT NULL,
	autor_livro      VARCHAR (30) NOT NULL,
	data_livro       DATE         NOT NULL,
	livro_genero     VARCHAR (30) NOT NULL,
	PRIMARY KEY (codigo_livro)
);
	
 CREATE TABLE noticia(
	id_noticia INT         NOT NULL AUTO_INCREMENT,
	noticia    TEXT        NOT NULL               ,
	data       TIMESTAMP            DEFAULT  CURRENT_TIMESTAMP,
	PRIMARY KEY (id_noticia)
);

CREATE TABLE periodo(
	manha TINYINT DEFAULT 0,
	tarde TINYINT DEFAULT 0,
	noite TINYINT DEFAULT 0,
	id_noticia INT NOT NULL AUTO_INCREMENT,
	FOREIGN KEY (id_noticia) REFERENCES noticia(id_noticia)
);