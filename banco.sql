
CREATE DATABASE fastdrive;
USE fastdrive;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    telefone VARCHAR(20),
    senha VARCHAR(255),
    tipo ENUM('cliente','admin') DEFAULT 'cliente',
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO usuarios (nome,email,telefone,senha,tipo)
VALUES ('Admin','admin@fastdrive.com','11999999999',
'$2y$10$wH7QY5xV8vF4Q3s2H6jZ5e3bG8m1k9YhR2XcLzP8uQeT1nYkWfM3S','admin');
