CREATE DATABASE rutasappdemo;
USE rutasappdemo;

CREATE TABLE clientes
(
	idcliente 		INT AUTO_INCREMENT PRIMARY KEY,
    apellidos		VARCHAR(30) 	NOT NULL,
    nombres 		VARCHAR(30)		NOT NULL,
    telefono 		CHAR(9) 		NOT NULL,
    preferencias	JSON			NULL
)ENGINE = INNODB;