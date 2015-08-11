-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2015 at 09:02 
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `estra`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuentas_contables`
--

CREATE TABLE IF NOT EXISTS `cuentas_contables` (
  `idCuenta` int(11) NOT NULL,
  `cuenta_contable` varchar(30) NOT NULL,
  `concepto` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuentas_contables`
--

INSERT INTO `cuentas_contables` (`idCuenta`, `cuenta_contable`, `concepto`) VALUES
(1, '5101000000000000', 'Gastos generales'),
(2, '5101000100000000', 'Sueldos'),
(3, '5101000200000000', 'Vacaciones'),
(4, '5101000300000000', 'Primas vacacionales'),
(5, '5101000400000000', 'Aguinaldos'),
(6, '5101000500000000', 'Primas dominicales'),
(7, '5101000600000000', 'Gratificaciones'),
(8, '5101000700000000', 'Prima de antiguedad'),
(9, '5101000800000000', 'Publicidad'),
(10, '5101000900000000', 'IMSS'),
(11, '5101001000000000', 'Papeleria y utiles de oficina'),
(12, '5101001100000000', 'Mantenimiento eq. transporte'),
(13, '5101001200000000', 'Mantenimiento eq. en general'),
(14, '5101001300000000', 'Mantenimiento edificio'),
(15, '5101001400000000', 'Gastos de viaje'),
(16, '5101001500000000', 'Transporte de valores'),
(17, '5101001600000000', 'Honorarios'),
(18, '5101001700000000', 'Donativos'),
(19, '5101001800000000', 'Cuotas y suscripciones'),
(20, '5101001900000000', 'Telefono'),
(21, '5101002200000000', 'Depreciaciones'),
(22, '5101002100000000', 'Renta'),
(23, '5101002300000000', 'Seguros'),
(24, '5101002400000000', 'Impuesto sobre nomina'),
(25, '5101002500000000', 'Retiro , cesantia y vejez'),
(26, '5101002600000000', 'Luz'),
(27, '5101002700000000', 'Agua'),
(28, '5101002800000000', 'Infonavit'),
(29, '5101002900000000', 'Internet'),
(30, '5101003000000000', 'No deducibles'),
(31, '5101003100000000', 'Alarma'),
(32, '5101003200000000', 'Recargos fiscales'),
(33, '5101003300000000', 'Fletes y envios'),
(34, '5101003500000000', 'Capacitacion y adiestramiento'),
(35, '5101003600000000', 'Derechos, productos y aprovechamientos'),
(36, '5101003700000000', 'Combustibles y lubricantes'),
(37, '5101003800000000', 'Software'),
(38, '5101003900000000', 'Camaras de seguridad'),
(39, '5101003400000000', 'Gastos por comprobar'),
(40, '5101004000000000', 'Facturacion electronica'),
(41, '5101004100000000', 'Gastos notariales');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuentas_contables`
--
ALTER TABLE `cuentas_contables`
  ADD PRIMARY KEY (`idCuenta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuentas_contables`
--
ALTER TABLE `cuentas_contables`
  MODIFY `idCuenta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
