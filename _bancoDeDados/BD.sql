CREATE DATABASE Perfumes_Cheirosos;
use Perfumes_Cheirosos;

CREATE TABLE Usuario (
    IdUsuario INT AUTO_INCREMENT,
    nomeUsuario VARCHAR(100) NOT NULL,
    loginUsuario VARCHAR(255) NOT NULL,
    senhaUsuario VARCHAR(255) NOT NULL,
    PRIMARY KEY(IdUsuario)
);

INSERT INTO Usuario (nomeUsuario, loginUsuario, senhaUsuario) VALUES
('Jamily', 'jamily123', '123456'),('Jivago','jivago123','123456'),('teste', 'teste123','123456'); 


CREATE TABLE CategoriaPerfume (
    IdCategoriaPerfume INT AUTO_INCREMENT,
    categoriaPerfumeNome VARCHAR(200) NOT NULL,
    categoriaPerfumeDescricao VARCHAR(1000),
    PRIMARY KEY(IdCategoriaPerfume)
);


INSERT INTO CategoriaPerfume (IdCategoriaPerfume, categoriaPerfumeNome) VALUES
('Floral', 'Fragrâncias florais suaves e agradáveis.'),
('Cítrico', 'Fragrâncias cítricas refrescantes.'),
('Amadeirado', 'Fragrâncias amadeiradas e sofisticadas.'),
('Oriental', 'Fragrâncias orientais sensuais e exóticas.'),
('Verde', 'Fragrâncias frescas e herbais.'),
('Aquático', 'Fragrâncias aquáticas, leves e limpas.');


CREATE TABLE Perfume (
    IdPerfume INT AUTO_INCREMENT,
    IdCategoriaPerfume INT NOT NULL,
    nomePerfume VARCHAR(255) NOT NULL,
    fragancia VARCHAR(255) NOT NULL,
    descricao TEXT,
    notasOlfativas TEXT,
    marca VARCHAR(255) NOT NULL,
    volume DECIMAL(10, 2) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    anoLancamento INT,
    PRIMARY KEY(IdPerfume),
    FOREIGN KEY(IdCategoriaPerfume) REFERENCES CategoriaPerfume(IdCategoriaPerfume)
);
