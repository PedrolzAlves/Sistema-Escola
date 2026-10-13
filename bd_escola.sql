-- Banco de dados do sistema Escola
-- Reconstruído a partir de conexao.php, cadastro.php, cadastro_feito.php,
-- consulta.php e consulta_feita.php

CREATE DATABASE IF NOT EXISTS bd_escola
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_general_ci;

USE bd_escola;

-- Turmas: listadas no <select> de cadastro.php e consulta.php
CREATE TABLE turma (
  Cod_turma  INT          NOT NULL AUTO_INCREMENT,
  Nome_turma VARCHAR(50)  NOT NULL,
  PRIMARY KEY (Cod_turma)
) ENGINE=InnoDB;

-- Alunos: inseridos por cadastro_feito.php e listados por consulta_feita.php
CREATE TABLE aluno (
  Cod_aluno  INT          NOT NULL AUTO_INCREMENT,
  Nome_aluno VARCHAR(100) NOT NULL,
  Telefone   VARCHAR(10)  NOT NULL,  -- máscara #####-#### (maxlength 10)
  Email      VARCHAR(100) NOT NULL,
  Cod_turma  INT          NOT NULL,
  PRIMARY KEY (Cod_aluno),
  CONSTRAINT fk_aluno_turma
    FOREIGN KEY (Cod_turma) REFERENCES turma (Cod_turma)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
) ENGINE=InnoDB;

-- O sistema não tem tela para cadastrar turmas; elas precisam existir antes
INSERT INTO turma (Nome_turma) VALUES
  ('1º Ano A'),
  ('1º Ano B'),
  ('2º Ano A'),
  ('2º Ano B'),
  ('3º Ano A');
