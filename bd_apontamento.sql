CREATE DATABASE banco_apontamento;

USE banco_apontamento;

drop database banco_apontamento;

/* ROTEIRO 

1 - sair do almoxarifado
2 - usinagem
3 - rebarbar
4 - lavagem
5 - polimento
6 - inspeção
7 - esterialização
8 - estoque
*/



/*TABELAS*/

/* TABELA - CODIGOS*/
CREATE TABLE cod(
	codigo INT PRIMARY KEY 
);

/* TABELA - OPERAÇÕES */
CREATE TABLE operacao(
    tipo_op VARCHAR(25) PRIMARY KEY 
);

/* TABELA - MAQUINAS */
CREATE TABLE maquina(
	nome_maquina VARCHAR(25) PRIMARY KEY ,
    tipo_de_maquina VARCHAR(10)
);

/* TABELA - OPERADORES */
CREATE TABLE operador(
	id_operador INT PRIMARY KEY,
    nome_operador VARCHAR(50) 
);

/* TABELA - TEMPO */
CREATE TABLE tempoinicio(
	hinicio TIME PRIMARY KEY 
);

CREATE TABLE datainicio(
	dinicio DATE PRIMARY KEY 
);

CREATE TABLE tempofim(
	hfim TIME PRIMARY KEY 
);

CREATE TABLE datafim(
	dfim DATE PRIMARY KEY 
);

CREATE TABLE quantidade(
	quant INT PRIMARY KEY
);

CREATE TABLE n_operacao(
	n_op INT PRIMARY KEY NOT NULL,
    tipo_op VARCHAR(25),
    
    FOREIGN KEY (tipo_op) REFERENCES operacao(tipo_op)
);

/* TABELA - NUMERO ORDEM */
CREATE TABLE nop(
	numero_ordem VARCHAR(12) PRIMARY KEY NOT NULL,
	codigo INT,
    n_op INT,
    tipo_op VARCHAR(25),
    quant INT,
        
    FOREIGN KEY (codigo) REFERENCES cod(codigo),
    FOREIGN KEY (n_op) REFERENCES n_operacao(n_op),
    FOREIGN KEY (tipo_op) REFERENCES operacao(tipo_op),
	FOREIGN KEY (quant) REFERENCES quantidade(quant)
);


/* TABELA - NUMERO OPERAÇÕES */
-- INICIO VALORES
/*NÚMERO ORDENS*/
INSERT INTO nop(numero_ordem) VALUES
('000001SA001'),
('000002SA001'),
('000003SA001'),
('000004SA001');

/*NUMERO CODIGOS*/
INSERT INTO cod(codigo) VALUES
(111222333),
(222333444),
(333444555),
(444555666);

/*NUMERO OPERAÇÕES*/
INSERT INTO n_operacao(n_op) VALUES
(2),
(3),
(4),
(5),
(6),
(7),
(8);

INSERT INTO operacao(tipo_op) VALUES
('Usinagem'),
('Rebarbar'),
('Lavagem'),
('Polimento'),
('Inspeção'),
('Esterilização'),
('Estoque');

/*MÁQUINAS*/
INSERT INTO maquina(tipo_de_maquina, nome_maquina) VALUES
('L20', 'M-01'),
('L20_2', 'M-02'),
('C13', 'M-03'),
('C14', 'M-04'),
('C15', 'M-05');

/*OPERADORES*/
INSERT INTO operador(nome_operador, id_operador) VALUES
('Enzo Zamineli', 1),
('Geraldo', 2),
('Paulo', 3),
('Guilherme', 4);



