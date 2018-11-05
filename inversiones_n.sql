-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2018 a las 12:12:30
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inversiones_n`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `RFC` char(13) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` char(10) NOT NULL,
  PRIMARY KEY (`RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`RFC`, `nombre`, `direccion`, `telefono`) VALUES
('SOGJ910530493', 'José Guadalupe Macías Rabago', 'BENITO JUAREZ 429', '3312462127'),
('SOGVC93071790', 'Vanessa Carolayn Sosa Gomez', 'Margarita 9', '3333456767');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `nss` char(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` char(10) NOT NULL,
  `puesto` varchar(15) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`nss`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`nss`, `nombre`, `direccion`, `telefono`, `puesto`, `user`, `pass`) VALUES
('04079147460', 'JUAN MANUEL SOSA GOMEZ', 'BENITO JUAREZ 427', '3312462127', 'admin', 'JMSOSA', 'ABCD'),
('09092765454', 'VALENTINA CAMACHO', 'BENITO JUAREZ 45', '3312232345', 'ADMIN', 'ADMIN', 'ADMIN'),
('232344532', 'FABIAN VAZQUEZ', 'cucea 3000', '12345', 'ejecutivo', 'Fvazquez', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inversion`
--

CREATE TABLE IF NOT EXISTS `inversion` (
  `id_inversion` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_reg` date DEFAULT '0000-00-00',
  `dias` int(11) NOT NULL DEFAULT '30',
  `importe` decimal(10,0) DEFAULT '0',
  `nss_empleado` char(11) DEFAULT NULL,
  `RFC_cliente` char(13) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_inversion`),
  UNIQUE KEY `id_inversion` (`id_inversion`),
  KEY `nss_empleado` (`nss_empleado`),
  KEY `RFC_cliente` (`RFC_cliente`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `inversion`
--

INSERT INTO `inversion` (`id_inversion`, `fecha_reg`, `dias`, `importe`, `nss_empleado`, `RFC_cliente`, `categoria`) VALUES
(13, '2018-10-24', 12, '20000', '09092765454', 'SOGVC93071790', 'Oro'),
(24, '2018-10-24', 12, '499484', '09092765454', 'SOGJ910530493', 'Oro');

--
-- Disparadores `inversion`
--
DROP TRIGGER IF EXISTS `PAGO_INTERES_AI`;
DELIMITER //
CREATE TRIGGER `PAGO_INTERES_AI` AFTER INSERT ON `inversion`
 FOR EACH ROW BEGIN
DECLARE vIdPagoint int;
DECLARE vNSS char(11);
DECLARE vRfc char(11);
DECLARE vCategoria varchar(50);
DECLARE importe double;



SELECT id_inversion INTO vIdPagoint from inversion ;
SELECT nss_empleado INTO vNSS from inversion ; 
SELECT RFC_cliente INTO vRfc from inversion ;
SELECT categoria INTO vCategoria from inversion ;

SELECT (i.importe * ti.porcentaje)/100 as importe INTO importe
from inversion i
join tipo_inversion ti
on i.categoria = ti.categoria
join pago_interes pi
where i.id_inversion = i.id_inversion;

INSERT INTO PAGO_INTERES(
id_pago_interes,
fecha_pago,
importe, 
rfc_cliente,
nss_empleado,
categoria)
VALUES
(
vIdPagoint, 
SYSDATE(),
importe,
vRfc,
vNSS,
vCategoria);

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_interes`
--

CREATE TABLE IF NOT EXISTS `pago_interes` (
  `id_pago_interes` int(20) unsigned NOT NULL,
  `fecha_pago` date NOT NULL,
  `importe` double NOT NULL,
  `rfc_cliente` char(13) NOT NULL,
  `nss_empleado` char(13) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pago_interes`),
  UNIQUE KEY `id_pago_interes` (`id_pago_interes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago_interes`
--

INSERT INTO `pago_interes` (`id_pago_interes`, `fecha_pago`, `importe`, `rfc_cliente`, `nss_empleado`, `categoria`) VALUES
(13, '2018-10-23', 2000.78, 'valentina', 'juan', '234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_inversion`
--

CREATE TABLE IF NOT EXISTS `tipo_inversion` (
  `id_tipo_inv` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `porcentaje` int(11) NOT NULL,
  `tasa_pago` int(11) NOT NULL,
  PRIMARY KEY (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_inversion`
--

INSERT INTO `tipo_inversion` (`id_tipo_inv`, `categoria`, `porcentaje`, `tasa_pago`) VALUES
(3, 'BMV', 6, 5),
(5, 'BONO M10', 7, 9),
(4, 'CETES', 16, 6),
(1, 'ORO', 43, 12),
(2, 'PLATA', 3, 9);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inversion`
--
ALTER TABLE `inversion`
  ADD CONSTRAINT `inversion_ibfk_1` FOREIGN KEY (`nss_empleado`) REFERENCES `empleados` (`nss`),
  ADD CONSTRAINT `inversion_ibfk_2` FOREIGN KEY (`RFC_cliente`) REFERENCES `clientes` (`RFC`),
  ADD CONSTRAINT `inversion_ibfk_3` FOREIGN KEY (`categoria`) REFERENCES `tipo_inversion` (`categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
