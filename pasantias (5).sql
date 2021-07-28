-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2021 a las 23:00:37
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
  `Fecha` date NOT NULL,
  `Caps` text NOT NULL,
  `Cod. Medic.` varchar(14) NOT NULL,
  `Cantidad` int(4) NOT NULL,
  `Admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clsbotiquin`
--

CREATE TABLE `clsbotiquin` (
  `Codigo` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock inicial` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `Fecha` date NOT NULL,
  `Apellido` text NOT NULL,
  `Nombres` text NOT NULL,
  `Tipo DNI` text NOT NULL,
  `Nro. DNI` int(9) NOT NULL,
  `Fecha nacimiento` date NOT NULL,
  `Sexo` text NOT NULL,
  `Diagnostico 1` char(255) NOT NULL,
  `Diagnostico 2` char(255) NOT NULL,
  `1. Cod. Medic.` varchar(15) NOT NULL,
  `Cantidad 1` int(5) NOT NULL,
  `2. Cod. Medic.` varchar(15) NOT NULL,
  `Cantidad 2` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Idrol` int(2) NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `Fecha` date NOT NULL,
  `Cod. Medic.` varchar(15) NOT NULL,
  `Cantidad` int(5) NOT NULL,
  `Motivo` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockinicial`
--

CREATE TABLE `stockinicial` (
  `Codigo` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock inicial` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clearing`
--
ALTER TABLE `clearing`
  ADD PRIMARY KEY (`Cod. Medic.`);

--
-- Indices de la tabla `clsbotiquin`
--
ALTER TABLE `clsbotiquin`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`Nro. DNI`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Idrol`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`Cod. Medic.`);

--
-- Indices de la tabla `stockinicial`
--
ALTER TABLE `stockinicial`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
