CREATE DATABASE gestion_envios;
USE gestion_envios;

CREATE TABLE envios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(50) NOT NULL,
    descripcion TEXT NOT NULL,
    destino VARCHAR(100) NOT NULL
);