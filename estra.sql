-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2015 a las 00:09:41
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

--
-- Volcado de datos para la tabla `adicionales`
--

INSERT INTO `adicionales` (`folio_adicional`, `concepto`, `comentario`, `tipo`, `cantidad`, `documento`, `fecha`, `usuario`) VALUES
(1, 'Agua', 'Pago del agua', 'Salida', 300.00, 'DbConnection.inc.php', '2015-07-20 17:52:08', 'admin'),
(2, 'Otro', 'Test', 'Salida', 300.00, '', '2015-07-21 18:52:27', 'admin');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ajuste_cambio`
--

INSERT INTO `ajuste_cambio` (`id_ajuste`, `dollar`, `dll_can`, `euro`, `fecha_ajuste`, `usuario`) VALUES
(1, 16.00, 12.36, 17.51, '2015-07-21 20:48:36', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ajuste_cambio_compra`
--

INSERT INTO `ajuste_cambio_compra` (`id_ajuste`, `dollar`, `dll_can`, `euro`, `fecha_ajuste`, `usuario`) VALUES
(1, 15.90, 10.00, 16.70, '2015-07-21 22:02:35', '');

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
(1, 'admin', -2459.00, 105319.90, -10.00, 1000.00),
(3, 'chubuntu', 0.00, 0.00, 0.00, 0.00),
(4, 'vubaeza', 0.00, 0.00, 0.00, 0.00);

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
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id_movimiento`, `cantidad`, `divisa`, `tipo_cambio`, `tipo_movimiento`, `usuario`, `fecha`) VALUES
(133, 100, 'Dollar', 16.00, 'Venta', 'admin', '2015-07-20 17:12:03'),
(134, 200, 'Dollar', 15.00, 'Compra', 'admin', '2015-07-20 17:12:03'),
(135, 100, 'Dollar', 16.00, 'Venta', 'admin', '2015-07-20 17:12:03'),
(136, 1000, 'Dollar', 16.00, 'Venta', 'admin', '2015-07-20 17:12:03'),
(137, 1000, 'Euro', 18.00, 'Venta', 'admin', '2015-07-20 17:12:03'),
(138, 1000, 'Dollar Can', 10.00, 'Venta', 'admin', '2015-07-20 17:12:03'),
(139, 1000, 'Dollar Can', 10.00, 'Venta', 'admin', '2015-07-20 17:12:03'),
(140, 1000, 'Dollar Can', 10.00, 'Venta', 'admin', '2015-07-20 17:12:03'),
(141, 100, 'Dollar', 15.10, 'Compra', 'admin', '2015-07-20 17:12:03'),
(142, 151, 'Dollar', 15.10, 'Compra', 'admin', '2015-07-20 17:12:03'),
(143, 10, 'Dollar Can', 10.00, 'Venta', 'admin', '2015-07-20 17:12:03'),
(144, 250, 'Dollar', 14.00, 'Compra', 'admin', '2015-07-20 17:12:03'),
(145, 100, 'Dollar', 14.00, 'Compra', 'admin', '2015-07-20 17:12:03'),
(146, 100, 'Dollar', 15.50, 'Venta', 'admin', '2015-07-20 17:12:03'),
(147, 2560, 'Dollar', 16.00, 'Venta', 'admin', '2015-07-20 17:12:03'),
(148, 400, 'Dollar', 15.50, 'Venta', 'admin', '2015-07-20 17:12:03');

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
  MODIFY `id_ajuste` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ajuste_cambio_compra`
--
ALTER TABLE `ajuste_cambio_compra`
  MODIFY `id_ajuste` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `id_caja` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
