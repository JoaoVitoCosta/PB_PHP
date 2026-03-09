create database mvc_usuario;
use mvc_usuario;

CREATE TABLE usuarios(
	ID integer auto_increment primary key,
    TITULO varchar (255),
    AUTOR varchar (255),
    DATAPUBLICACAO varchar (255),
    EDITORA varchar (255)
);
SELECT * FROM usuarios;