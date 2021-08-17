CREATE DATABASE IF NOT EXISTS pasantias;
USE pasantias;


CREATE TABLE IF NOT EXISTS `clearing` (
  `Fecha` date NOT NULL,
  `Caps` text NOT NULL,
  `Cod. Medic.` varchar(14) NOT NULL,
  `Cantidad` int(4) NOT NULL
);

--
-- Volcado de datos para la tabla `clearing`
--

INSERT INTO `clearing` (`Fecha`, `Caps`, `Cod. Medic.`, `Cantidad`) VALUES
('2021-07-13', 'blasd qwd ', 'messi14', 777);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clsbotiquin`
--

CREATE TABLE IF NOT EXISTS `clsbotiquin` (
  `Codigo` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock inicial` int(5) NOT NULL
);

--
-- Volcado de datos para la tabla `clsbotiquin`
--

INSERT INTO `clsbotiquin` (`Codigo`, `Medicamento`, `Stock inicial`) VALUES
(123, 'asdasdsad', 123),
(123, 'asdasd', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE IF NOT EXISTS `recetas` (
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
);

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`Fecha`, `Apellido`, `Nombres`, `Tipo DNI`, `Nro. DNI`, `Fecha nacimiento`, `Sexo`, `Diagnostico 1`, `Diagnostico 2`, `1. Cod. Medic.`, `Cantidad 1`, `2. Cod. Medic.`, `Cantidad 2`) VALUES
('2021-07-14', '123', '123', '123', 777, '2021-07-01', '1231231232asdadasd', 'asdasdasd', 'asdasdasd', '12312asdasd', 12345, 'dadad13123', 1234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE IF NOT EXISTS `salidas` (
  `Fecha` date NOT NULL,
  `Cod. Medic.` varchar(15) NOT NULL,
  `Cantidad` int(5) NOT NULL,
  `Motivo` char(255) NOT NULL
);

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`Fecha`, `Cod. Medic.`, `Cantidad`, `Motivo`) VALUES
('2021-07-31', '12323qwdwq', 123, 'asdadasdasdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stockinicial`
--

CREATE TABLE IF NOT EXISTS `stockinicial` (
  `Codigo` int(5) NOT NULL,
  `Medicamento` char(50) NOT NULL,
  `Stock inicial` int(5) NOT NULL
);

--
-- Volcado de datos para la tabla `stockinicial`
--

INSERT INTO `stockinicial` (`Codigo`, `Medicamento`, `Stock inicial`) VALUES
(12346, 'asdasdasdasadasdasdasdasdasdasdasdasdasdasasasd', 12366);
COMMIT;