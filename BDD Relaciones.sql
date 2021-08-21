-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-08-2021 a las 00:54:50
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
  `Cod_medico` varchar(14) NOT NULL,
  `Cantidad` int(4) NOT NULL,
  `Admin` int(1) NOT NULL,
  `Idusuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clearing`
--

INSERT INTO `clearing` (`Idclearing`, `Fecha`, `Caps`, `Cod_medico`, `Cantidad`, `Admin`, `Idusuario`) VALUES
(1, '2021-08-21', 'jaja', '2', 1, 1, 1),
(2, '2021-08-21', 'jaja', '2', 1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clsbotiquin`
--

CREATE TABLE `clsbotiquin` (
  `Idclsbotiquin` int(5) NOT NULL,
  `Codigo` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock_inicial` int(5) NOT NULL,
  `Idusuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clsbotiquin`
--

INSERT INTO `clsbotiquin` (`Idclsbotiquin`, `Codigo`, `Medicamento`, `Stock_inicial`, `Idusuario`) VALUES
(1, 1, 'd1d1d1', 11, 1),
(2, 1, 'd1d1d1', 11, 2);

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
  `Idusuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`Idrecetas`, `Fecha`, `Apellido`, `Nombres`, `Tipo_DNI`, `Nro_DNI`, `Fecha_nacimiento`, `Sexo`, `Diagnostico1`, `Diagnostico2`, `1Cod_medico`, `Cantidad1`, `2Cod_medico`, `Cantidad2`, `Idusuario`) VALUES
(1, '2021-08-04', 'dds', 'ds', 'ds', 1, '2021-08-17', 'dd', '1', '1', '1', 1, '1', 1, 1),
(2, '2021-08-04', 'dds', 'ds', 'ds', 1, '2021-08-17', 'dd', '1', '1', '1', 1, '1', 1, 2);

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
  `Cod_medico` varchar(15) NOT NULL,
  `Cantidad` int(5) NOT NULL,
  `Motivo` char(255) NOT NULL,
  `Idusuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`Idsalidas`, `Fecha`, `Cod_medico`, `Cantidad`, `Motivo`, `Idusuario`) VALUES
(1, '2021-08-19', '2', 2, 'ddd', 1),
(2, '2021-08-19', '2', 2, 'ddd', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockinicial`
--

CREATE TABLE `stockinicial` (
  `Idstockinicial` int(5) NOT NULL,
  `Codigo` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock_inicial` int(5) NOT NULL,
  `Idusuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stockinicial`
--

INSERT INTO `stockinicial` (`Idstockinicial`, `Codigo`, `Medicamento`, `Stock_inicial`, `Idusuario`) VALUES
(1, 2, 'd2d2', 2, 1),
(2, 2, 'd2d2', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Idusuario` int(3) NOT NULL,
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Idrol` int(2) NOT NULL,
  `Clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Idusuario`, `Nombre`, `Apellido`, `Idrol`, `Clave`) VALUES
(1, 'Beto', 'BALEANII', 1, '123'),
(2, 'Bones', 'SAS', 2, '123'),
(3, 'DAP', 'YY', 2, '21233');

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
  MODIFY `Idclearing` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clsbotiquin`
--
ALTER TABLE `clsbotiquin`
  MODIFY `Idclsbotiquin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `Idrecetas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Idrol` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `Idsalidas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stockinicial`
--
ALTER TABLE `stockinicial`
  MODIFY `Idstockinicial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Idusuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `salidas_ibfk_1` FOREIGN KEY (`Idusuario`) REFERENCES `usuarios` (`Idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `stockinicial`
--
ALTER TABLE `stockinicial`
  ADD CONSTRAINT `stockinicial_ibfk_1` FOREIGN KEY (`Idusuario`) REFERENCES `usuarios` (`Idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Idrol`) REFERENCES `roles` (`Idrol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
