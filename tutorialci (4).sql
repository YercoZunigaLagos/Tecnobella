-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-03-2020 a las 22:24:21
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutorialci`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(45) NOT NULL,
  `vista_usuario` int(1) NOT NULL,
  `vista_perfil` int(1) NOT NULL,
  `vista_servicios` int(1) NOT NULL,
  `vista_egreso_fijo` int(1) NOT NULL,
  `vista_egreso_variable` int(1) NOT NULL,
  `vista_egreso_cajachica` int(1) NOT NULL,
  `vista_ventas` int(1) NOT NULL,
  `vista_cliente` int(1) NOT NULL,
  `vista_inventario` int(1) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`, `vista_usuario`, `vista_perfil`, `vista_servicios`, `vista_egreso_fijo`, `vista_egreso_variable`, `vista_egreso_cajachica`, `vista_ventas`, `vista_cliente`, `vista_inventario`) VALUES
(1, 'Administrador', 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'Secretaria', 0, 0, 1, 0, 0, 1, 0, 1, 1),
(4, 'Profesional', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_vista`
--

DROP TABLE IF EXISTS `rol_vista`;
CREATE TABLE IF NOT EXISTS `rol_vista` (
  `rol_id_rol` int(11) NOT NULL,
  `vista_id_vista` int(11) NOT NULL,
  PRIMARY KEY (`rol_id_rol`,`vista_id_vista`),
  KEY `fk_rol_has_vista_vista1_idx` (`vista_id_vista`),
  KEY `fk_rol_has_vista_rol_idx` (`rol_id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol_vista`
--

INSERT INTO `rol_vista` (`rol_id_rol`, `vista_id_vista`) VALUES
(1, 1),
(2, 1),
(1, 2),
(1, 3),
(4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE IF NOT EXISTS `servicio` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` varchar(45) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `valor` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_servicio`),
  UNIQUE KEY `idtable1_UNIQUE` (`id_servicio`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `nombre_servicio`, `genero`, `valor`, `descripcion`, `imagen`) VALUES
(15, 'Depilación', 'masculino', 120000, 'Esta promoción incluye 2 tratamientos de Depilación láser. Esta zona comprende: Ambas axilas mas Brazos. Sesiones recomendadas: 6 a 8 sesiones. Caducidad de tratamientos: 3 meses para realizar su primera sesión.', 'piernas.jpg'),
(18, 'Depilación', 'femenino', 100000, 'Esta promoción incluye 2 tratamientos de Depilación láser. Esta zona comprende: Ambas axilas mas Brazos. Sesiones recomendadas: 6 a 8 sesiones. Caducidad de tratamientos: 3 meses para realizar su primera sesión.', 'piernas.jpg'),
(19, 'Depilación', 'femenino', 100000, 'Esta promoción incluye 2 tratamientos de Depilación láser. Esta zona comprende: Ambas axilas mas Brazos. Sesiones recomendadas: 6 a 8 sesiones. Caducidad de tratamientos: 3 meses para realizar su primera sesión.', 'piernas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email_usuario` varchar(45) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `apellido_usuario` varchar(45) NOT NULL,
  `contraseña_usuario` varchar(45) NOT NULL,
  `subrol` int(2) NOT NULL,
  `rol_id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`,`rol_id_rol`),
  KEY `fk_usuario_rol1_idx` (`rol_id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email_usuario`, `nombre_usuario`, `apellido_usuario`, `contraseña_usuario`, `subrol`, `rol_id_rol`) VALUES
(1, 'contactotecnobella@gmail.com', 'Loreto', 'Moraga', 'dce0b27ba675df41e9cc07af80ec59c475810824', 2, 1),
(2, 'cuentatecnobella@gmail.com', 'Maria', 'Salgado', 'dce0b27ba675df41e9cc07af80ec59c475810824', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vista`
--

DROP TABLE IF EXISTS `vista`;
CREATE TABLE IF NOT EXISTS `vista` (
  `id_vista` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_vista` varchar(45) NOT NULL,
  PRIMARY KEY (`id_vista`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vista`
--

INSERT INTO `vista` (`id_vista`, `nombre_vista`) VALUES
(1, 'servicio'),
(2, 'perfiles'),
(3, 'agenda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

DROP TABLE IF EXISTS `zona`;
CREATE TABLE IF NOT EXISTS `zona` (
  `id_zona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_zona` varchar(45) NOT NULL,
  `tiempo_estimado` int(11) NOT NULL,
  PRIMARY KEY (`id_zona`),
  UNIQUE KEY `id_zona_UNIQUE` (`id_zona`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`id_zona`, `nombre_zona`, `tiempo_estimado`) VALUES
(1, 'Axilas', 20),
(2, 'Brazos', 30),
(3, 'Espalda', 40),
(4, 'Cuello', 20),
(5, 'Gluteos', 20),
(6, 'Facial', 30),
(7, 'Manos', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona_servicio`
--

DROP TABLE IF EXISTS `zona_servicio`;
CREATE TABLE IF NOT EXISTS `zona_servicio` (
  `fk_id_zona` int(11) NOT NULL,
  `fk_id_servicio` int(11) NOT NULL,
  PRIMARY KEY (`fk_id_zona`,`fk_id_servicio`),
  KEY `fk_zona_has_servicio_servicio1_idx` (`fk_id_servicio`),
  KEY `fk_zona_has_servicio_zona_idx` (`fk_id_zona`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zona_servicio`
--

INSERT INTO `zona_servicio` (`fk_id_zona`, `fk_id_servicio`) VALUES
(2, 18),
(2, 19),
(4, 15),
(7, 15);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rol_vista`
--
ALTER TABLE `rol_vista`
  ADD CONSTRAINT `fk_rol_has_vista_rol` FOREIGN KEY (`rol_id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rol_has_vista_vista1` FOREIGN KEY (`vista_id_vista`) REFERENCES `vista` (`id_vista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`rol_id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
