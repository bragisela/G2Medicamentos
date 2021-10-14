CREATE DATABASE pasantias;
USE pasantias;

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
  `estado` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clearing`
--

INSERT INTO `clearing` (`Idclearing`, `Fecha`, `Caps`, `Cantidad`, `Tipo`, `Otrocaps`, `Idusuario`, `Codigo`, `mes`, `estado`) VALUES
(207, '2021-10-12', '', 2, 'salida', 'b', 11, 4, '10', 0),
(208, '2021-10-12', '', 2, 'entrada', 'a', 12, 4, '10', 0),
(209, '2021-10-13', '', 5, 'salida', 'b', 11, 4, '10', 0),
(210, '2021-10-13', '', 5, 'entrada', 'a', 12, 4, '10', 0);

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
  `estado` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clsbotiquin`
--

INSERT INTO `clsbotiquin` (`Idclsbotiquin`, `Medicamento`, `Stock_inicial`, `Idusuario`, `Codigo`, `mes`, `estado`) VALUES
(100, 'sees', 21, 11, 13, 4, 0),
(101, 'trtradol', 20, 11, 1, 10, 0),
(102, 'papu', 30, 11, 2, 10, 0),
(103, 'sisos', 60, 11, 3, 10, 0),
(104, 'sape', 10, 11, 4, 10, 0),
(105, 'sape', 15, 11, 4, 10, 0),
(106, 'sape', 30, 11, 4, 10, 0),
(107, 'sape', 30, 11, 4, 10, 0),
(108, 'sape', 30, 11, 4, 10, 0),
(109, 'sape', 50, 11, 4, 10, 0),
(110, 'sape', 40, 11, 4, 10, 1);

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
('13', 'sees', 21, '21', 0, 0, 0, 11, '', 21),
('1', 'trtradol', 10, '20', 0, 0, 10, 11, '10', 22),
('2', 'papu', 25, '30', 0, 0, 5, 11, '10', 23),
('3', 'sisos', 60, '60', 0, 0, 0, 11, '10', 24),
('4', 'sape', 10, '20', 0, 10, 5, 11, '10', 25),
('4', 'sape', 3, '', 3, 0, 0, 2342, '10', 26),
('4', 'sape', 7, '', 7, 0, 0, 12, '10', 27);

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
  `Codigo` int(50) NOT NULL,
  `mes` int(20) NOT NULL,
  `estado` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`Idsalidas`, `Fecha`, `Cantidad`, `Motivo`, `Idusuario`, `Codigo`, `mes`, `estado`) VALUES
(29, '2021-10-05', 5, 'Otras salidas', 11, 4, 10, 0),
(30, '2021-10-05', 10, 'Salidas no apta', 11, 1, 10, 0),
(31, '2021-10-07', 5, 'Salidas no apta', 11, 2, 10, 0),
(32, '2021-10-07', 0, 'Salidas no apta', 11, 2, 10, 0),
(33, '2021-10-05', 0, 'Salidas no apta', 11, 2, 10, 0);

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
(24, 'sape4e', 44, 11, 1, 4, 0);

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
(5, 'sas', 2, '$2y$10$VnDc0rr/.K3Kf3y3aP5arOcSoM/2SF66nsglChbAeFtgvY.9QtNK.'),
(10, 'sape', 1, '$2y$10$SGKfA07//t3VJIQA2Dhvb.eMufgpVhv9JQxTnbTvX8UxT6BLFrgai'),
(11, 'a', 2, '$2y$10$vxgLroWEQswaZ7jXkFLILul1fx5wrQJxI6xuML9AARHomyyqir8nG'),
(12, 'b', 2, '$2y$10$nzNNOklvoFAz6GkmUeT6OeHvVhl4qiO679rNV9mFsxUAjKyMOR.3y'),
(13, 'c', 2, '$2y$10$acUTAS4mabixu5XYJDZlK.jAxhB2N0EZtkdPCOsATVoZ/FC1uIFFy');

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
  MODIFY `Idclearing` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT de la tabla `clsbotiquin`
--
ALTER TABLE `clsbotiquin`
  MODIFY `Idclsbotiquin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `Idmedicamento` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `Idsalidas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `stockinicial`
--
ALTER TABLE `stockinicial`
  MODIFY `Idstockinicial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Idusuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
