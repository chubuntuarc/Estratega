-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-07-2015 a las 02:59:07
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ajuste_cambio`
--

INSERT INTO `ajuste_cambio` (`id_ajuste`, `dollar`, `dll_can`, `euro`, `fecha_ajuste`, `usuario`) VALUES
(1, 16.00, 12.36, 17.51, '2015-07-21 20:48:36', ''),
(2, 16.11, 12.37, 17.57, '2015-07-22 19:01:30', 'admin'),
(3, 16.12, 12.37, 17.61, '2015-07-22 20:23:42', 'admin');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ajuste_cambio_compra`
--

INSERT INTO `ajuste_cambio_compra` (`id_ajuste`, `dollar`, `dll_can`, `euro`, `fecha_ajuste`, `usuario`) VALUES
(1, 15.90, 10.00, 16.70, '2015-07-21 22:02:35', ''),
(2, 15.80, 9.90, 16.80, '2015-07-22 19:03:50', 'admin');

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
  `euros` float(11,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`id_caja`, `usuario`, `dolares`, `pesos`, `dlls_can`, `euros`) VALUES
(1, 'admin', 810.00, 4329.92, 1000.00, 1000.00),
(3, 'chubuntu', 100.00, 0.00, 0.00, 0.00),
(4, 'vubaeza', 100.00, 0.00, 0.00, 0.00);

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

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
(48, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 'Venta', 'admin', '2015-07-24 00:46:36');

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
(226, 100.00, 'Dollar', 16.12, 'Venta', 'admin', '2015-07-23 17:57:52');

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
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=latin1;

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
  MODIFY `folio_adicional` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ajuste_cambio`
--
ALTER TABLE `ajuste_cambio`
  MODIFY `id_ajuste` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ajuste_cambio_compra`
--
ALTER TABLE `ajuste_cambio_compra`
  MODIFY `id_ajuste` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=227;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
