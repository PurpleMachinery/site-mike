DROP DATABASE IF EXISTS red_box;
CREATE DATABASE IF NOT EXISTS red_box;
USE red_box;
CREATE TABLE autores(
	id_autor INT NOT NULL UNIQUE AUTO_INCREMENT,
    nome NVARCHAR(40) NOT NULL,
    
    PRIMARY KEY (id_autor)
);
CREATE TABLE editoras(
	id_editora INT NOT NULL UNIQUE AUTO_INCREMENT,
    nome NVARCHAR(40) NOT NULL,
    
    PRIMARY KEY (id_editora)
);
CREATE TABLE livros(
	id_livro INT NOT NULL UNIQUE AUTO_INCREMENT,
	isbn NVARCHAR(13) NOT NULL UNIQUE,
	titulo NVARCHAR(100) NOT NULL,
    fk_autor INT NOT NULL REFERENCES id_autor,
    fk_editora INT NOT NULL REFERENCES id_editora,
    imgCapa NVARCHAR(30) DEFAULT 'without' NOT NULL,
    anoEdicao YEAR NOT NULL,
    download NVARCHAR(100) UNIQUE,
    
    PRIMARY KEY (id_livro)
);

ALTER DATABASE red_box CHARSET = UTF8 COLLATE = utf8_general_ci;

INSERT INTO editoras
(nome) VALUES
('Arqueiro'),
('Seguinte'),
('ALEPH');

INSERT INTO autores
(nome) VALUES
('Patrick Rothfuss'),
('Raymond E. Feist'),
('Victoria Aveyard'),
('Ursula K. Le Guin'),
('William Gibson');

INSERT INTO livros
(isbn, titulo, fk_autor, imgCapa, fk_editora, anoEdicao, download) VALUES
('9788599296493','O Nome do Vento - A Crônica do Matador Rei - Primeiro Dia',1, 'onomedovento', 1, 2009, 'O Nome Do Vento - Patrick Rothfuss.epub'),
('9788580410327','O Temor do Sábio – a Crônica do Matador do Rei - Segundo Dia',1, 'otemordosabio',1, 2011, null),
('9788580415506', 'Mago - Aprendiz', 2, 'aprendiz',1, 2016, null),
('9788565765695', 'A Rainha Vermelha', 3, 'arainhavermelha',2, 2015, null),
('9788580415216','O Feiticeiro de Terramar - Ciclo Terramar', 4, 'ofeiticeiro',1, 1968, null),
('9788576573005','Neuromancer', 5, 'neuromancer',3, 2016, null);