-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2024 a las 23:32:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `serviciomedicoo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `IDdiagnostico` int(11) NOT NULL,
  `IDpaciente` int(11) NOT NULL,
  `CondicionM` varchar(200) NOT NULL,
  `fechaDia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `diagnostico`
--

INSERT INTO `diagnostico` (`IDdiagnostico`, `IDpaciente`, `CondicionM`, `fechaDia`) VALUES
(1, 1, 'es gay', '2024-06-13'),
(11, 11, 'Es un papu ', '2024-06-14'),
(27, 27, 'es gay', '2024-06-14'),
(1230, 1230, 'El paciente presenta síntomas recurrentes de información incorrecta o inventada, causando confusión y errores en la toma de decisiones cotidianas. Los episodios son más frecuentes durante la exposició', '2024-03-21'),
(9766, 9766, ' Dolor muscular generalizado sin causa aparente, acompañado de episodios de sueños lúcidos intensos y vívidos. El paciente experimenta dificultades para distinguir entre la realidad y la fantasía.', '2025-03-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `IDmedicamento` int(11) NOT NULL,
  `IDpaciente` int(11) NOT NULL,
  `nombreMed` varchar(60) NOT NULL,
  `dosis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`IDmedicamento`, `IDpaciente`, `nombreMed`, `dosis`) VALUES
(1, 1, 'papuparacetamol', '3 papu p{ildoras a las papu 3 de la papumañana'),
(11, 11, 'papuparacetamol', '3 papu p{ildoras a las papu 3 de la papumañana'),
(1230, 1230, 'Paracetamol', 'Una pastilla después de ingerir alimentos, recomendado dormir.'),
(9766, 9766, 'Relajex ', '50 mg, tomar una tableta oral dos veces al día, preferiblemente después de las comidas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `IDpaciente` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `fechaN` date NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `tel` int(10) NOT NULL,
  `ciudad` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`IDpaciente`, `nombre`, `fechaN`, `direccion`, `tel`, `ciudad`) VALUES
(1, 'a', '2024-06-13', 'a', 1233345, 'a'),
(11, 'Pata', '2024-06-13', 'Mi humilde choza', 2147483647, 'Xalapayork'),
(27, 'grem', '2024-06-13', 'mi casa', 545464, 'papubarrio'),
(1230, 'Rhoda Prosacco', '2023-11-08', '9 Legros Mall	', 68658092, 'Carterville'),
(9766, 'Nelda Weber', '2023-08-23', '524 Kilback Rise', 67731112, 'Lailaston'),
(12341, 'Fulanito Lechuga en Pozole', '2024-06-22', 'Su casa colonia ciudad y calle #83 papulot', 1234567890, 'Xalapayork'),
(14998, 'Dott. Elda Mancini', '2024-06-21', 'Contrada Cristina 76 Appartamento 34', 627193493, 'Quarto Matilde del friuli'),
(26951, 'Rosa María Leal', '2024-06-25', 'Plaça Francisco Javier, 3, 77º 5º', 349982091, 'Verduzco del Barco'),
(35253, 'Ms. Kshitz Kumari Gurung', '2024-06-29', 'Tejchowk', 981822653, 'Dhankuta'),
(69508, 'Manuel Sotelo Auburun', '2024-06-16', 'Ronda Beatriz, 87, 2º E', 913792555, 'Villa Ros del Vallès'),
(79647, 'Alberto Abeyta', '2023-08-17', 'Travesía Andrés, 9, 29º 3º', 980565564, 'Los Escobar de Lemos'),
(85115, 'Jayce Walter Gray', '2024-09-18', '36559 Beatty Squares', 929836525, 'New Kristian'),
(93526, 'Dr. Ian Guajardo Zapata', '2024-06-19', 'Jr. Ivanna Salcedo # 5', 977874860, 'Don Bianca Fajardo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantratamiento`
--

CREATE TABLE `plantratamiento` (
  `IDtratamiento` int(11) NOT NULL,
  `IDpaciente` int(11) NOT NULL,
  `IDdiagnostico` int(11) NOT NULL,
  `tratamiento` varchar(200) NOT NULL,
  `fechaTrat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `plantratamiento`
--

INSERT INTO `plantratamiento` (`IDtratamiento`, `IDpaciente`, `IDdiagnostico`, `tratamiento`, `fechaTrat`) VALUES
(1, 1, 1, 'Que se medique vrdd ', '2024-06-07'),
(11, 11, 11, 'Que se medique vrdd ', '2024-06-15'),
(1230, 1230, 1230, 'Una pastilla pasada con agua, espere a que haga efecto o vaya a dormir, repose para mejores resultados', '2024-09-30'),
(9766, 9766, 9766, 'Actúa como un relajante muscular y ayuda a disminuir los episodios de sueños lúcidos intensos. no exceda las 3 tabletas diarias.', '2025-02-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadoslab`
--

CREATE TABLE `resultadoslab` (
  `IDresultado` int(11) NOT NULL,
  `IDpaciente` int(11) NOT NULL,
  `prueba` varchar(60) NOT NULL,
  `precio` float NOT NULL,
  `fechaLab` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `resultadoslab`
--

INSERT INTO `resultadoslab` (`IDresultado`, `IDpaciente`, `prueba`, `precio`, `fechaLab`) VALUES
(1, 1, 'papulandia', 999, '2024-06-13'),
(11, 11, 'papulandialot', 999, '2024-06-07'),
(1230, 1230, 'Síndrome de Fallacia Crónica', 999, '2024-12-21'),
(9766, 9766, 'Mialgia Fantasiosa', 5, '2023-08-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` text NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `Contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `Usuario`, `Contraseña`) VALUES
('', 'Fabicita', 'papulot'),
('', 'grem', '1234'),
('', 'ela de chile', 'zaz'),
('Saco papas', 'Papita123', 'pipipi'),
('La Real más rial', 'Papusuario', 'usuario.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`IDdiagnostico`),
  ADD UNIQUE KEY `IDpaciente` (`IDpaciente`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`IDmedicamento`),
  ADD UNIQUE KEY `IDpaciente` (`IDpaciente`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`IDpaciente`),
  ADD UNIQUE KEY `IDpaciente` (`IDpaciente`);

--
-- Indices de la tabla `plantratamiento`
--
ALTER TABLE `plantratamiento`
  ADD PRIMARY KEY (`IDtratamiento`),
  ADD UNIQUE KEY `IDpaciente` (`IDpaciente`);

--
-- Indices de la tabla `resultadoslab`
--
ALTER TABLE `resultadoslab`
  ADD PRIMARY KEY (`IDresultado`),
  ADD UNIQUE KEY `IDpaciente` (`IDpaciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `IDpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567891;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `diagnostico_ibfk_1` FOREIGN KEY (`IDdiagnostico`) REFERENCES `paciente` (`IDpaciente`);

--
-- Filtros para la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD CONSTRAINT `medicamento_ibfk_1` FOREIGN KEY (`IDmedicamento`) REFERENCES `resultadoslab` (`IDresultado`);

--
-- Filtros para la tabla `plantratamiento`
--
ALTER TABLE `plantratamiento`
  ADD CONSTRAINT `plantratamiento_ibfk_1` FOREIGN KEY (`IDtratamiento`) REFERENCES `medicamento` (`IDmedicamento`);

--
-- Filtros para la tabla `resultadoslab`
--
ALTER TABLE `resultadoslab`
  ADD CONSTRAINT `resultadoslab_ibfk_1` FOREIGN KEY (`IDresultado`) REFERENCES `diagnostico` (`IDdiagnostico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
