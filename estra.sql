-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-07-2015 a las 22:48:18
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `estra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adicionales`
--

CREATE TABLE IF NOT EXISTS `adicionales` (
  `folio_adicional` int(11) NOT NULL,
  `concepto` varchar(30) NOT NULL,
  `comentario` varchar(50) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `cantidad` float(11,2) NOT NULL,
  `documento` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ajuste_cambio`
--

CREATE TABLE IF NOT EXISTS `ajuste_cambio` (
  `id_ajuste` int(11) NOT NULL,
  `dollar` float(6,2) NOT NULL,
  `dll_can` float(6,2) NOT NULL,
  `euro` float(6,2) NOT NULL,
  `fecha_ajuste` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ajuste_cambio`
--

INSERT INTO `ajuste_cambio` (`id_ajuste`, `dollar`, `dll_can`, `euro`, `fecha_ajuste`, `usuario`) VALUES
(1, 16.00, 12.36, 17.51, '2015-07-21 20:48:36', ''),
(2, 16.11, 12.37, 17.57, '2015-07-22 19:01:30', 'admin'),
(3, 16.12, 12.37, 17.61, '2015-07-22 20:23:42', 'admin'),
(4, 16.25, 12.41, 17.84, '2015-07-24 17:16:45', 'admin'),
(5, 16.26, 12.46, 17.85, '2015-07-25 20:40:47', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ajuste_cambio_compra`
--

CREATE TABLE IF NOT EXISTS `ajuste_cambio_compra` (
  `id_ajuste` int(11) NOT NULL,
  `dollar` float(6,2) NOT NULL,
  `dll_can` float(6,2) NOT NULL,
  `euro` float(6,2) NOT NULL,
  `fecha_ajuste` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ajuste_cambio_compra`
--

INSERT INTO `ajuste_cambio_compra` (`id_ajuste`, `dollar`, `dll_can`, `euro`, `fecha_ajuste`, `usuario`) VALUES
(1, 15.90, 10.00, 16.70, '2015-07-21 22:02:35', ''),
(2, 15.80, 9.90, 16.80, '2015-07-22 19:03:50', 'admin'),
(3, 16.00, 12.00, 17.30, '2015-07-24 17:21:40', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE IF NOT EXISTS `cajas` (
  `id_caja` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `dolares` float(11,2) NOT NULL,
  `pesos` float(11,2) NOT NULL,
  `dlls_can` float(11,2) NOT NULL,
  `euros` float(11,2) NOT NULL,
  `redondeo` float(11,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`id_caja`, `usuario`, `dolares`, `pesos`, `dlls_can`, `euros`, `redondeo`) VALUES
(1, 'admin', 562.00, 8121.88, 1000.00, 1000.00, -2.60),
(3, 'chubuntu', 100.00, 0.00, 0.00, 0.00, 0.00),
(4, 'vubaeza', 100.00, 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desglose_dolares`
--

CREATE TABLE IF NOT EXISTS `desglose_dolares` (
  `id_movimiento` int(11) NOT NULL,
  `100` int(11) NOT NULL,
  `50` int(11) NOT NULL,
  `20` int(11) NOT NULL,
  `10` int(11) NOT NULL,
  `5` int(11) NOT NULL,
  `2` int(11) NOT NULL,
  `1` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desglose_pesos`
--

CREATE TABLE IF NOT EXISTS `desglose_pesos` (
  `id_movimiento` int(11) NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `e` int(11) NOT NULL,
  `f` int(11) NOT NULL,
  `g` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  `i` int(11) NOT NULL,
  `j` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `desglose_pesos`
--

INSERT INTO `desglose_pesos` (`id_movimiento`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `tipo`, `usuario`, `fecha`) VALUES
(1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:33:53'),
(2, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:34:08'),
(3, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:36:37'),
(4, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:37:20'),
(5, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:38:04'),
(6, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:38:23'),
(7, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:38:50'),
(8, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:39:32'),
(9, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:44:38'),
(10, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:47:20'),
(11, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:47:24'),
(12, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:47:45'),
(13, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:49:01'),
(14, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:49:23'),
(15, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:51:44'),
(16, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:52:07'),
(17, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:52:48'),
(18, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:54:02'),
(19, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:56:20'),
(20, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:57:36'),
(21, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:57:52'),
(22, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-23 23:59:20'),
(23, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:02:12'),
(24, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:02:34'),
(25, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:06:01'),
(26, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:06:45'),
(27, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:06:57'),
(28, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:08:08'),
(29, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:14:16'),
(30, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:14:25'),
(31, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:15:23'),
(32, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:15:31'),
(33, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:16:20'),
(34, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:17:56'),
(35, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:19:23'),
(36, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:19:30'),
(37, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:19:43'),
(38, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:21:24'),
(39, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:22:30'),
(40, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:33:26'),
(41, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:33:40'),
(42, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:34:10'),
(43, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:35:40'),
(44, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:36:00'),
(45, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:37:29'),
(46, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:37:55'),
(47, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:38:09'),
(48, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:46:36'),
(49, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:00:51'),
(50, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:02:22'),
(51, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:02:31'),
(52, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:06:30'),
(53, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:07:02'),
(54, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:09:37'),
(55, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:12:18'),
(56, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:19:48'),
(57, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:20:22'),
(58, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:30:49'),
(59, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 16:31:13'),
(60, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:13:03'),
(61, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:14:12'),
(62, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:14:13'),
(63, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:14:36'),
(64, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:15:08'),
(65, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:16:00'),
(66, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:16:47'),
(67, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:21:42'),
(68, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:22:09'),
(69, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:31:46'),
(70, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:34:54'),
(71, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:35:52'),
(72, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:36:10'),
(73, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:39:46'),
(74, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 17:40:34'),
(75, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 18:07:08'),
(76, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 18:18:50'),
(77, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 18:19:18'),
(78, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 18:20:36'),
(79, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 18:34:42'),
(80, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:23:34'),
(81, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:25:16'),
(82, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:25:45'),
(83, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:27:14'),
(84, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:27:37'),
(85, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:30:43'),
(86, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:32:46'),
(87, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:32:57'),
(88, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:33:06'),
(89, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:33:26'),
(90, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:33:40'),
(91, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:33:52'),
(92, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:34:08'),
(93, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:34:22'),
(94, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:35:28'),
(95, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:36:18'),
(96, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:36:34'),
(97, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:36:47'),
(98, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:37:44'),
(99, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:40:59'),
(100, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:46:52'),
(101, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 19:47:31'),
(102, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:37:23'),
(103, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:44:38'),
(104, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:44:53'),
(105, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:46:03'),
(106, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:47:12'),
(107, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:47:46'),
(108, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:48:27'),
(109, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:48:52'),
(110, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:49:07'),
(111, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:50:03'),
(112, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:51:43'),
(113, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:54:41'),
(114, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:55:28'),
(115, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:55:58'),
(116, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:57:17'),
(117, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:58:40'),
(118, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 15:59:16'),
(119, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:01:41'),
(120, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:02:13'),
(121, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:02:34'),
(122, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:03:28'),
(123, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:03:58'),
(124, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:04:52'),
(125, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:07:07'),
(126, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:07:38'),
(127, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:08:23'),
(128, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:09:45'),
(129, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', '', '2015-07-25 16:10:49'),
(130, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:11:08'),
(131, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:13:35'),
(132, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:14:07'),
(133, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:14:32'),
(134, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:14:56'),
(135, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:15:15'),
(136, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:15:35'),
(137, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:16:17'),
(138, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:16:30'),
(139, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:17:37'),
(140, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:18:37'),
(141, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:19:14'),
(142, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:19:57'),
(143, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:20:34'),
(144, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:21:47'),
(145, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:23:51'),
(146, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:24:19'),
(147, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:24:48'),
(148, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:26:17'),
(149, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:37:43'),
(150, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:38:05'),
(151, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:38:48'),
(152, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:38:55'),
(153, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:40:42'),
(154, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:41:37'),
(155, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:43:50'),
(156, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:49:14'),
(157, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 16:50:07'),
(158, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:07:19'),
(159, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:09:31'),
(160, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:13:16'),
(161, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:15:38'),
(162, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:15:50'),
(163, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:16:14'),
(164, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:16:56'),
(165, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:19:03'),
(166, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:20:03'),
(167, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:20:57'),
(168, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:21:38'),
(169, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:23:43'),
(170, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:24:39'),
(171, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:25:05'),
(172, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:26:22'),
(173, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:27:40'),
(174, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:28:57'),
(175, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:31:31'),
(176, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:32:29'),
(177, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:34:45'),
(178, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:35:31'),
(179, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:35:57'),
(180, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:44:23'),
(181, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:45:38'),
(182, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:45:43'),
(183, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:46:55'),
(184, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 17:58:35'),
(185, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:00:16'),
(186, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:06:00'),
(187, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:09:13'),
(188, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:09:42'),
(189, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:09:54'),
(190, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:10:13'),
(191, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:10:37'),
(192, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:10:51'),
(193, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:13:33'),
(194, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:13:44'),
(195, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:14:46'),
(196, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:16:18'),
(197, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:17:35'),
(198, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:20:26'),
(199, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:20:58'),
(200, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:22:09'),
(201, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:22:22'),
(202, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:22:57'),
(203, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:23:59'),
(204, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:27:26'),
(205, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:30:43'),
(206, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:31:13'),
(207, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:32:21'),
(208, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:35:41'),
(209, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:39:39'),
(210, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:40:44'),
(211, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:40:54'),
(212, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:41:00'),
(213, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:45:10'),
(214, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:45:59'),
(215, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:46:22'),
(216, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:51:44'),
(217, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:52:37'),
(218, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:53:13'),
(219, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:55:23'),
(220, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:58:10'),
(221, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 18:58:42'),
(222, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:00:14'),
(223, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:02:02'),
(224, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:04:52'),
(225, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:05:42'),
(226, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:06:26'),
(227, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:06:34'),
(228, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:07:25'),
(229, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:08:21'),
(230, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:08:49'),
(231, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:12:27'),
(232, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:12:32'),
(233, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:13:39'),
(234, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:14:03'),
(235, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:15:31'),
(236, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:15:35'),
(237, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:15:41'),
(238, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:23:58'),
(239, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:26:38'),
(240, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:27:48'),
(241, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:29:07'),
(242, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:31:07'),
(243, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:32:23'),
(244, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:32:47'),
(245, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:33:12'),
(246, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:33:47'),
(247, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:37:18'),
(248, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:39:40'),
(249, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 19:40:04'),
(250, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:01:57'),
(251, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:02:03'),
(252, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:02:32'),
(253, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:04:42'),
(254, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:12:58'),
(255, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:13:04'),
(256, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:16:34'),
(257, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:17:05'),
(258, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:18:14'),
(259, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:21:00'),
(260, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:21:29'),
(261, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:25:01'),
(262, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:25:06'),
(263, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:28:42'),
(264, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:29:51'),
(265, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:30:39'),
(266, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:36:43'),
(267, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:36:52'),
(268, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:38:23'),
(269, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:38:55'),
(270, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:39:27'),
(271, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:40:49'),
(272, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:41:00'),
(273, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:42:32'),
(274, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:43:10'),
(275, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:43:36'),
(276, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:43:47'),
(277, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:44:13'),
(278, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:44:22'),
(279, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:44:34'),
(280, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:44:52'),
(281, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:45:48'),
(282, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:46:32'),
(283, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-25 20:47:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_adicional`
--

CREATE TABLE IF NOT EXISTS `historico_adicional` (
  `folio_adicional` int(11) NOT NULL,
  `concepto` varchar(30) NOT NULL,
  `comentario` varchar(50) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `cantidad` float(11,2) NOT NULL,
  `documento` varchar(30) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historico_adicional`
--

INSERT INTO `historico_adicional` (`folio_adicional`, `concepto`, `comentario`, `tipo`, `cantidad`, `documento`, `fecha`, `usuario`) VALUES
(1, 'Transferencia', 'Efectivo deposito victor', 'Entrada', 1612.00, '', '2015-07-23 17:59:57', 'admin'),
(2, 'Transferencia', 'LP Pago victor', 'Salida', 1612.00, '', '2015-07-23 18:01:08', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_movimiento`
--

CREATE TABLE IF NOT EXISTS `historico_movimiento` (
  `id_movimiento` int(11) NOT NULL,
  `cantidad` float(11,2) NOT NULL,
  `divisa` varchar(30) NOT NULL,
  `tipo_cambio` float(6,2) NOT NULL,
  `tipo_movimiento` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historico_movimiento`
--

INSERT INTO `historico_movimiento` (`id_movimiento`, `cantidad`, `divisa`, `tipo_cambio`, `tipo_movimiento`, `usuario`, `fecha`) VALUES
(191, 10.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-22 14:33:08'),
(192, 10.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-22 14:50:18'),
(193, 63.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-22 14:50:44'),
(194, 50.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-22 14:52:39'),
(195, 50.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-22 14:52:48'),
(196, 50.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-22 14:53:29'),
(197, 50.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-22 14:53:39'),
(198, 50.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-22 14:55:30'),
(199, 50.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-22 14:55:38'),
(200, 50.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-22 14:55:45'),
(201, 50.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-22 14:56:17'),
(202, 34.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 13:31:23'),
(203, 10.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 13:32:44'),
(204, 10.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 13:34:09'),
(205, 120.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 13:35:30'),
(206, 120.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-23 13:35:44'),
(207, 62.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 13:36:20'),
(208, 63.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-23 13:36:25'),
(209, 20.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 13:51:07'),
(210, 80.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 16:31:02'),
(211, 50.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 16:54:43'),
(212, 20.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:05:47'),
(213, 40.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:12:13'),
(214, 60.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:15:23'),
(215, 10.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:18:14'),
(216, 15.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:22:02'),
(217, 10.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:23:59'),
(218, 16.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:26:11'),
(219, 10.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:31:51'),
(220, 10.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:33:19'),
(221, 10.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:34:07'),
(222, 633.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-23 17:36:46'),
(223, 7.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-23 17:37:25'),
(224, 20.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:38:23'),
(225, 10.00, 'Dollar', 15.80, 'Compra', 'admin', '2015-07-23 17:50:57'),
(226, 100.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:57:52'),
(1, 73.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-24 10:20:22'),
(2, 20.00, 'Dll Can', 12.37, 'Venta', 'admin', '2015-07-24 11:14:19'),
(3, 20.00, 'Dll Can', 12.37, 'Venta', 'admin', '2015-07-24 11:14:57'),
(4, 15.00, 'Dll Can', 9.90, 'Compra', 'admin', '2015-07-24 11:21:12'),
(5, 35.00, 'Euro', 17.84, 'Venta', 'admin', '2015-07-24 11:27:02'),
(6, 175.00, 'Dollar', 16.00, 'Venta', 'admin', '2015-07-24 12:18:50'),
(7, 200.00, 'Dollar', 16.00, 'Compra', 'admin', '2015-07-24 12:20:03'),
(8, 122.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-24 13:25:16'),
(9, 100.00, 'Dollar', 16.00, 'Compra', 'admin', '2015-07-24 13:26:54'),
(10, 100.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 12:13:44'),
(11, 184.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 12:23:59'),
(12, 40.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 12:32:21'),
(13, 21.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 12:40:54'),
(14, 21.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 12:45:22'),
(15, 9.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 12:46:14'),
(16, 600.00, 'Dollar', 16.00, 'Compra', 'admin', '2015-07-25 12:51:59'),
(17, 21.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 12:53:40'),
(18, 21.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 12:58:17'),
(19, 21.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 12:58:49'),
(20, 21.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 13:00:24'),
(21, 23.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 13:02:13'),
(22, 25.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 13:06:42'),
(23, 27.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 13:07:34'),
(24, 21.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 13:08:28'),
(25, 23.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 13:08:58'),
(26, 25.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 13:12:40'),
(27, 27.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 13:15:35'),
(28, 15.00, 'Dollar', 16.05, 'Compra', 'admin', '2015-07-25 13:26:12'),
(29, 50.00, 'Dollar', 16.05, 'Compra', 'admin', '2015-07-25 13:26:57'),
(30, 16.00, 'Dollar', 15.05, 'Compra', 'admin', '2015-07-25 13:28:09'),
(31, 16.00, 'Dollar', 15.90, 'Compra', 'admin', '2015-07-25 13:31:19'),
(32, 21.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 14:16:44'),
(33, 21.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 14:17:13'),
(34, 25.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 14:18:22'),
(35, 23.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 14:21:09'),
(36, 21.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 14:21:42'),
(37, 23.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 14:25:14'),
(38, 30.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 14:28:51'),
(39, 3.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 14:28:51'),
(40, 15.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 14:30:09'),
(41, 0.00, 'Cancelado', 16.25, 'Venta', 'admin', '2015-07-25 14:30:09'),
(42, 7.00, 'Dollar', 16.25, 'Venta', 'admin', '2015-07-25 14:37:06'),
(43, 100.00, 'Dollar', 16.00, 'Compra', 'admin', '2015-07-25 14:38:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE IF NOT EXISTS `movimientos` (
  `id_movimiento` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `divisa` varchar(30) NOT NULL,
  `tipo_cambio` float(11,2) NOT NULL,
  `tipo_movimiento` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id_movimiento`, `cantidad`, `divisa`, `tipo_cambio`, `tipo_movimiento`, `usuario`, `fecha`) VALUES
(44, 23, 'Dollar', 16.26, 'Venta', 'admin', '2015-07-25 20:41:29'),
(45, 51, 'Dollar', 16.26, 'Venta', 'admin', '2015-07-25 20:43:24'),
(46, 52, 'Dollar', 16.26, 'Venta', 'admin', '2015-07-25 20:44:22'),
(47, 52, 'Dollar', 16.26, 'Venta', 'admin', '2015-07-25 20:44:52'),
(48, 52, 'Dollar', 16.26, 'Venta', 'admin', '2015-07-25 20:46:00'),
(49, 52, 'Dollar', 16.26, 'Venta', 'admin', '2015-07-25 20:46:42'),
(50, 53, 'Dollar', 16.26, 'Venta', 'admin', '2015-07-25 20:47:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `rol`, `usuario`, `pass`) VALUES
(1, 'Administrador', 'admin', 'admin', 'admin'),
(2, 'Jesus Arciniega', 'admin', 'chubuntu', 'Ubuntuarc1'),
(3, 'Victor Baeza', 'admin', 'vubaeza', '07121991');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adicionales`
--
ALTER TABLE `adicionales`
  ADD PRIMARY KEY (`folio_adicional`);

--
-- Indices de la tabla `ajuste_cambio`
--
ALTER TABLE `ajuste_cambio`
  ADD PRIMARY KEY (`id_ajuste`);

--
-- Indices de la tabla `ajuste_cambio_compra`
--
ALTER TABLE `ajuste_cambio_compra`
  ADD PRIMARY KEY (`id_ajuste`);

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`id_caja`);

--
-- Indices de la tabla `desglose_dolares`
--
ALTER TABLE `desglose_dolares`
  ADD PRIMARY KEY (`id_movimiento`);

--
-- Indices de la tabla `desglose_pesos`
--
ALTER TABLE `desglose_pesos`
  ADD PRIMARY KEY (`id_movimiento`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id_movimiento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adicionales`
--
ALTER TABLE `adicionales`
  MODIFY `folio_adicional` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ajuste_cambio`
--
ALTER TABLE `ajuste_cambio`
  MODIFY `id_ajuste` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ajuste_cambio_compra`
--
ALTER TABLE `ajuste_cambio_compra`
  MODIFY `id_ajuste` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `id_caja` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `desglose_dolares`
--
ALTER TABLE `desglose_dolares`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `desglose_pesos`
--
ALTER TABLE `desglose_pesos`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=284;
--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
