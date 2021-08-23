CREATE DATABASE IF NOT EXISTS flores;
USE flores;
CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `crud`
--

INSERT INTO `crud` (`id`, `nombre`, `apellido`, `clave`) VALUES
(1, 'Thomas', 'Flores', '1234'),
(2, 'Thomas', 'Flores', '12345'),
(12, 'a', 'a', '2'),
(13, 'b', 'b', '123'),
(15, 'cc', 'cc', '123'),
(19, 'Thomas', 'aaaaa', '232133'),
(24, 'thomass', '321', '231'),
(26, '33ff', '321321', '321'),
(30, '231', '321', '321'),
(39, 'aaaaa231', '321fffff', '1232131dddsa'),
(40, 'juan', 'cho', '123456789'),
(41, 'juju', 'juaan', '423gdfgdf4');

-- --------------------------------------------------------



--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
