-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2021 a las 00:24:01
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
  `mes` varchar(20) NOT NULL,
  `estado` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clearing`
--

INSERT INTO `clearing` (`Idclearing`, `Fecha`, `Caps`, `Cantidad`, `Tipo`, `Otrocaps`, `Idusuario`, `Codigo`, `mes`, `estado`) VALUES
(233, '2021-10-08', '', 20, 'salida', 'b', 11, 1, '10', 0),
(234, '2021-10-08', '', 20, 'entrada', 'a', 12, 1, '10', 0),
(235, '2021-10-02', '', 10, 'salida', 'a', 12, 5, '10', 0),
(236, '2021-10-02', '', 10, 'entrada', 'b', 11, 5, '10', 0),
(237, '2021-09-30', '', 5, 'salida', 'a', 12, 1, '10', 0),
(238, '2021-09-30', '', 5, 'entrada', 'b', 11, 1, '10', 0);

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
  `mes` int(11) NOT NULL,
  `estado` int(6) NOT NULL,
  `Donado` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clsbotiquin`
--

INSERT INTO `clsbotiquin` (`Idclsbotiquin`, `Medicamento`, `Stock_inicial`, `Idusuario`, `Codigo`, `mes`, `estado`, `Donado`) VALUES
(126, 'aciclovir', 10, 11, 1, 10, 0, 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `Codigo` varchar(30) NOT NULL,
  `Medicamento` varchar(30) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `clsbotiquin` int(30) NOT NULL,
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
('1', 'aciclovir', 13, 10, 5, 20, 2, 11, '10', 152),
('2', 'ibupirac', 30, 0, 0, 0, 20, 11, '10', 153),
('3', 'paracetamol', 10, 0, 0, 0, 0, 11, '10', 154),
('4', 'mejoralito', 80, 0, 0, 0, 0, 11, '10', 155),
('1', 'aciclovir', 13, 0, 0, 0, 0, 11, '11', 156),
('2', 'ibupirac', 30, 0, 0, 0, 0, 11, '11', 157),
('3', 'paracetamol', 10, 0, 0, 0, 0, 11, '11', 158),
('4', 'mejoralito', 80, 0, 0, 0, 0, 11, '11', 159),
('1', 'aciclovir', 15, 0, 20, 5, 0, 12, '10', 160),
('1', 'aciclovir', 20, 0, 0, 0, 0, 12, '1', 161),
('1', 'aciclovir', 15, 0, 0, 0, 0, 12, '11', 162),
('1', 'aciclovir', 13, 0, 0, 0, 0, 11, '1', 163),
('2', 'ibupirac', 30, 0, 0, 0, 0, 11, '1', 164),
('3', 'paracetamol', 10, 0, 0, 0, 0, 11, '1', 165),
('4', 'mejoralito', 80, 0, 0, 0, 0, 11, '1', 166),
('5', 'pastilla A', 60, 0, 10, 0, 0, 11, '10', 169),
('5', 'pastilla A', 60, 0, 0, 0, 0, 11, '11', 170),
('5', 'Pastilla B', 10, 0, 0, 10, 0, 12, '10', 171),
('5', 'Pastilla B', 10, 0, 0, 0, 0, 12, '11', 172),
('5', 'pastilla A', 60, 0, 0, 0, 0, 11, '1', 173),
('1', 'aciclovir', 13, 0, 0, 0, 0, 11, '12', 174),
('2', 'ibupirac', 30, 0, 0, 0, 0, 11, '12', 175),
('3', 'paracetamol', 10, 0, 0, 0, 0, 11, '12', 176),
('4', 'mejoralito', 80, 0, 0, 0, 0, 11, '12', 177),
('5', 'pastilla A', 60, 0, 0, 0, 0, 11, '12', 178);

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
  `estado` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`Idrecetas`, `Fecha`, `Apellido`, `Nombres`, `Tipo_DNI`, `Nro_DNI`, `Fecha_nacimiento`, `Sexo`, `Diagnostico1`, `Diagnostico2`, `1Cod_medico`, `Cantidad1`, `2Cod_medico`, `Cantidad2`, `Idusuario`, `mes`, `estado`) VALUES
(96, '2021-10-01', 'Lopez', 'Juan', 'dni', 4522233, '2021-09-27', 'Masculino', '', '', '2', 5, '1', 5, 11, '10', 0),
(97, '2021-10-31', 'Fernandez', 'Maria', 'dni', 12345678, '2021-10-04', 'Masculino', '', '', '2', 2, '4', 7, 11, '10', 0);

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
  `Codigo` int(50) NOT NULL,
  `mes` int(20) NOT NULL,
  `estado` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`Idsalidas`, `Fecha`, `Cantidad`, `Motivo`, `Idusuario`, `Codigo`, `mes`, `estado`) VALUES
(36, '2021-10-07', 20, 'Salidas no apta', 11, 2, 10, 0),
(37, '2021-10-02', 2, 'Otras salidas', 11, 1, 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockinicial`
--

CREATE TABLE `stockinicial` (
  `Idstockinicial` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock_inicial` int(5) NOT NULL,
  `Idusuario` int(50) NOT NULL,
  `Codigo` int(50) NOT NULL,
  `mes` int(20) NOT NULL,
  `estado` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `stockinicial`
--

INSERT INTO `stockinicial` (`Idstockinicial`, `Medicamento`, `Stock_inicial`, `Idusuario`, `Codigo`, `mes`, `estado`) VALUES
(28, 'aciclovir', 20, 11, 1, 10, 0),
(29, 'ibupirac', 50, 11, 2, 10, 0),
(30, 'paracetamol', 10, 11, 3, 10, 0),
(31, 'mejoralito', 80, 11, 4, 10, 0),
(32, 'pastilla A', 50, 11, 5, 10, 0),
(33, 'Pastilla B', 20, 12, 5, 10, 0);

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
(10, 'admin', 1, '$2y$10$S3PI9Kdi0zMo9Bw.he0UXuVH09zuLlocLoZDInJk5Wc/2H99RTPSm'),
(11, 'a', 2, '$2y$10$vxgLroWEQswaZ7jXkFLILul1fx5wrQJxI6xuML9AARHomyyqir8nG'),
(12, 'b', 2, '$2y$10$nzNNOklvoFAz6GkmUeT6OeHvVhl4qiO679rNV9mFsxUAjKyMOR.3y'),
(17, 'c', 2, '$2y$10$PcPapPWSVOoBZxexw6TFb.nFkjqF7hVrz5VECF41LBCpKoerGmGb6');

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
  MODIFY `Idclearing` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT de la tabla `clsbotiquin`
--
ALTER TABLE `clsbotiquin`
  MODIFY `Idclsbotiquin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `Idmedicamento` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `Idrecetas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Idrol` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `Idsalidas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `stockinicial`
--
ALTER TABLE `stockinicial`
  MODIFY `Idstockinicial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Idusuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
