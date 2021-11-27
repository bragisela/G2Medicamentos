-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2019 a las 22:35:30
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemacop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idalumno` int(11) NOT NULL,
  `idsocio` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `idcurso` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idalumno`, `idsocio`, `nombre`, `dni`, `idcurso`, `estado`, `FechaRegistro`) VALUES
(1, 1, 'hijo', '45', 1, 1, '2019-09-30 13:48:11'),
(2, 1, 'jj', '45', 2, 1, '2019-09-30 13:48:11'),
(5, 1, 'raul', '43148984', 2, 1, '2019-11-11 13:39:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `idcuenta` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `idcuentapadre` int(11) NOT NULL,
  `tipo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`idcuenta`, `descripcion`, `idcuentapadre`, `tipo`) VALUES
(1, 'Ingresos', 0, 'I'),
(2, 'Ingresos por cuota social', 1, 'I'),
(3, 'Donaciones', 1, 'I'),
(4, 'Canon Quiosco escolar', 1, 'I'),
(5, 'Eventos', 1, 'I'),
(6, 'Eventos-Bailes', 5, 'I'),
(7, 'Eventos-Rifas', 5, 'I'),
(8, 'Eventos-Feria del plato', 5, 'I'),
(9, 'Intereses Ganados', 1, 'I'),
(10, 'Egresos', 0, 'E'),
(11, 'Gastos propios de la entidad', 10, 'E'),
(12, 'Gastos para el alumno', 10, 'E'),
(13, 'Gastos para eventos', 10, 'E'),
(14, 'Seguros', 10, 'E'),
(15, 'Internet', 10, 'E'),
(16, 'Gastos Bancarios', 11, 'E'),
(17, 'Articulos de limpieza', 35, 'E'),
(18, 'Libreria - Alumnos', 35, 'E'),
(19, 'Libreria - Cooperadora', 11, 'E'),
(20, 'Viaticos direccion', 10, 'E'),
(21, 'Viaticos cooperadora', 11, 'E'),
(22, 'Recuros Oficiales', 1, 'I'),
(23, 'Transfer. X SAE', 22, 'I'),
(24, 'Subsidio DGCE', 22, 'I'),
(25, 'SAE', 10, 'E'),
(26, 'Comestibles SAE', 25, 'E'),
(27, 'Articulos Limieza SAE', 25, 'E'),
(28, 'SAE Fondos Propios', 25, 'E'),
(29, 'Ropa y calzado', 12, 'E'),
(30, 'Libros y utiles', 12, 'E'),
(31, 'Excursiones', 12, 'E'),
(32, 'Emergencias Sanitarias', 12, 'E'),
(33, 'Golosinas, Premios Medallas', 12, 'E'),
(34, 'Otros Gastos Alumos', 12, 'E'),
(35, 'Gastos para la escuela', 10, 'E'),
(36, 'Material didactico', 35, 'E'),
(37, 'Mantenimiento p/ subsidio', 35, 'E'),
(38, 'Mantenimiento p/ Fondos Propios', 35, 'E'),
(39, 'Mobiliario', 35, 'E'),
(40, 'Gastos por Organizacion de eventos', 11, 'E'),
(41, 'Gastos de quiosco', 11, 'E'),
(42, 'Gastos operativos', 11, 'E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `idcurso` int(11) NOT NULL,
  `curso` varchar(10) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idcurso`, `curso`, `estado`) VALUES
(1, '4tq', 1),
(2, '5tq', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `iddonacion` int(11) NOT NULL,
  `idsocio` int(11) DEFAULT NULL,
  `montodonado` int(11) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `donacion`
--

INSERT INTO `donacion` (`iddonacion`, `idsocio`, `montodonado`, `FechaRegistro`) VALUES
(1, 1, 100, '2019-09-30 14:07:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE `egresos` (
  `idegreso` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `idcuenta` int(11) DEFAULT NULL,
  `descripcion` varchar(255) NOT NULL,
  `ImporteE` decimal(10,2) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `egresos`
--

INSERT INTO `egresos` (`idegreso`, `Fecha`, `idcuenta`, `descripcion`, `ImporteE`, `FechaRegistro`) VALUES
(1, '2019-09-12', 15, 'descrip', '100.00', '2019-09-30 14:08:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `idingreso` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `idcuenta` int(11) DEFAULT NULL,
  `descripcion` varchar(255) NOT NULL,
  `Importe` decimal(10,2) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`idingreso`, `Fecha`, `idcuenta`, `descripcion`, `Importe`, `FechaRegistro`) VALUES
(1, '2019-09-18', 6, 'descrip', '100.00', '2019-09-30 14:08:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagodecuotas`
--

CREATE TABLE `pagodecuotas` (
  `idpago` int(11) NOT NULL,
  `idsocio` int(11) DEFAULT NULL,
  `idcuota` int(11) DEFAULT NULL,
  `montopagado` int(11) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagodecuotas`
--

INSERT INTO `pagodecuotas` (`idpago`, `idsocio`, `idcuota`, `montopagado`, `FechaRegistro`) VALUES
(45, 1, 1, 100, '2019-10-21 15:30:23'),
(46, 1, 1, 100, '2019-10-21 15:32:50'),
(47, 1, 1, 100, '2019-10-21 15:33:35'),
(48, 1, 1, 100, '2019-10-21 15:37:11'),
(49, 1, 1, 100, '2019-10-21 15:45:25'),
(50, 1, 1, 100, '2019-10-21 16:12:42'),
(51, 1, 1, 100, '2019-10-21 16:13:24'),
(52, 1, 1, 100, '2019-10-21 16:15:26'),
(53, 1, 1, 100, '2019-10-21 16:38:55'),
(54, 1, 1, 100, '2019-10-21 16:46:17'),
(55, 1, 1, 100, '2019-10-21 16:47:24'),
(56, 1, 1, 100, '2019-10-21 16:49:37'),
(57, 1, 1, 100, '2019-10-21 16:50:57'),
(58, 1, 1, 100, '2019-10-21 16:51:26'),
(59, 1, 1, 100, '2019-10-21 16:58:40'),
(60, 1, 1, 100, '2019-10-21 17:06:39'),
(61, 1, 1, 100, '2019-10-21 17:07:28'),
(62, 1, 1, 100, '2019-10-21 17:07:47'),
(63, 1, 1, 100, '2019-10-21 17:08:03'),
(64, 1, 1, 100, '2019-10-21 17:10:57'),
(65, 1, 1, 100, '2019-10-21 17:11:28'),
(66, 1, 1, 100, '2019-10-21 17:14:19'),
(67, 1, 1, 100, '2019-10-21 17:14:48'),
(68, 1, 1, 100, '2019-10-21 21:15:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `RazonSocial` varchar(255) NOT NULL,
  `Cuit` varchar(15) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` int(50) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `RazonSocial`, `Cuit`, `direccion`, `telefono`, `estado`, `FechaRegistro`) VALUES
(1, 'ejemplo', '232255', 'dire', 52225, 1, '2019-09-30 14:10:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrocuotas`
--

CREATE TABLE `registrocuotas` (
  `idcuota` int(11) NOT NULL,
  `anio` year(4) DEFAULT NULL,
  `mes` varchar(60) NOT NULL,
  `importe` int(11) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrocuotas`
--

INSERT INTO `registrocuotas` (`idcuota`, `anio`, `mes`, `importe`, `FechaRegistro`) VALUES
(1, 2019, 'Enero', 200, '2019-09-30 13:51:54'),
(2, 2019, 'Febrero', 200, '2019-09-30 13:51:54'),
(3, 2019, 'Marzo', 200, '2019-09-30 13:51:54'),
(4, 2019, 'Abril', 200, '2019-09-30 13:51:54'),
(5, 2019, 'Mayo', 200, '2019-09-30 13:51:54'),
(6, 2019, 'Junio', 200, '2019-09-30 13:51:54'),
(7, 2019, 'Julio', 200, '2019-09-30 13:51:54'),
(8, 2019, 'Agosto', 200, '2019-09-30 13:51:54'),
(9, 2019, 'Septiembre', 200, '2019-09-30 13:51:54'),
(10, 2019, 'Octubre', 200, '2019-09-30 13:51:54'),
(11, 2019, 'Noviembre', 200, '2019-09-30 13:51:54'),
(12, 2019, 'Diciembre', 200, '2019-09-30 13:51:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saldoactual`
--

CREATE TABLE `saldoactual` (
  `idsaldo` int(11) NOT NULL,
  `SaldoActual` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `saldoactual`
--

INSERT INTO `saldoactual` (`idsaldo`, `SaldoActual`) VALUES
(1, '1500.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `idsocio` int(11) NOT NULL,
  `NroSocio` int(11) NOT NULL,
  `nombreM` varchar(100) NOT NULL,
  `nombreP` varchar(100) NOT NULL,
  `dniM` varchar(10) NOT NULL,
  `dniP` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefonoM` int(30) NOT NULL,
  `telefonoP` int(30) NOT NULL,
  `cantihijos` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`idsocio`, `NroSocio`, `nombreM`, `nombreP`, `dniM`, `dniP`, `direccion`, `telefonoM`, `telefonoP`, `cantihijos`, `estado`, `FechaRegistro`) VALUES
(1, 1, 'm', 'matias', '12354', '5456', 'direccion', 145, 546, 2, 1, '2019-09-30 13:47:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idalumno`),
  ADD KEY `idsocio` (`idsocio`),
  ADD KEY `idcurso` (`idcurso`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`idcuenta`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idcurso`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`iddonacion`),
  ADD KEY `idsocio` (`idsocio`);

--
-- Indices de la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD PRIMARY KEY (`idegreso`),
  ADD KEY `idcuenta` (`idcuenta`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`idingreso`),
  ADD KEY `idcuenta` (`idcuenta`);

--
-- Indices de la tabla `pagodecuotas`
--
ALTER TABLE `pagodecuotas`
  ADD PRIMARY KEY (`idpago`),
  ADD KEY `idsocio` (`idsocio`),
  ADD KEY `idcuota` (`idcuota`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `registrocuotas`
--
ALTER TABLE `registrocuotas`
  ADD PRIMARY KEY (`idcuota`);

--
-- Indices de la tabla `saldoactual`
--
ALTER TABLE `saldoactual`
  ADD PRIMARY KEY (`idsaldo`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`idsocio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `idcuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `iddonacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `egresos`
--
ALTER TABLE `egresos`
  MODIFY `idegreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `idingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pagodecuotas`
--
ALTER TABLE `pagodecuotas`
  MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registrocuotas`
--
ALTER TABLE `registrocuotas`
  MODIFY `idcuota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `saldoactual`
--
ALTER TABLE `saldoactual`
  MODIFY `idsaldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `socios`
--
ALTER TABLE `socios`
  MODIFY `idsocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`idsocio`) REFERENCES `socios` (`idsocio`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `cursos` (`idcurso`);

--
-- Filtros para la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `donacion_ibfk_1` FOREIGN KEY (`idsocio`) REFERENCES `socios` (`idsocio`);

--
-- Filtros para la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD CONSTRAINT `egresos_ibfk_1` FOREIGN KEY (`idcuenta`) REFERENCES `cuentas` (`idcuenta`);

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`idcuenta`) REFERENCES `cuentas` (`idcuenta`);

--
-- Filtros para la tabla `pagodecuotas`
--
ALTER TABLE `pagodecuotas`
  ADD CONSTRAINT `pagodecuotas_ibfk_1` FOREIGN KEY (`idsocio`) REFERENCES `socios` (`idsocio`),
  ADD CONSTRAINT `pagodecuotas_ibfk_2` FOREIGN KEY (`idcuota`) REFERENCES `registrocuotas` (`idcuota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
