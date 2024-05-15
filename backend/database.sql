
CREATE DATABASE IF NOT EXISTS pet_shop_luna;
USE pet_shop_luna;

CREATE TABLE IF NOT EXISTS usuarios(
  id_usuario int(10) AUTO_INCREMENT PRIMARY KEY,
  nome varchar(255),
  sobrenome varchar(255),
  cpf varchar(45),
  email varchar(255) UNIQUE NOT NULL,
  senha varchar(45)  NOT NULL,
  funcionario boolean DEFAULT false,
  gerente boolean DEFAULT false
);

CREATE TABLE IF NOT EXISTS pets (
  id_pet int(10) AUTO_INCREMENT PRIMARY KEY,
  id_usuario int(10) NOT NULL,
  nome_pet varchar(255) NOT NULL,
  raca varchar(45) ,
  pelagem varchar(255) ,
  observacoes varchar(255)
);

CREATE TABLE IF NOT EXISTS reservas(
  id_reserva int(10) AUTO_INCREMENT PRIMARY KEY,
  id_usuario int(10) NOT NULL,
  id_pet int(10) NOT NULL,
  data date,
  servicos varchar(255) NOT NULL,
  observacoes varchar(255)
);

 -- PARA CRIAR O GERENTE
  INSERT INTO usuarios (email, senha, gerente) VALUES ('admin@admin', '1234', true );

