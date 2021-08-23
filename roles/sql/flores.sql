-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2021 a las 22:12:24
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `floresdatatable2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
CREATE DATABASE IF NOT EXISTS flores;
USE flores;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(30) DEFAULT NULL,
  `clave` varchar(200) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `idusuario` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`, `email`, `idusuario`) VALUES
('thomas', '$2y$10$EfBCRLJkhPeiqtL3P60xSOaN5uMMdLvQ5qJIyCpqpTIrDJkZ69chS', 'thomy_flores@outlook.com', 151),
('thomas1', '$2y$10$L.YzIuO/PIoj2yWnDh4RSeV6Tu60kCieCOtxcUsokik4IV0aMPq0K', 'th1omy_flores@outlook.com', 152),
('thomas2', '$2y$10$MdTFDhoXZQkSwvzQzSsxFenxXbZ/GCWCfG0cqWNZaibVthERq0I1q', 'thomy_flores1@outlook.com', 153),
('thomas3', '$2y$10$XQbHAhJpKbwrNuNaCRwvzOuySIy6PdC0Cy3VEsFqhdHQhkBK8zK1m', 'thomy_flores@outlook.com1', 154),
('thomas4', '$2y$10$damdSuX5M3WodCKxUfKR0ufP3l3FzkH0fZPfaRi30GCWo0IYCCnk2', 'thomas@gmail.com', 155),
('thomas5', '$2y$10$lylFjd5fKxIZGPpptBYWAOk1993s8CbSOCbZr7mK7rwJ2ox00fB6O', 'thomas5@gmail.com', 156);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
