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
/* TABELA - OPERADORES */
CREATE TABLE operador(
	id_operador INT PRIMARY KEY,
    nome_operador VARCHAR(50)
);

/* TABELA - MAQUINA */
CREATE TABLE maquina(
	nome_maquina VARCHAR(25), 
    tipo_de_maquina VARCHAR(10),
    id_operador INT,
    
    FOREIGN KEY (id_operador) REFERENCES operador(id_operador)
);

/* TABELA - OPERACAO */
CREATE TABLE operacao(
	id_operacao TINYINT PRIMARY KEY,
    nome_operacao VARCHAR(50)
);

/* TABELA - NUMERO ORDEM */
CREATE TABLE nop(
	numero_ordem VARCHAR(12) PRIMARY KEY NOT NULL,
	codigo INT,
    quant TINYINT,
	id_operacao TINYINT,

	FOREIGN KEY (id_operacao) REFERENCES operacao(id_operacao)
);

/* TABELA - TEMPO */
CREATE TABLE tempoinicio(
	hinicio TIME, 
	dinicio DATE, 
	hfim TIME,
    dfim DATE 
);


-- INICIO VALORES
/*NÚMERO ORDENS*/
INSERT INTO nop(numero_ordem, codigo, quant) VALUES
('000001SA001', 111222333, 46),
('000002SA001', 222333444, 50),
('000003SA001', 333444555, 100),
('000004SA001', 444555666, 70);

/*NUMERO OPERAÇÕES*/
INSERT INTO operacao(id_operacao, nome_operacao) VALUES
(2, 'Usinagem'),
(3, 'Rebarbar'),
(4, 'Lavagem'),
(5, 'Polimento'),
(6, 'Inspeção'),
(7, 'Esterialização'),
(8, 'Estoque');

/*MÁQUINAS*/
INSERT INTO maquina(tipo_de_maquina, nome_maquina) VALUES
('L20', 'M-01'),
('L20_2', 'M-02'),
('C13', 'M-03'),
('C14', 'M-04'),
('C15', 'M-05'),
('ROMI_700', 'M-06'),
('ROMI_650', 'M-07'),
('BROTHER', 'M-08')
;

/*OPERADORES*/
INSERT INTO operador(id_operador, nome_operador) VALUES
(1, 'Enzo Zamineli'),
(2, 'Geraldo'),
(3, 'Paulo'),
(4, 'Guilherme');
