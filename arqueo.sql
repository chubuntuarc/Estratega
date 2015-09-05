-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2015 a las 20:44:31
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arqueo`
--

CREATE TABLE IF NOT EXISTS `arqueo` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `p1000` int(11) NOT NULL,
  `p500` int(11) NOT NULL,
  `p200` int(11) NOT NULL,
  `p100` int(11) NOT NULL,
  `p50` int(11) NOT NULL,
  `p20` int(11) NOT NULL,
  `p10` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p05` int(11) NOT NULL,
  `d100` int(11) NOT NULL,
  `d50` int(11) NOT NULL,
  `d20` int(11) NOT NULL,
  `d10` int(11) NOT NULL,
  `d5` int(11) NOT NULL,
  `d2` int(11) NOT NULL,
  `d1` int(11) NOT NULL,
  `c100` int(11) NOT NULL,
  `c50` int(11) NOT NULL,
  `c20` int(11) NOT NULL,
  `c10` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `e100` int(11) NOT NULL,
  `e50` int(11) NOT NULL,
  `e20` int(11) NOT NULL,
  `e10` int(11) NOT NULL,
  `e5` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `e1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `arqueo`
--

INSERT INTO `arqueo` (`id`, `usuario`, `p1000`, `p500`, `p200`, `p100`, `p50`, `p20`, `p10`, `p5`, `p2`, `p1`, `p05`, `d100`, `d50`, `d20`, `d10`, `d5`, `d2`, `d1`, `c100`, `c50`, `c20`, `c10`, `c5`, `c2`, `c1`, `e100`, `e50`, `e20`, `e10`, `e5`, `e2`, `e1`) VALUES
(1, 'admin', 1, 1, 1, 2, 1, 1, 2, 1, 2, 1, 0, 10, 10, 11, 10, 10, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arqueo`
--
ALTER TABLE `arqueo`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
