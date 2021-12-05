-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 08:31:31
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inscripcion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujocondicionante`
--

CREATE TABLE `flujocondicionante` (
  `idcondicionante` int(11) NOT NULL,
  `proceso` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Si` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `No` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `flujocondicionante`
--

INSERT INTO `flujocondicionante` (`idcondicionante`, `proceso`, `Si`, `No`) VALUES
(1, 'P3', 'P4', 'P5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujoproceso`
--

CREATE TABLE `flujoproceso` (
  `idProceso` int(11) NOT NULL,
  `flujo` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `proceso` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `procesosiguiente` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `formulario` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `flujoproceso`
--

INSERT INTO `flujoproceso` (`idProceso`, `flujo`, `proceso`, `tipo`, `rol`, `procesosiguiente`, `formulario`) VALUES
(1, 'F1', 'P1', 'p', 'Frente', 'P2', 'convocatoria'),
(2, 'F1', 'P2', 'd', 'Comite', 'P3', 'inscripcionfrente'),
(3, 'F1', 'P3', 'c', 'Comite', 'P4', 'revisionrequisitos'),
(4, 'F1', 'P4', 'p', 'Comite', 'P6', 'insertardatos'),
(5, 'F1', 'P5', 'F', 'Comite', NULL, 'notificar'),
(6, 'F1', 'P6', 'P', 'Comite', NULL, 'sorteo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `idseguimiento` int(11) NOT NULL,
  `nro` int(11) DEFAULT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `flujo` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `proceso` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechainicio` datetime DEFAULT NULL,
  `fechafin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`idseguimiento`, `nro`, `usuario`, `flujo`, `proceso`, `fechainicio`, `fechafin`) VALUES
(1, 100, 'Cesar', 'F1', 'P1', '2021-10-13 10:00:00', '2021-10-13 12:00:00'),
(2, 100, 'Cesar', 'F1', 'P2', '2021-10-13 12:01:00', '2021-10-13 14:00:00'),
(3, 100, 'Cesar', 'F1', 'P3', '2021-10-13 14:00:00', NULL),
(4, 101, 'Andres', 'F1', 'P1', '2021-10-13 10:00:00', '2021-10-13 12:00:00'),
(5, 101, 'Andres', 'F1', 'P2', '2021-10-13 12:01:00', '2021-10-13 14:00:00'),
(6, 101, 'Andres', 'F1', 'P3', '2021-10-13 14:00:00', NULL),
(7, 101, 'Zulema', 'F1', 'P1', '2021-10-13 16:00:00', NULL),
(8, 102, 'Melany', 'F1', 'P1', '2021-10-13 08:00:00', '2021-10-13 10:00:00'),
(9, 100, 'Cesar', 'F1', 'P4', '2021-11-13 10:00:00', '2021-11-13 12:00:00'),
(11, 100, 'Cesar', 'F1', 'P6', '2021-11-13 14:00:00', '2021-11-13 16:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contrasenia` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cartaCE` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `delegado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `matriculaDel` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `suplente` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `matriculaSup` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `frente` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sigla` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `colores` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sorteo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `contrasenia`, `rol`, `nombre`, `cartaCE`, `delegado`, `matriculaDel`, `suplente`, `matriculaSup`, `frente`, `sigla`, `colores`, `sorteo`) VALUES
(1, 'Cesar', '12345', 'E', 'Cesar Ibanez Guarachi', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. ', 'Fernando Lagos Conde', '232323', 'Ingrid Escobar Conde', '343434', 'Adelante Informatica', 'ADIN', 'verde, azul', 8),
(2, 'Andres', '12345', 'E', 'Andres Cortez Gutierrez', '', '', '', '', '', '', '', '', NULL),
(3, 'Zulema', '12345', 'CE', 'Zulema Beltran Escobar', 'Comite Electoral', '', NULL, '', NULL, '', '', '', NULL),
(4, 'Melany', '12345', 'CE', 'Melany Villca Flores', 'Comite Electoral', '', NULL, '', NULL, '', '', '', NULL),
(5, 'Pedro', '12345', 'E', 'Pedro Choque Blanco', '', '', '', '', '', '', '', '', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flujocondicionante`
--
ALTER TABLE `flujocondicionante`
  ADD PRIMARY KEY (`idcondicionante`);

--
-- Indices de la tabla `flujoproceso`
--
ALTER TABLE `flujoproceso`
  ADD PRIMARY KEY (`idProceso`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`idseguimiento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `flujocondicionante`
--
ALTER TABLE `flujocondicionante`
  MODIFY `idcondicionante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `flujoproceso`
--
ALTER TABLE `flujoproceso`
  MODIFY `idProceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `idseguimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
