
CREATE DATABASE IF EXISTS pasantias;
USE pasantias;

CREATE TABLE IF NOT EXISTS clearing (
  Fecha date NOT NULL,
  Caps text NOT NULL,
  Cod. Medic. varchar(14) NOT NULL,
  Cantidad int(4) NOT NULL,
  Admin int(1) NOT NULL,
  PRIMARY KEY (Cod. Medic.)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS clsbotiquin (
  Codigo int(5) NOT NULL,
  Medicamento char(50) NOT NULL,
  Stock inicial int(5) NOT NULL,
  PRIMARY KEY (Codigo)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS recetas (
  Idrecetas int(10) NOT NULL AUTO_INCREMENT,
  Fecha date NOT NULL,
  Apellido text NOT NULL,
  Nombres text NOT NULL,
  Tipo DNI text NOT NULL,
  Nro. DNI int(9) NOT NULL,
  Fecha nacimiento date NOT NULL,
  Sexo text NOT NULL,
  Diagnostico 1 char(255) NOT NULL,
  Diagnostico 2 char(255) NOT NULL,
  1. Cod. Medic. varchar(15) NOT NULL,
  Cantidad 1 int(5) NOT NULL,
  2. Cod. Medic. varchar(15) NOT NULL,
  Cantidad 2 int(5) NOT NULL,
  PRIMARY KEY (Idrecetas)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS roles (
  Idrol int(2) NOT NULL,
  Nombre text NOT NULL,
  PRIMARY KEY (Idrol)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS salidas (
  Fecha date NOT NULL,
  Cod. Medic. varchar(15) NOT NULL,
  Cantidad int(5) NOT NULL,
  Motivo char(255) NOT NULL,
  PRIMARY KEY (Cod. Medic.)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS stockinicial (
  Codigo int(5) NOT NULL,
  Medicamento char(50) NOT NULL,
  Stock inicial int(5) NOT NULL,
  PRIMARY KEY (Codigo)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS usuarios (
  Idusuario int(3) NOT NULL AUTO_INCREMENT,
  Nombre text NOT NULL,
  Apellido text NOT NULL,
  Idrol int(2) NOT NULL,
  Clave varchar(255) NOT NULL,
  PRIMARY KEY (Idusuario)
);