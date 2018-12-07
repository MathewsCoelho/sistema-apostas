CREATE TABLE usuario
(
    id_usuario serial PRIMARY KEY,
    nome character varying(30),
    cpf character varying(25),
    email character varying(50),
    senha character varying(50),
    status character varying(6),
    ativo int
);

CREATE TABLE etapa
(
    id_etapa serial PRIMARY KEY,
    local character varying(50),
    id_vencedor int,
    ativo int
);

CREATE TABLE aposta
(
    id_aposta serial PRIMARY KEY,
    data_aposta date ,
    id_usuario int REFERENCES usuario (id_usuario),
    id_etapa int  REFERENCES etapa (id_etapa),
    ativo int
);
    
CREATE TABLE cavalo
(
    id_cavalo serial PRIMARY KEY,
    numero int,
    ativo int,
    nome character varying(50)
);

CREATE TABLE ranking
(
    id_ranking serial PRIMARY KEY,
    id_usuario int REFERENCES usuario (id_usuario),
    pontos int
);

CREATE TABLE corredor
(
    id_corredor serial PRIMARY KEY,
    id_cavalo int REFERENCES cavalo (id_cavalo),
    id_etapa int REFERENCES etapa (id_etapa)
);


INSERT INTO usuario (nome, cpf, email, senha, status, ativo) 
VALUES ('Admin', '04053254019', 'admin@gmail.com', 'admin', 2, 1);


INSERT INTO cavalo (numero, nome, ativo) VALUES (1, 'Pé de Pano', 1);
INSERT INTO cavalo (numero, nome, ativo) VALUES (2, 'Chumbinho', 1);
INSERT INTO cavalo (numero, nome, ativo) VALUES (3, 'Batatinha', 1);
INSERT INTO cavalo (numero, nome, ativo) VALUES (4, 'Rodolfo', 1);
INSERT INTO cavalo (numero, nome, ativo) VALUES (5, 'Platão', 1);
INSERT INTO cavalo (numero, nome, ativo) VALUES (6, 'Plebeu', 1);
INSERT INTO cavalo (numero, nome, ativo) VALUES (7, 'Jacondino', 1);
INSERT INTO cavalo (numero, nome, ativo) VALUES (8, 'Joao', 1);
INSERT INTO cavalo (numero, nome, ativo) VALUES (9, 'Junior', 1);
INSERT INTO cavalo (numero, nome, ativo) VALUES (10, 'Antonio', 1);

INSERT INTO etapa (local, ativo) VALUES ('Pelotas', 1);
INSERT INTO etapa (local, ativo) VALUES ('Rio Grande', 1);
INSERT INTO etapa (local, ativo) VALUES ('Jaguarão', 1);
INSERT INTO etapa (local, ativo) VALUES ('Canguçu', 1);
INSERT INTO etapa (local, ativo) VALUES ('Viamão', 1);