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
    id_cavalo int,
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
    ativo int
);

CREATE TABLE ranking
(
    id_ranking serial PRIMARY KEY,
    posicao int,
    id_usuario int REFERENCES usuario (id_usuario),
    pontos int
);
