-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-04-2022 a las 22:52:33
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_cat` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre_cat`) VALUES
(1, 'Accion'),
(2, 'Deportes'),
(4, 'Estrategia'),
(5, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

DROP TABLE IF EXISTS `entradas`;
CREATE TABLE IF NOT EXISTS `entradas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(10) DEFAULT NULL,
  `categoria_id` int(10) DEFAULT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` mediumtext,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_entrada_usuario` (`usuario_id`),
  KEY `fk_entrada_categoria` (`categoria_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 7, 2, 'Review FIFA 22', 'La descripcion de la jugabilidad del juego', '2022-04-06'),
(2, 8, 4, 'COD Review', 'Review del juego COD', '2022-04-06'),
(3, 9, 5, 'RE 7 Review', 'Review del juego de terror RE 7', '2022-04-11'),
(4, 8, 5, 'Review Tomb Raider', 'Review del juego', '2022-01-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `apellidos` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha_registro`) VALUES
(10, 'Prueba', 'Test', 'prueba@prueba.cl', '$2y$04$c8.Ukj98KzBybMvABwcFSuLjX8Jv2voT1YOryYBtY54TPaWFE81Fq', '2022-04-14'),
(7, 'Juan', 'Juan', 'juan@juan.com', '$2y$04$uTF4P.VB.0bck0VrATL3IuEfkNwZm4VZ6LKg8V/QaoCC1F7UBpt7q', '2022-03-23'),
(8, 'abc', 'abc', 'abc@abc.cl', '$2y$04$ykCbdE2B7WSzLse9bydFUeKCh6MI3FDSgMYnlUACuPFz3iIDxsQk.', '2022-03-23'),
(9, 'Matias', 'Matias', 'matias@matias.com', '$2y$04$r8dfyEAEp7a/apiNHY4kU.FgF5k93Gd6Tuwr4PM2e6ryE7wFIbaNi', '2022-04-05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
