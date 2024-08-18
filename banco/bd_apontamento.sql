CREATE SCHEMA banco_tcc_apont;

USE banco_tcc_apont;

CREATE TABLE operadores(
	id_operador INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    nome_operador VARCHAR(50) NOT NULL
);

CREATE TABLE maquina(
	id_maquina INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    nome_maquina VARCHAR(50) NOT NULL
);

CREATE TABLE operacao(
	id_operacao INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    nome_operacao VARCHAR(50) NOT NULL	
);

CREATE TABLE nop(
	numero_ordem VARCHAR(12) PRIMARY KEY, 
	codigo INT UNSIGNED NOT NULL, 
	quantidade INT UNSIGNED NOT NULL,
    operacao_id INT UNSIGNED,
    maquina_id INT UNSIGNED,
    operador_id INT UNSIGNED,
    
    FOREIGN KEY (maquina_id) REFERENCES maquina(id_maquina),
    FOREIGN KEY (operacao_id) REFERENCES operacao(id_operacao),
    FOREIGN KEY (operador_id) REFERENCES operadores(id_operador)
);


-- DADOS

-- OPERADORES
INSERT INTO operadores(nome_operador) VALUES
("Enzo Zamineli"),
("Vitor Assalin"),
("Rodrigo Coelho de Amo");

-- MAQUINA
INSERT INTO maquina(nome_maquina) VALUES
("L20"),
("C16"),
("C15");

-- OPERACAO
INSERT INTO operacao(nome_operacao) VALUES
("Usinagem/Torneamento"),
("Rebarbar"),
("Polimento");

-- ORDEM (PRINCIPAL)
INSERT INTO nop(numero_ordem, codigo, quantidade, operacao_id, maquina_id, operador_id) VALUES
("004234SA001", 111222333, 200, 1, 1, 3),
("002234SA001", 111222334, 300, 3, 2, 2),
("003234SA001", 111222333, 200, 2, 3, 1);


SELECT 
    numero_ordem, 
    quantidade, 
    nome_operacao, 
    nome_maquina, 
    nome_operador
FROM 
    nop
INNER JOIN 
    operacao ON nop.operacao_id = operacao.id_operacao
INNER JOIN 
    maquina ON nop.maquina_id = maquina.id_maquina
INNER JOIN
	operadores ON nop.operador_id = operadores.id_operador
ORDER BY numero_ordem ASC;


SELECT * FROM OPERACAO;
SELECT * FROM maquina;
select * from operadores;


-- drop schema banco_tcc_apont;

