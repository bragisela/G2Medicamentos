-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 12:50 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemacop`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnos`
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
-- Dumping data for table `alumnos`
--

INSERT INTO `alumnos` (`idalumno`, `idsocio`, `nombre`, `dni`, `idcurso`, `estado`, `FechaRegistro`) VALUES
(1, 1, 'hijo', '45', 1, 0, '2019-09-30 10:48:11'),
(2, 1, 'jj', '45', 2, 0, '2019-09-30 10:48:11'),
(3, 2, 'Bart Simpson', '52333555', 2, 1, '2019-10-21 22:20:27'),
(4, 1, 'Bart Simpson', '4214', 1, 0, '2019-10-22 21:21:26'),
(5, 4, 'Joaquin Fernandez', '41568982', 2, 1, '2019-10-23 18:58:09'),
(6, 2, 'HIJOOOOO', '111111', 1, 1, '2019-10-30 12:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `cuentas`
--

CREATE TABLE `cuentas` (
  `idcuenta` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `idcuentapadre` int(11) NOT NULL,
  `tipo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuentas`
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
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `idcurso` int(11) NOT NULL,
  `curso` varchar(10) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`idcurso`, `curso`, `estado`) VALUES
(1, '4ipp', 1),
(2, '5tq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donacion`
--

CREATE TABLE `donacion` (
  `iddonacion` int(11) NOT NULL,
  `idsocio` int(11) DEFAULT NULL,
  `montodonado` int(11) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `recibo` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donacion`
--

INSERT INTO `donacion` (`iddonacion`, `idsocio`, `montodonado`, `FechaRegistro`, `nombre`, `descripcion`, `recibo`) VALUES
(13, 2, 12344, '2019-11-15 03:00:00', 'dsfasd', 'sdfdf', 1),
(14, 2, 12344, '2019-11-15 03:00:00', 'dsfasd', 'sdfdf', 1),
(15, 4, 5000, '2019-11-09 03:00:00', 'Salomon', 'Donacion realizada con gusto', 1),
(16, 4, 5000, '2019-11-09 03:00:00', 'Salomon', 'Donacion realizada con gusto', 1),
(17, 4, 5000, '2019-11-09 03:00:00', 'Salomon', 'Donacion realizada con gusto', 1),
(18, 2, 12344, '2019-11-09 03:00:00', 'sdfaf', 'sdfgdfg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `egresos`
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
-- Dumping data for table `egresos`
--

INSERT INTO `egresos` (`idegreso`, `Fecha`, `idcuenta`, `descripcion`, `ImporteE`, `FechaRegistro`) VALUES
(1, '2019-09-12', 15, 'descrip', '100.00', '2019-09-30 11:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `ingresos`
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
-- Dumping data for table `ingresos`
--

INSERT INTO `ingresos` (`idingreso`, `Fecha`, `idcuenta`, `descripcion`, `Importe`, `FechaRegistro`) VALUES
(1, '2019-09-18', 6, 'descripcion', '100.00', '2019-09-30 11:08:36'),
(2, '2019-10-08', 3, '4ytry', '546.00', '2019-10-07 12:17:15'),
(3, '2019-10-08', 3, '4ytry', '546.00', '2019-10-07 12:17:37'),
(4, '2019-10-03', 3, 'sadgfdg', '34534.00', '2019-10-07 12:17:46'),
(5, '2019-10-10', 3, 'sdfgdf', '45.00', '2019-10-07 12:18:07'),
(6, '2019-10-10', 4, 'dsgsdfg', '3454.00', '2019-10-09 10:52:50'),
(7, '2019-10-03', 3, 'sdgfsd', '456.00', '2019-10-09 11:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `pagodecuotas`
--

CREATE TABLE `pagodecuotas` (
  `idpago` int(11) NOT NULL,
  `idsocio` int(11) DEFAULT NULL,
  `idcuota` int(11) DEFAULT NULL,
  `montopagado` int(11) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recibo` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagodecuotas`
--

INSERT INTO `pagodecuotas` (`idpago`, `idsocio`, `idcuota`, `montopagado`, `FechaRegistro`, `recibo`) VALUES
(9, 4, 1, 200, '2019-10-23 19:01:42', 1),
(10, 4, 2, 200, '2019-10-23 19:01:42', 1),
(11, 4, 3, 200, '2019-10-23 19:01:54', 1),
(12, 1, 1, 200, '2019-10-23 20:08:25', 1),
(13, 1, 2, 200, '2019-10-30 10:40:10', 1),
(14, 2, 1, 200, '2019-10-30 10:45:56', 1),
(15, 1, 3, 200, '2019-10-30 10:52:41', 1),
(16, 1, 4, 200, '2019-10-30 11:02:20', 1),
(17, 1, 5, 200, '2019-10-30 11:09:46', 1),
(18, 1, 5, 200, '2019-10-30 11:12:00', 1),
(19, 1, 6, 200, '2019-10-30 11:18:54', 1),
(20, 1, 7, 200, '2019-10-30 11:23:20', 1),
(21, 1, 8, 200, '2019-10-30 11:33:06', 1),
(22, 1, 9, 200, '2019-10-30 11:42:10', 1),
(23, 2, 2, 200, '2019-10-30 11:44:03', 1),
(24, 2, 3, 200, '2019-10-30 11:45:11', 1),
(25, 2, 4, 200, '2019-10-30 11:45:43', 1),
(26, 2, 4, 200, '2019-10-30 11:45:52', 1),
(27, 2, 4, 200, '2019-10-30 11:46:02', 1),
(28, 2, 5, 200, '2019-10-30 11:46:02', 1),
(29, 4, 4, 200, '2019-10-30 12:13:48', 1),
(30, 4, 5, 200, '2019-10-30 12:13:59', 1),
(31, 2, 6, 200, '2019-10-30 12:29:05', 1),
(32, 4, 6, 200, '2019-11-08 11:05:48', 1),
(33, 4, 6, 200, '2019-11-08 11:43:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
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
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `RazonSocial`, `Cuit`, `direccion`, `telefono`, `estado`, `FechaRegistro`) VALUES
(1, 'ejemplo', '232255', 'dire', 52225, 1, '2019-09-30 11:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `registrocuotas`
--

CREATE TABLE `registrocuotas` (
  `idcuota` int(11) NOT NULL,
  `anio` year(4) DEFAULT NULL,
  `mes` varchar(60) NOT NULL,
  `importe` int(11) NOT NULL,
  `FechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrocuotas`
--

INSERT INTO `registrocuotas` (`idcuota`, `anio`, `mes`, `importe`, `FechaRegistro`) VALUES
(1, 2019, 'Enero', 200, '2019-09-30 10:51:54'),
(2, 2019, 'Febrero', 200, '2019-09-30 10:51:54'),
(3, 2019, 'Marzo', 200, '2019-09-30 10:51:54'),
(4, 2019, 'Abril', 200, '2019-09-30 10:51:54'),
(5, 2019, 'Mayo', 200, '2019-09-30 10:51:54'),
(6, 2019, 'Junio', 200, '2019-09-30 10:51:54'),
(7, 2019, 'Julio', 200, '2019-09-30 10:51:54'),
(8, 2019, 'Agosto', 200, '2019-09-30 10:51:54'),
(9, 2019, 'Septiembre', 200, '2019-09-30 10:51:54'),
(10, 2019, 'Octubre', 200, '2019-09-30 10:51:54'),
(11, 2019, 'Noviembre', 200, '2019-09-30 10:51:54'),
(12, 2019, 'Diciembre', 200, '2019-09-30 10:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `saldoactual`
--

CREATE TABLE `saldoactual` (
  `idsaldo` int(11) NOT NULL,
  `SaldoActual` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldoactual`
--

INSERT INTO `saldoactual` (`idsaldo`, `SaldoActual`) VALUES
(1, '635460.00');

-- --------------------------------------------------------

--
-- Table structure for table `socios`
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
-- Dumping data for table `socios`
--

INSERT INTO `socios` (`idsocio`, `NroSocio`, `nombreM`, `nombreP`, `dniM`, `dniP`, `direccion`, `telefonoM`, `telefonoP`, `cantihijos`, `estado`, `FechaRegistro`) VALUES
(1, 1, 'm', 'matias', '12354', '5456', 'direccion', 145, 5466, 2, 0, '2019-09-30 10:47:19'),
(2, 2, 'Marge bubie', 'Homero Simpson', '43859186', '43851859', 'emparanza 2531', 2147483647, 2147483647, 1, 1, '2019-10-21 22:20:09'),
(4, 3, 'Maria Gonzalez', 'Mario Fernandez', '35598685', '34568985', 'San Martin 3248', 2147483647, 2147483647, 1, 1, '2019-10-23 18:57:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idalumno`),
  ADD KEY `idsocio` (`idsocio`),
  ADD KEY `idcurso` (`idcurso`);

--
-- Indexes for table `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`idcuenta`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idcurso`);

--
-- Indexes for table `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`iddonacion`),
  ADD KEY `idsocio` (`idsocio`);

--
-- Indexes for table `egresos`
--
ALTER TABLE `egresos`
  ADD PRIMARY KEY (`idegreso`),
  ADD KEY `idcuenta` (`idcuenta`);

--
-- Indexes for table `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`idingreso`),
  ADD KEY `idcuenta` (`idcuenta`);

--
-- Indexes for table `pagodecuotas`
--
ALTER TABLE `pagodecuotas`
  ADD PRIMARY KEY (`idpago`),
  ADD KEY `idsocio` (`idsocio`),
  ADD KEY `idcuota` (`idcuota`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indexes for table `registrocuotas`
--
ALTER TABLE `registrocuotas`
  ADD PRIMARY KEY (`idcuota`);

--
-- Indexes for table `saldoactual`
--
ALTER TABLE `saldoactual`
  ADD PRIMARY KEY (`idsaldo`);

--
-- Indexes for table `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`idsocio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `idcuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donacion`
--
ALTER TABLE `donacion`
  MODIFY `iddonacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `egresos`
--
ALTER TABLE `egresos`
  MODIFY `idegreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `idingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pagodecuotas`
--
ALTER TABLE `pagodecuotas`
  MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrocuotas`
--
ALTER TABLE `registrocuotas`
  MODIFY `idcuota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `saldoactual`
--
ALTER TABLE `saldoactual`
  MODIFY `idsaldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socios`
--
ALTER TABLE `socios`
  MODIFY `idsocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`idsocio`) REFERENCES `socios` (`idsocio`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `cursos` (`idcurso`);

--
-- Constraints for table `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `donacion_ibfk_1` FOREIGN KEY (`idsocio`) REFERENCES `socios` (`idsocio`);

--
-- Constraints for table `egresos`
--
ALTER TABLE `egresos`
  ADD CONSTRAINT `egresos_ibfk_1` FOREIGN KEY (`idcuenta`) REFERENCES `cuentas` (`idcuenta`);

--
-- Constraints for table `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`idcuenta`) REFERENCES `cuentas` (`idcuenta`);

--
-- Constraints for table `pagodecuotas`
--
ALTER TABLE `pagodecuotas`
  ADD CONSTRAINT `pagodecuotas_ibfk_1` FOREIGN KEY (`idsocio`) REFERENCES `socios` (`idsocio`),
  ADD CONSTRAINT `pagodecuotas_ibfk_2` FOREIGN KEY (`idcuota`) REFERENCES `registrocuotas` (`idcuota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
