CREATE DATABASE IF NOT EXISTS pasantias;
USE pasantias;

CREATE TABLE IF NOT EXISTS `clearing` (
  `Idclearing` int(5) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Caps` text NOT NULL,
  `Cod_medico` varchar(14) NOT NULL,
  `Cantidad` int(4) NOT NULL,
  `Admin` int(1) NOT NULL,
  PRIMARY KEY (Idclearing)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `clsbotiquin` (
  `Idclsbotiquin` int(5) NOT NULL AUTO_INCREMENT,
  `Codigo` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock inicial` int(5) NOT NULL,
  PRIMARY KEY (Idclsbotiquin)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `recetas` (
  `Idrecetas` int(10) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Apellido` text NOT NULL,
  `Nombres` text NOT NULL,
  `Tipo DNI` text NOT NULL,
  `Nro. DNI` int(9) NOT NULL,
  `Fecha nacimiento` date NOT NULL,
  `Sexo` text NOT NULL,
  `Diagnostico 1` char(255) NOT NULL,
  `Diagnostico 2` char(255) NOT NULL,
  `1Cod_medico` varchar(15) NOT NULL,
  `Cantidad 1` int(5) NOT NULL,
  `2Cod_medico` varchar(15) NOT NULL,
  `Cantidad 2` int(5) NOT NULL,
  PRIMARY KEY (Idrecetas)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `roles` (
  `Idrol` int(2) NOT NULL AUTO_INCREMENT,
  `Nombre` text NOT NULL,
  PRIMARY KEY (Idrol)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `salidas` (
  `Idsalidas` int(5) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Cod_medico` varchar(15) NOT NULL,
  `Cantidad` int(5) NOT NULL,
  `Motivo` char(255) NOT NULL,
  PRIMARY KEY (Idsalidas)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `stockinicial` (
  `Idstockinicial` int(5) NOT NULL AUTO_INCREMENT,
  `Codigo` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock inicial` int(5) NOT NULL,
  PRIMARY KEY (Idstockinicial)
);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Idusuario` int(3) NOT NULL AUTO_INCREMENT,
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Idrol` int(2) NOT NULL,
  `Clave` varchar(255) NOT NULL,
  PRIMARY KEY (Idusuario)
);