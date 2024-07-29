-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-05-2021 a las 22:51:37
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

DROP TABLE IF EXISTS `equipo`;
CREATE TABLE IF NOT EXISTS `equipo` (
  `id_equipo` int NOT NULL AUTO_INCREMENT,
  `num_equipo` int NOT NULL,
  `nombre_equipo` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Descripción` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_equipo`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `num_equipo`, `nombre_equipo`, `Descripción`) VALUES
(1, 20, 'Raquetas de tenis', 'Raqueta individual. Han de reservarse de dos en dos'),
(2, 4, 'remos', 'Ideal para incorporar fuerza y tonificación a la rutina'),
(3, 4, 'Saco de boxeo', 'Acompañar al shadow Boxing'),
(4, 30, 'Guantes', 'necesarios para hacer el sparring'),
(5, 15, 'Cascos de protección', 'Imprescindible si se quiere hacer Sparring');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_alquilado`
--

DROP TABLE IF EXISTS `equipo_alquilado`;
CREATE TABLE IF NOT EXISTS `equipo_alquilado` (
  `id_equipo` int NOT NULL,
  `id_usuario` int NOT NULL,
  `fecha_alquilado` datetime NOT NULL,
  `num_equipo_alquilado` int NOT NULL,
  UNIQUE KEY `id_equipo` (`id_equipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE IF NOT EXISTS `reservas` (
  `id_reserva` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `fecha_reserva` datetime(6) NOT NULL,
  `fecha_fin_reserva` datetime(6) NOT NULL,
  PRIMARY KEY (`id_reserva`),
  UNIQUE KEY `id_usuario` (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `flag` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `password`, `email`, `flag`) VALUES
(1, 'prueba1', '827ccb0eea8a706c4c34a16891f84e7b', 'prueba@algo.com', 1),
(2, 'prueba2', '54321', 'prueba@algo.com', 1),
(3, 'eladmin', 'dbb1c112a931eeb16299d9de1f30161d', 'admin@red.ujaen.es', 0),
(4, 'prueba3', 'e10adc3949ba59abbe56e057f20f883e', 'prueba3@gmail.com', 1),
(5, '', '12345678', 'sadf@red.uajn.es', 1),
(6, '', '25d55ad283aa400af464c76d713c07ad', 'asdfasdf@gmail.com', 1),
(7, 'easd', '25d55ad283aa400af464c76d713c07ad', 'asdf@rad.prueba.com', 1),
(8, 'adminm', '25d55ad283aa400af464c76d713c07ad', 'admin@red.ujaen.es', 1),
(9, 'adminm', '25d55ad283aa400af464c76d713c07ad', 'admin@red.ujaen.es', 1),
(12, 'admin', '25d55ad283aa400af464c76d713c07ad', 'adminsitomoisito@red.ujaen.es', 1),
(11, '12345464577', '25d55ad283aa400af464c76d713c07ad', 'admin@red.ujaen.es', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
