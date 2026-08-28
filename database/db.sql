CREATE DATABASE IF NOT EXISTS crud_ifood;

USE crud_ifood;

CREATE TABLE clientes(
    cliente_id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    telefone VARCHAR(100),
    endereco VARCHAR(100)
);

CREATE TABLE restaurantes(
    restaurante_id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    categoria VARCHAR(100),
    telefone VARCHAR(100),
    endereco VARCHAR(100)
);

CREATE TABLE pedidos(
    pedidos_id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    restaurante_id INT,
    data_pedido DATE,
    valor INT,
    status_pedido VARCHAR(50),
    FOREIGN KEY (cliente_id) REFERENCES clientes(cliente_id),
    FOREIGN KEY (restaurante_id) REFERENCES restaurantes(restaurante_id)
);