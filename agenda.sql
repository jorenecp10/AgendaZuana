-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-08-2020 a las 15:19:45
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `cantidad` smallint(3) NOT NULL,
  `usados` smallint(3) UNSIGNED ZEROFILL NOT NULL DEFAULT 000,
  `precheckout` bit(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `torre` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3552 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `fecha`, `hora_inicio`, `hora_fin`, `cantidad`, `usados`, `precheckout`, `created_at`, `updated_at`, `torre`) VALUES
(3507, '2020-08-22', '16:30:00', '16:40:00', 3, 002, b'1', '2020-08-21 20:19:20', '2020-08-21 20:52:29', 2),
(3508, '2020-08-22', '16:40:00', '16:50:00', 3, 003, b'1', '2020-08-21 20:19:20', '2020-08-21 23:48:36', 2),
(3509, '2020-08-22', '16:50:00', '17:00:00', 3, 002, b'1', '2020-08-21 20:19:20', '2020-08-22 16:42:27', 2),
(3510, '2020-08-23', '05:30:00', '05:40:00', 3, 003, b'0', '2020-08-21 20:19:41', '2020-08-21 23:48:44', 2),
(3511, '2020-08-23', '05:40:00', '05:50:00', 3, 000, b'0', '2020-08-21 20:19:41', '2020-08-21 20:19:41', 2),
(3512, '2020-08-23', '05:50:00', '06:00:00', 3, 002, b'0', '2020-08-21 20:19:41', '2020-08-22 16:42:43', 2),
(3513, '2020-08-23', '06:00:00', '06:10:00', 3, 002, b'0', '2020-08-21 20:19:41', '2020-08-21 21:41:45', 2),
(3514, '2020-08-23', '06:10:00', '06:20:00', 3, 000, b'0', '2020-08-21 20:19:41', '2020-08-21 20:19:41', 2),
(3515, '2020-08-23', '06:20:00', '06:30:00', 3, 000, b'0', '2020-08-21 20:19:41', '2020-08-21 20:19:41', 2),
(3516, '2020-08-29', '05:30:00', '05:40:00', 2, 000, b'0', '2020-08-28 14:56:00', '2020-08-28 14:56:00', 1),
(3517, '2020-08-29', '05:40:00', '05:50:00', 2, 000, b'0', '2020-08-28 14:56:00', '2020-08-28 14:56:00', 1),
(3518, '2020-08-29', '05:50:00', '06:00:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3519, '2020-08-29', '06:00:00', '06:10:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3520, '2020-08-29', '06:10:00', '06:20:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3521, '2020-08-29', '06:20:00', '06:30:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3522, '2020-08-29', '06:30:00', '06:40:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3523, '2020-08-29', '06:40:00', '06:50:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3524, '2020-08-29', '06:50:00', '07:00:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3525, '2020-08-29', '07:00:00', '07:10:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3526, '2020-08-29', '07:10:00', '07:20:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3527, '2020-08-29', '07:20:00', '07:30:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3528, '2020-08-29', '07:30:00', '07:40:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3529, '2020-08-29', '07:40:00', '07:50:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3530, '2020-08-29', '07:50:00', '08:00:00', 2, 001, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:29', 1),
(3531, '2020-08-29', '08:00:00', '08:10:00', 2, 001, b'0', '2020-08-28 14:56:01', '2020-08-28 15:12:56', 1),
(3532, '2020-08-29', '08:10:00', '08:20:00', 2, 000, b'0', '2020-08-28 14:56:01', '2020-08-28 14:56:01', 1),
(3533, '2020-08-29', '08:20:00', '08:30:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3534, '2020-08-29', '08:30:00', '08:40:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3535, '2020-08-29', '08:40:00', '08:50:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3536, '2020-08-29', '08:50:00', '09:00:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3537, '2020-08-29', '09:00:00', '09:10:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3538, '2020-08-29', '09:10:00', '09:20:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3539, '2020-08-29', '09:20:00', '09:30:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3540, '2020-08-29', '09:30:00', '09:40:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3541, '2020-08-29', '09:40:00', '09:50:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3542, '2020-08-29', '09:50:00', '10:00:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3543, '2020-08-29', '10:00:00', '10:10:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3544, '2020-08-29', '10:10:00', '10:20:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3545, '2020-08-29', '10:20:00', '10:30:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3546, '2020-08-29', '10:30:00', '10:40:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3547, '2020-08-29', '10:40:00', '10:50:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3548, '2020-08-29', '10:50:00', '11:00:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3549, '2020-08-29', '11:00:00', '11:10:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3550, '2020-08-29', '11:10:00', '11:20:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1),
(3551, '2020-08-29', '11:20:00', '11:30:00', 2, 000, b'0', '2020-08-28 14:56:02', '2020-08-28 14:56:02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE IF NOT EXISTS `citas` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `clientes_id` varchar(20) NOT NULL,
  `agenda_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_citas_clientes_idx` (`clientes_id`),
  KEY `fk_citas_agenda_idx` (`agenda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `clientes_id`, `agenda_id`, `created_at`, `updated_at`) VALUES
(255, '1082920556', 3507, '2020-08-21 20:38:52', '2020-08-21 20:38:52'),
(256, '1082920556', 3510, '2020-08-21 20:39:03', '2020-08-21 20:39:03'),
(257, '84459788', 3507, '2020-08-21 20:52:29', '2020-08-21 20:52:29'),
(258, '84459788', 3510, '2020-08-21 20:52:38', '2020-08-21 20:52:38'),
(259, '222222', 3508, '2020-08-21 21:06:46', '2020-08-21 21:06:46'),
(260, '222222', 3513, '2020-08-21 21:07:00', '2020-08-21 21:07:00'),
(261, '123456', 3508, '2020-08-21 21:41:34', '2020-08-21 21:41:34'),
(262, '123456', 3513, '2020-08-21 21:41:45', '2020-08-21 21:41:45'),
(263, '456998', 3508, '2020-08-21 23:48:36', '2020-08-21 23:48:36'),
(264, '456998', 3510, '2020-08-21 23:48:44', '2020-08-21 23:48:44'),
(265, '11234566', 3509, '2020-08-22 01:59:52', '2020-08-22 01:59:52'),
(266, '11234566', 3512, '2020-08-22 02:00:02', '2020-08-22 02:00:02'),
(267, '444656556', 3509, '2020-08-22 16:42:27', '2020-08-22 16:42:27'),
(268, '444656556', 3512, '2020-08-22 16:42:43', '2020-08-22 16:42:43'),
(269, '1082920556', 3530, '2020-08-28 14:56:29', '2020-08-28 14:56:29'),
(270, '34342324', 3531, '2020-08-28 15:12:56', '2020-08-28 15:12:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `habitacion` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `habitacion`, `created_at`, `updated_at`) VALUES
('1082920556', 'jose rene correa', '320', '2020-08-21 19:35:24', '2020-08-28 14:56:15'),
('11234566', 'eliana guzman', '1442', '2020-08-22 01:59:43', '2020-08-22 01:59:43'),
('123456', 'maria bartolini', '1633a', '2020-08-21 21:41:25', '2020-08-21 21:41:25'),
('222222', 'ivan antonio escorcia', '1432', '2020-08-21 21:06:32', '2020-08-21 21:06:32'),
('2323232666', 'juan perez', '1542', '2020-08-28 14:54:55', '2020-08-28 14:54:55'),
('32323', 'ivan antonio escorcia', '1532', '2020-08-21 19:37:43', '2020-08-21 19:37:43'),
('34342324', 'gabriela reyes', '210A', '2020-08-28 15:12:43', '2020-08-28 15:12:43'),
('444656556', 'rodrigo parra', '532', '2020-08-22 16:42:19', '2020-08-22 16:42:19'),
('456998', 'rauw alejandro', '1539', '2020-08-21 23:48:26', '2020-08-21 23:48:26'),
('7798989', 'jose ramon', '1637', '2020-08-21 20:05:13', '2020-08-21 20:05:13'),
('84459788', 'Erick Mendoza', '1532', '2020-08-21 19:37:16', '2020-08-21 20:52:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

DROP TABLE IF EXISTS `habitaciones`;
CREATE TABLE IF NOT EXISTS `habitaciones` (
  `id` varchar(10) NOT NULL,
  `numero_torre` int(10) NOT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id`, `numero_torre`, `created_at`, `updated_at`) VALUES
('102', 1, NULL, NULL),
('103', 1, NULL, NULL),
('933A', 2, NULL, NULL),
('1032', 2, NULL, NULL),
('933', 2, NULL, NULL),
('1033', 2, NULL, NULL),
('1033A', 2, NULL, NULL),
('1035', 2, NULL, NULL),
('1035A', 2, NULL, NULL),
('1037', 2, NULL, NULL),
('1037A', 2, NULL, NULL),
('1039', 2, NULL, NULL),
('1039A', 2, NULL, NULL),
('1041', 2, NULL, NULL),
('1042', 2, NULL, NULL),
('104', 1, NULL, NULL),
('105', 1, NULL, NULL),
('1135', 2, NULL, NULL),
('1133A', 2, NULL, NULL),
('106', 1, NULL, NULL),
('106A', 1, NULL, NULL),
('107', 1, NULL, NULL),
('108', 1, NULL, NULL),
('108A', 1, NULL, NULL),
('109', 1, NULL, NULL),
('110', 1, NULL, NULL),
('110A', 1, NULL, NULL),
('111', 1, NULL, NULL),
('1132', 2, NULL, NULL),
('1137A', 2, NULL, NULL),
('1139A', 2, NULL, NULL),
('1141', 2, NULL, NULL),
('1142', 2, NULL, NULL),
('1232', 2, NULL, NULL),
('1233', 2, NULL, NULL),
('1233A', 2, NULL, NULL),
('1235', 2, NULL, NULL),
('1235A', 2, NULL, NULL),
('1237', 2, NULL, NULL),
('1237A', 2, NULL, NULL),
('1239', 2, NULL, NULL),
('1239A', 2, NULL, NULL),
('837A', 2, NULL, NULL),
('1241', 2, NULL, NULL),
('1242', 2, NULL, NULL),
('1332', 2, NULL, NULL),
('1333', 2, NULL, NULL),
('1333A', 2, NULL, NULL),
('1335', 2, NULL, NULL),
('1335A', 2, NULL, NULL),
('1337', 2, NULL, NULL),
('1337A', 2, NULL, NULL),
('1339', 2, NULL, NULL),
('1339A', 2, NULL, NULL),
('1341', 2, NULL, NULL),
('1342', 2, NULL, NULL),
('1432', 2, NULL, NULL),
('1433', 2, NULL, NULL),
('1433A', 2, NULL, NULL),
('1435', 2, NULL, NULL),
('1435A', 2, NULL, NULL),
('1437', 2, NULL, NULL),
('1437A', 2, NULL, NULL),
('1439', 2, NULL, NULL),
('1439A', 2, NULL, NULL),
('1441', 2, NULL, NULL),
('1442', 2, NULL, NULL),
('1532', 2, NULL, NULL),
('1533', 2, NULL, NULL),
('1533A', 2, NULL, NULL),
('1535', 2, NULL, NULL),
('1535A', 2, NULL, NULL),
('1537', 2, NULL, NULL),
('1537A', 2, NULL, NULL),
('1539', 2, NULL, NULL),
('1539A', 2, NULL, NULL),
('1541', 2, NULL, NULL),
('1542', 2, NULL, NULL),
('1633', 2, NULL, NULL),
('1633A', 2, NULL, NULL),
('1635', 2, NULL, NULL),
('1635A', 2, NULL, NULL),
('1637', 2, NULL, NULL),
('1637A', 2, NULL, NULL),
('1639', 2, NULL, NULL),
('201', 1, NULL, NULL),
('202', 1, NULL, NULL),
('203', 1, NULL, NULL),
('204', 1, NULL, NULL),
('205', 1, NULL, NULL),
('206', 1, NULL, NULL),
('206A', 1, NULL, NULL),
('207', 1, NULL, NULL),
('208', 1, NULL, NULL),
('208A', 1, NULL, NULL),
('209', 1, NULL, NULL),
('210', 1, NULL, NULL),
('210A', 1, NULL, NULL),
('211', 1, NULL, NULL),
('226', 1, NULL, NULL),
('227', 1, NULL, NULL),
('228', 1, NULL, NULL),
('229', 1, NULL, NULL),
('230', 1, NULL, NULL),
('231', 1, NULL, NULL),
('308', 1, NULL, NULL),
('302', 1, NULL, NULL),
('303', 1, NULL, NULL),
('304', 1, NULL, NULL),
('305', 1, NULL, NULL),
('306', 1, NULL, NULL),
('306A', 1, NULL, NULL),
('307', 1, NULL, NULL),
('308A', 1, NULL, NULL),
('301', 1, NULL, NULL),
('309', 1, NULL, NULL),
('310', 1, NULL, NULL),
('310A', 1, NULL, NULL),
('311', 1, NULL, NULL),
('312', 1, NULL, NULL),
('313', 1, NULL, NULL),
('314', 1, NULL, NULL),
('315', 1, NULL, NULL),
('316', 1, NULL, NULL),
('317', 1, NULL, NULL),
('320', 1, NULL, NULL),
('321', 1, NULL, NULL),
('322', 1, NULL, NULL),
('323', 1, NULL, NULL),
('324', 1, NULL, NULL),
('325', 1, NULL, NULL),
('326', 1, NULL, NULL),
('327', 1, NULL, NULL),
('328', 1, NULL, NULL),
('329', 1, NULL, NULL),
('330', 1, NULL, NULL),
('331', 1, NULL, NULL),
('401', 1, NULL, NULL),
('402', 1, NULL, NULL),
('403', 1, NULL, NULL),
('404', 1, NULL, NULL),
('405', 1, NULL, NULL),
('406', 1, NULL, NULL),
('406A', 1, NULL, NULL),
('407', 1, NULL, NULL),
('408', 1, NULL, NULL),
('408A', 1, NULL, NULL),
('409', 1, NULL, NULL),
('410', 1, NULL, NULL),
('410A', 1, NULL, NULL),
('411', 1, NULL, NULL),
('1135A', 2, NULL, NULL),
('1137', 2, NULL, NULL),
('1139', 2, NULL, NULL),
('412', 1, NULL, NULL),
('413', 1, NULL, NULL),
('414', 1, NULL, NULL),
('415', 1, NULL, NULL),
('416', 1, NULL, NULL),
('417', 1, NULL, NULL),
('418', 1, NULL, NULL),
('419', 1, NULL, NULL),
('420', 1, NULL, NULL),
('421', 1, NULL, NULL),
('422', 1, NULL, NULL),
('423', 1, NULL, NULL),
('424', 1, NULL, NULL),
('425', 1, NULL, NULL),
('426', 1, NULL, NULL),
('427', 1, NULL, NULL),
('428', 1, NULL, NULL),
('429', 1, NULL, NULL),
('430', 1, NULL, NULL),
('431', 1, NULL, NULL),
('501', 1, NULL, NULL),
('502', 1, NULL, NULL),
('503', 1, NULL, NULL),
('504', 1, NULL, NULL),
('506', 1, NULL, NULL),
('506A', 1, NULL, NULL),
('507', 1, NULL, NULL),
('508', 1, NULL, NULL),
('508A', 1, NULL, NULL),
('509', 1, NULL, NULL),
('510', 1, NULL, NULL),
('510A', 1, NULL, NULL),
('511', 1, NULL, NULL),
('512', 1, NULL, NULL),
('513', 1, NULL, NULL),
('514', 1, NULL, NULL),
('515', 1, NULL, NULL),
('516', 1, NULL, NULL),
('517', 1, NULL, NULL),
('518', 1, NULL, NULL),
('519', 1, NULL, NULL),
('520', 1, NULL, NULL),
('521', 1, NULL, NULL),
('522', 1, NULL, NULL),
('523', 1, NULL, NULL),
('524', 1, NULL, NULL),
('525', 1, NULL, NULL),
('526', 1, NULL, NULL),
('527', 1, NULL, NULL),
('528', 1, NULL, NULL),
('529', 1, NULL, NULL),
('530', 1, NULL, NULL),
('531', 1, NULL, NULL),
('606', 1, NULL, NULL),
('608', 1, NULL, NULL),
('608A', 1, NULL, NULL),
('609', 1, NULL, NULL),
('932', 2, NULL, NULL),
('611', 1, NULL, NULL),
('612', 1, NULL, NULL),
('613', 1, NULL, NULL),
('614', 1, NULL, NULL),
('615', 1, NULL, NULL),
('616', 1, NULL, NULL),
('617', 1, NULL, NULL),
('618', 1, NULL, NULL),
('619', 1, NULL, NULL),
('620', 1, NULL, NULL),
('621', 1, NULL, NULL),
('622', 1, NULL, NULL),
('623', 1, NULL, NULL),
('624', 1, NULL, NULL),
('625', 1, NULL, NULL),
('626', 1, NULL, NULL),
('627', 1, NULL, NULL),
('610A', 1, NULL, NULL),
('628', 1, NULL, NULL),
('629', 1, NULL, NULL),
('630', 1, NULL, NULL),
('711', 1, NULL, NULL),
('712', 1, NULL, NULL),
('713', 1, NULL, NULL),
('714', 1, NULL, NULL),
('715', 1, NULL, NULL),
('716', 1, NULL, NULL),
('717', 1, NULL, NULL),
('718', 1, NULL, NULL),
('719', 1, NULL, NULL),
('720', 1, NULL, NULL),
('721', 1, NULL, NULL),
('722', 1, NULL, NULL),
('723', 1, NULL, NULL),
('724', 1, NULL, NULL),
('725', 1, NULL, NULL),
('726', 1, NULL, NULL),
('727', 1, NULL, NULL),
('728', 1, NULL, NULL),
('811', 1, NULL, NULL),
('812', 1, NULL, NULL),
('813', 1, NULL, NULL),
('814', 1, NULL, NULL),
('815', 1, NULL, NULL),
('816', 1, NULL, NULL),
('817', 1, NULL, NULL),
('818', 1, NULL, NULL),
('819', 1, NULL, NULL),
('820', 1, NULL, NULL),
('821', 1, NULL, NULL),
('610', 1, NULL, NULL),
('822', 1, NULL, NULL),
('823', 1, NULL, NULL),
('824', 1, NULL, NULL),
('825', 1, NULL, NULL),
('826', 1, NULL, NULL),
('912', 1, NULL, NULL),
('913', 1, NULL, NULL),
('916', 1, NULL, NULL),
('917', 1, NULL, NULL),
('920', 1, NULL, NULL),
('921', 1, NULL, NULL),
('924', 1, NULL, NULL),
('925', 1, NULL, NULL),
('935', 2, NULL, NULL),
('935A', 2, NULL, NULL),
('937', 2, NULL, NULL),
('937A', 2, NULL, NULL),
('939', 2, NULL, NULL),
('939A', 2, NULL, NULL),
('941', 2, NULL, NULL),
('942', 2, NULL, NULL),
('732', 2, NULL, NULL),
('733', 2, NULL, NULL),
('733A', 2, NULL, NULL),
('735', 2, NULL, NULL),
('735A', 2, NULL, NULL),
('737', 2, NULL, NULL),
('737A', 2, NULL, NULL),
('739', 2, NULL, NULL),
('739A', 2, NULL, NULL),
('741', 2, NULL, NULL),
('742', 2, NULL, NULL),
('832', 2, NULL, NULL),
('833', 2, NULL, NULL),
('833A', 2, NULL, NULL),
('835', 2, NULL, NULL),
('835A', 2, NULL, NULL),
('837', 2, NULL, NULL),
('839', 2, NULL, NULL),
('839A', 2, NULL, NULL),
('841', 2, NULL, NULL),
('842', 2, NULL, NULL),
('532', 2, NULL, NULL),
('533', 2, NULL, NULL),
('533A', 2, NULL, NULL),
('535', 2, NULL, NULL),
('535A', 2, NULL, NULL),
('537', 2, NULL, NULL),
('537A', 2, NULL, NULL),
('539', 2, NULL, NULL),
('539A', 2, NULL, NULL),
('541', 2, NULL, NULL),
('542', 2, NULL, NULL),
('632', 2, NULL, NULL),
('633', 2, NULL, NULL),
('633A', 2, NULL, NULL),
('635', 2, NULL, NULL),
('635A', 2, NULL, NULL),
('637', 2, NULL, NULL),
('637A', 2, NULL, NULL),
('639', 2, NULL, NULL),
('639A', 2, NULL, NULL),
('641', 2, NULL, NULL),
('642', 2, NULL, NULL),
('710', 1, NULL, NULL),
('710a', 1, NULL, NULL),
('708', 1, NULL, NULL),
('1133', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'José René correa', 'jorenecp10@gmail.com', NULL, '$2y$10$sgMkZDQzO5rbxB6AwrllOuhNiRHaU7XsOtz19mnFlrUQ6CHtStZj.', 'admin', NULL, '2020-05-28 02:26:53', '2020-05-28 02:26:53'),
(2, 'camilo quintana', 'camiloquintana@gmail.com', NULL, '$2y$10$SoeT91SX8KGKyzaPncGavej6jHNF4th8u85e9f336HM6Jybmt3d76', 'operativo', NULL, '2020-08-06 09:21:50', '2020-08-06 09:21:50'),
(4, 'Erick Mendoza', 'erickm24@gmail.com', NULL, '$2y$10$/HCDcpA7XPJxoQ0kxCgAaes6ta.ajlgQ1WXIzOLXhdBNvyaiUEMNe', 'admin', NULL, '2020-08-07 03:13:48', '2020-08-07 03:13:48'),
(5, 'sandra martinez', 'sandramartinez@hotmail.com', NULL, '$2y$10$VYbOEP7lv6JMi44GA57lIuCL/L/9LTlGJ4LIRCNepxldj5ouuIXRC', 'operario', NULL, '2020-08-07 03:26:19', '2020-08-07 03:26:19'),
(6, 'ivan antonio escorcia', 'ivana@zuana.com.co', NULL, '$2y$10$OR7nlBSG7svgDGOGHrV1eOWgioXnp94tIC965Y4Gp/nZd9KS3fOpG', 'operario', NULL, '2020-08-08 01:37:53', '2020-08-08 01:37:53'),
(7, 'frank navarro', 'frank@zuana.com.co', NULL, '$2y$10$RyzxH5MmYEwT4MxOPDMGNOdsUKaWEdo951/9OPS/7kToL9Suk6zLC', 'operario', NULL, '2020-08-08 01:39:13', '2020-08-08 01:39:13');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `fk_citas_agenda` FOREIGN KEY (`agenda_id`) REFERENCES `agenda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_citas_clientes` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
