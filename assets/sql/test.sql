-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2016 a las 13:21:53
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aficiones`
--

CREATE TABLE IF NOT EXISTS `aficiones` (
  `idaf` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aficiones`
--

INSERT INTO `aficiones` (`idaf`, `nombre`) VALUES
(7, 'baloncesto'),
(8, 'golf'),
(9, 'ciclismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL,
  `idp` int(11) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `accion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `idp`, `nombre`, `accion`) VALUES
(1, NULL, 'Aficion', 'Aficion/crearAficion'),
(2, NULL, 'Persona', 'Persona/crearPersona'),
(3, 1, 'crear', 'Aficion/crearAficion'),
(4, 2, 'crear', 'Persona/crearPersona'),
(5, 2, 'Listar', 'Persona/listarPersona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `idper` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idper`, `nombre`) VALUES
(3, 'paco'),
(4, 'Macu'),
(5, 'Nausica'),
(6, 'Oriol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_aficiones`
--

CREATE TABLE IF NOT EXISTS `personas_aficiones` (
  `idper` int(11) NOT NULL,
  `idaf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas_aficiones`
--

INSERT INTO `personas_aficiones` (`idper`, `idaf`) VALUES
(4, 7),
(5, 7),
(5, 8),
(6, 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  ADD PRIMARY KEY (`idaf`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idp` (`idp`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idper`);

--
-- Indices de la tabla `personas_aficiones`
--
ALTER TABLE `personas_aficiones`
  ADD KEY `idp` (`idper`),
  ADD KEY `idaf` (`idaf`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aficiones`
--
ALTER TABLE `aficiones`
  MODIFY `idaf` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idper` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `id_idp` FOREIGN KEY (`idp`) REFERENCES `menus` (`id`);

--
-- Filtros para la tabla `personas_aficiones`
--
ALTER TABLE `personas_aficiones`
  ADD CONSTRAINT `aficiones_personas` FOREIGN KEY (`idaf`) REFERENCES `aficiones` (`idaf`),
  ADD CONSTRAINT `personas_aficiones` FOREIGN KEY (`idper`) REFERENCES `personas` (`idper`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
