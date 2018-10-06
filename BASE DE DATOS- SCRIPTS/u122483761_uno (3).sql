
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-05-2017 a las 05:01:00
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u122483761_uno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asignatura`
--

CREATE TABLE IF NOT EXISTS `Asignatura` (
  `nomb_asignatura` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horas_practica` int(11) DEFAULT NULL,
  `pre_requisito` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nro_creditos` int(11) DEFAULT NULL,
  `semestre_academico` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cod_asignatura` char(18) COLLATE utf8_unicode_ci NOT NULL,
  `ciclo_academico` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facultad` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horas_teoria` int(11) DEFAULT NULL,
  `escuela` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cod_asignatura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Asignatura`
--

INSERT INTO `Asignatura` (`nomb_asignatura`, `horas_practica`, `pre_requisito`, `nro_creditos`, `semestre_academico`, `cod_asignatura`, `ciclo_academico`, `facultad`, `horas_teoria`, `escuela`) VALUES
('Base de Datos 2', NULL, NULL, NULL, NULL, '', NULL, 'INGENIERIA', NULL, 'ESIS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Dicta`
--

CREATE TABLE IF NOT EXISTS `Dicta` (
  `Cod_docente` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cod_asignatura` char(18) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_dic` date DEFAULT NULL,
  PRIMARY KEY (`Cod_docente`,`cod_asignatura`),
  KEY `R_3` (`cod_asignatura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Docente`
--

CREATE TABLE IF NOT EXISTS `Docente` (
  `Cod_docente` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fnacimiento` date DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Cod_docente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Docente`
--

INSERT INTO `Docente` (`Cod_docente`, `nombre`, `apellido`, `dni`, `direccion`, `tipo`, `email`, `fnacimiento`, `password`) VALUES
('EHinojosa', 'Edwin ', 'Hinojosa', NULL, NULL, 'docente', NULL, NULL, 'Ehinojosa'),
('GMalaga', 'Gianfranco', 'Malaga', NULL, NULL, 'docente', NULL, NULL, 'GMalaga'),
('ACori', 'Ana', 'Cori', NULL, NULL, NULL, NULL, NULL, 'ACori'),
('MBarraza', 'Manuel', 'Barraza', NULL, NULL, NULL, NULL, NULL, 'MBarraza'),
('KSupo', 'Karin', 'Supo', NULL, NULL, NULL, NULL, NULL, 'KSupo'),
('ETaya', 'Edgar', 'Taya', NULL, NULL, NULL, NULL, NULL, 'ETaya'),
('MGauna', 'Mario', 'Gauna', NULL, NULL, NULL, NULL, NULL, 'MGauna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Edita`
--

CREATE TABLE IF NOT EXISTS `Edita` (
  `Cod_docente` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cod_silabo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_edit` date DEFAULT NULL,
  PRIMARY KEY (`Cod_docente`,`cod_silabo`),
  KEY `R_5` (`cod_silabo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sílabo`
--

CREATE TABLE IF NOT EXISTS `Sílabo` (
  `cod_silabo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `datos_inf` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capacidades` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evaluacion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `competencias` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prog_contenido` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estrategia_dinamica` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sumilla` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cod_silabo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usa`
--

CREATE TABLE IF NOT EXISTS `Usa` (
  `cod_silabo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cod_asignatura` char(18) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_uso` date DEFAULT NULL,
  PRIMARY KEY (`cod_silabo`,`cod_asignatura`),
  KEY `R_7` (`cod_asignatura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
