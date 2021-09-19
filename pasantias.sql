-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2021 a las 00:46:43
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
-- Base de datos: `pasantias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clearing`
--

CREATE TABLE `clearing` (
  `Idclearing` int(5) NOT NULL,
  `Fecha` date NOT NULL,
  `Caps` text NOT NULL,
  `Cantidad` int(4) NOT NULL,
  `Tipo` varchar(200) NOT NULL,
  `Otrocaps` varchar(200) NOT NULL,
  `Idusuario` int(50) NOT NULL,
  `Codigo` int(50) NOT NULL,
  `mes` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clearing`
--

INSERT INTO `clearing` (`Idclearing`, `Fecha`, `Caps`, `Cantidad`, `Tipo`, `Otrocaps`, `Idusuario`, `Codigo`, `mes`) VALUES
(192, '2021-09-08', '', 20, 'salida', 'sas', 9, 1, ''),
(193, '2021-09-08', '', 20, 'entrada', 'aa', 5, 1, ''),
(194, '2021-09-08', '', 20, 'salida', 'sas', 9, 1, ''),
(195, '2021-09-08', '', 20, 'entrada', 'aa', 5, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clsbotiquin`
--

CREATE TABLE `clsbotiquin` (
  `Idclsbotiquin` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock_inicial` int(5) NOT NULL,
  `Idusuario` int(50) NOT NULL,
  `Codigo` int(50) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clsbotiquin`
--

INSERT INTO `clsbotiquin` (`Idclsbotiquin`, `Medicamento`, `Stock_inicial`, `Idusuario`, `Codigo`, `mes`, `estado`) VALUES
(87, 'cloracepan', 100, 9, 1, '', ''),
(88, 'mejoralito', 50, 9, 2, '', ''),
(89, 'marselo', 300, 9, 3, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `Codigo` int(50) NOT NULL,
  `Medicamento` varchar(250) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `clsbotiquin` varchar(20) NOT NULL,
  `recibidas(clearing)` varchar(20) NOT NULL,
  `salidas(clearing)` varchar(20) NOT NULL,
  `salidas` varchar(20) NOT NULL,
  `Idusuario` varchar(20) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `Idmedicamento` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`Codigo`, `Medicamento`, `cantidad`, `clsbotiquin`, `recibidas(clearing)`, `salidas(clearing)`, `salidas`, `Idusuario`, `mes`, `Idmedicamento`) VALUES
(3, 'clorasepan', 12, '12', '', '', '', '9', '', 0),
(21, 'parmatrol', 57, '57', '', '', '', '9', '', 0),
(33, 'rera', 11, '11', '', '', '', '9', '', 0),
(34, '345', 345, '345', '', '', '', '9', '', 0),
(77, 'rerereree', 46, '46', '', '', '', '5', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `Codigo` varchar(30) NOT NULL,
  `Medicamento` varchar(30) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `clsbotiquin` varchar(30) NOT NULL,
  `recibidasclearing` int(30) NOT NULL,
  `salidasclearing` int(30) NOT NULL,
  `salidas` int(30) NOT NULL,
  `Idusuario` int(30) NOT NULL,
  `mes` varchar(30) NOT NULL,
  `Idmedicamento` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`Codigo`, `Medicamento`, `cantidad`, `clsbotiquin`, `recibidasclearing`, `salidasclearing`, `salidas`, `Idusuario`, `mes`, `Idmedicamento`) VALUES
('1', 'cloracepan', 60, '100', 0, 40, 0, 9, '', 9),
('2', 'mejoralito', 50, '50', 0, 0, 0, 9, '', 10),
('3', 'marselo', 300, '300', 0, 0, 0, 9, '', 11),
('1', 'cloracepan', 40, '', 40, 0, 0, 5, '', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `Idrecetas` int(10) NOT NULL,
  `Fecha` date NOT NULL,
  `Apellido` text NOT NULL,
  `Nombres` text NOT NULL,
  `Tipo_DNI` text NOT NULL,
  `Nro_DNI` int(9) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Sexo` text NOT NULL,
  `Diagnostico1` char(255) NOT NULL,
  `Diagnostico2` char(255) NOT NULL,
  `1Cod_medico` varchar(15) NOT NULL,
  `Cantidad1` int(5) NOT NULL,
  `2Cod_medico` varchar(15) NOT NULL,
  `Cantidad2` int(5) NOT NULL,
  `Idusuario` int(50) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`Idrecetas`, `Fecha`, `Apellido`, `Nombres`, `Tipo_DNI`, `Nro_DNI`, `Fecha_nacimiento`, `Sexo`, `Diagnostico1`, `Diagnostico2`, `1Cod_medico`, `Cantidad1`, `2Cod_medico`, `Cantidad2`, `Idusuario`, `mes`, `estado`) VALUES
(1, '2020-12-07', '777', '777', '777', 777, '2020-12-07', '777', '777', '777', '777', 777, '777', 777, 6, '', ''),
(5, '2021-07-14', 'ds', 'dsa', 'dsa', 2, '2021-09-09', 'd', 'd', 'd', '2', 2, '2', 2, 4, '', ''),
(6, '2021-07-14', 'ds', 'dsa', 'dsa', 2, '2021-09-09', 'd', 'd', 'd', '2', 2, '2', 2, 5, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Idrol` int(2) NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Idrol`, `Nombre`) VALUES
(1, 'Admin'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `Idsalidas` int(5) NOT NULL,
  `Fecha` date NOT NULL,
  `Cantidad` int(5) NOT NULL,
  `Motivo` char(255) NOT NULL,
  `Idusuario` int(50) NOT NULL,
  `Codigo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockinicial`
--

CREATE TABLE `stockinicial` (
  `Idstockinicial` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock_inicial` int(5) NOT NULL,
  `Idusuario` int(50) NOT NULL,
  `Codigo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stockinicial`
--

INSERT INTO `stockinicial` (`Idstockinicial`, `Medicamento`, `Stock_inicial`, `Idusuario`, `Codigo`) VALUES
(21, 'esesese', 44, 6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Idusuario` int(3) NOT NULL,
  `Nombre` text NOT NULL,
  `Idrol` int(2) NOT NULL,
  `Clave` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Idusuario`, `Nombre`, `Idrol`, `Clave`) VALUES
(4, 'admin', 1, '$2y$10$0wwTGiXHfmjb7lCbx6.NyuFeC1AgaRi7IfQlpbv5SuxhU7b6Goaay'),
(5, 'sas', 2, '$2y$10$VnDc0rr/.K3Kf3y3aP5arOcSoM/2SF66nsglChbAeFtgvY.9QtNK.'),
(6, '123', 1, '$2y$10$tG9iFj4NbQPi8IolfqzzIeZGPCwfXOIoAFUDt6zsFOd8czzeG/HHK'),
(7, 'messi', 1, '$2y$10$QqRamnRjLzpDNuyNeT1xYOqgAfDZi.DZjdODMXhx6UUKbcQKa3iYu'),
(8, 'sape', 1, '$2y$10$6UmVWBUXo6DLCQpx48NE6uCIXlZg/Mg8DJknmDeSZHUK/ZV5xsZwe'),
(9, 'aa', 2, '$2y$10$/a3qysLlE5wv0h4oRmPvk.nBdNt0ulqhDD/p1Qzo4L/143W9fLQFS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clearing`
--
ALTER TABLE `clearing`
  ADD PRIMARY KEY (`Idclearing`),
  ADD KEY `idusuario` (`Idusuario`);

--
-- Indices de la tabla `clsbotiquin`
--
ALTER TABLE `clsbotiquin`
  ADD PRIMARY KEY (`Idclsbotiquin`),
  ADD KEY `Idusuario` (`Idusuario`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`Idmedicamento`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`Idrecetas`),
  ADD KEY `Idusuario` (`Idusuario`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Idrol`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`Idsalidas`),
  ADD KEY `Idusuario` (`Idusuario`);

--
-- Indices de la tabla `stockinicial`
--
ALTER TABLE `stockinicial`
  ADD PRIMARY KEY (`Idstockinicial`),
  ADD KEY `Idusuario` (`Idusuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Idusuario`),
  ADD KEY `Idrol` (`Idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clearing`
--
ALTER TABLE `clearing`
  MODIFY `Idclearing` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT de la tabla `clsbotiquin`
--
ALTER TABLE `clsbotiquin`
  MODIFY `Idclsbotiquin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `Idmedicamento` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `Idrecetas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Idrol` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `Idsalidas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `stockinicial`
--
ALTER TABLE `stockinicial`
  MODIFY `Idstockinicial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Idusuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clearing`
--
ALTER TABLE `clearing`
  ADD CONSTRAINT `clearing_ibfk_1` FOREIGN KEY (`Idusuario`) REFERENCES `usuarios` (`Idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clsbotiquin`
--
ALTER TABLE `clsbotiquin`
  ADD CONSTRAINT `clsbotiquin_ibfk_1` FOREIGN KEY (`Idusuario`) REFERENCES `usuarios` (`Idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD CONSTRAINT `recetas_ibfk_1` FOREIGN KEY (`Idusuario`) REFERENCES `usuarios` (`Idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `salidas_ibfk_1` FOREIGN KEY (`Idusuario`) REFERENCES `usuarios` (`Idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salidas_ibfk_2` FOREIGN KEY (`Codigo`) REFERENCES `medicamento` (`Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `stockinicial`
--
ALTER TABLE `stockinicial`
  ADD CONSTRAINT `stockinicial_ibfk_1` FOREIGN KEY (`Idusuario`) REFERENCES `usuarios` (`Idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stockinicial_ibfk_2` FOREIGN KEY (`Codigo`) REFERENCES `medicamento` (`Codigo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Idrol`) REFERENCES `roles` (`Idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
