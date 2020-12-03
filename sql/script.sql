CREATE DATA BASE atividade3;

USE atividade3;

CREATE TABLE cadastro(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL,
    ano_curso INTEGER NOT NULL,
    materia_preferida VARCHAR(50) NOT NULL
);