DROP DATABASE IF EXISTS red_box;
CREATE DATABASE IF NOT EXISTS red_box;
USE red_box;
CREATE TABLE livros(
	id_livro INT NOT NULL UNIQUE AUTO_INCREMENT,
	isbn NVARCHAR(13) NOT NULL UNIQUE,
	titulo NVARCHAR(100) NOT NULL,
    autor NVARCHAR(40) NOT NULL,
    editora NVARCHAR(30) NOT NULL,
    imgCapa NVARCHAR(30) DEFAULT 'without' NOT NULL,
    anoEdicao YEAR NOT NULL,
    
    PRIMARY KEY (id_livro)
);

ALTER DATABASE red_box CHARSET = UTF8 COLLATE = utf8_general_ci;

INSERT INTO livros
(isbn, titulo, autor, imgCapa, editora, anoEdicao) VALUES
('9788599296493','O Nome do Vento - A Crônica do Matador Rei - Primeiro Dia','Patrick Rothfuss', 'onomedovento', 'Arqueiro', 2009),
('9788580410327','O Temor do Sábio – a Crônica do Matador do Rei - Segundo Dia','Patrick Rothfuss', default,'Arqueiro', 2011),
('9788580415506', 'Mago - Aprendiz', 'Raymond E. Feist', 'Arqueiro',default, 2016),
('9788565765695', 'A Rainha Vermelha', 'Victoria Aveyard', 'Seguinte',default, 2015),
('9788580415216','O Feiticeiro de Terramar - Ciclo Terramar', 'Ursula K. Le Guin', 'Arqueiro', default,1968),
('9788576573005','Neuromancer', 'Gibson, William', 'ALEPH', default,2016);