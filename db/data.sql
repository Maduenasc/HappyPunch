-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-04-2021 a las 15:40:50
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

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `num_equipo`, `nombre_equipo`, `Descripción`) VALUES
(1, 20, 'Raquetas de tenis', 'Raqueta individual. Han de reservarse de dos en dos'),
(2, 4, 'remos', 'Ideal para incorporar fuerza y tonificación a la rutina'),
(3, 4, 'Saco de boxeo', 'Acompañar al shadow Boxing'),
(4, 30, 'Guantes', 'necesarios para hacer el sparring'),
(5, 15, 'Cascos de protección', 'Imprescindible si se quiere hacer Sparring');

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `password`, `email`, `flag`) VALUES
(1, 'prueba1', '827ccb0eea8a706c4c34a16891f84e7b', 'prueba@algo.com', 1),
(2, 'prueba2', '54321', 'prueba@algo.com', 1),
(3, 'eladmin', '63a9f0ea7bb98050796b649e85481845', 'admin@red.ujaen.es', 0),
(4, 'prueba3', 'e10adc3949ba59abbe56e057f20f883e', 'prueba3@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
