-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2018 a las 00:38:44
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel_queirolo`
--
-- --------------------------------------------------------

-- Estructura de tabla para la tabla `contacto`
CREATE TABLE `contacto` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_completo` varchar(100) DEFAULT NULL,
  `nro_telefono` int(10) DEFAULT NULL,
  `email` text,
  `fecha_contacto` date DEFAULT NULL,   
  `aprobado` varchar(12) DEFAULT NULL,

  CONSTRAINT PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- AUTO_INCREMENT de la tabla `contacto`
ALTER TABLE `contacto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `login`
CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `contra` varchar(30) DEFAULT NULL,

  CONSTRAINT PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcado de datos para la tabla `login`
INSERT INTO `login` (`id`, `usuario`, `contra`) VALUES
(1, 'admin',         '1234'),
(2, 'administrador', '12345'),
(3, 'admin_hotel',   '2021');

-- AUTO_INCREMENT de la tabla `login`
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `noticias`
CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(52) DEFAULT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `contenido` text,

  CONSTRAINT PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `room`

CREATE TABLE `habitaciones` (
  `id` int(10) UNSIGNED NOT NULL,               -- nro_habitacion
  `tipo_habitacion` varchar(30) DEFAULT NULL,
  `tipo_cama` varchar(20) DEFAULT NULL,
  `estado_hab` varchar(20) DEFAULT NULL,

  CONSTRAINT PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcado de datos para la tabla `habitaciones`
INSERT INTO `habitaciones` (`id`, `tipo_habitacion`, `tipo_cama`, `estado_hab`) 
VALUES
(1, 'Habitacion Superior', 'Simple', 'Disponible'),
(2, 'Habitacion Superior', 'Doble', 'Disponible'),
(3, 'Habitacion Superior', 'Triple', 'Disponible'),
(4, 'Habitacion Individual', 'Cuadruple', 'Disponible'),
(5, 'Habitacion Superior', 'Cuadruple', 'Disponible'),
(6, 'Habitacion Suite', 'Simple', 'Disponible'),
(7, 'Habitacion Suite', 'Doble', 'No Disponible'),
(8, 'Habitacion Suite', 'Triple', 'No Disponible'),
(9, 'Habitacion Suite', 'Cuadruple', 'Disponible'),
(10, 'Habitacion Junior', 'Simple', 'No Disponible'),
(11, 'Habitacion Junior', 'Doble', 'Disponible'),
(12, 'Habitacion Junior', 'Cuadruple', 'Disponible'),
(13, 'Habitacion Individual', 'Simple', 'Disponible'),
(14, 'Habitacion Individual', 'Doble', 'Disponible'),
(15, 'Habitacion Individual', 'Triple', 'Disponible');

-- AUTO_INCREMENT de la tabla `habitaciones`
ALTER TABLE `habitaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- --------------------------------------------------------

-- Estructura de tabla para la tabla `clientes`
CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `trato` varchar(5) DEFAULT NULL,
  `nombres` text,
  `apellidos` text,
  `email` varchar(200) DEFAULT NULL,
  `nacionalidad` varchar(50) DEFAULT NULL,
  `pais` varchar(40) DEFAULT NULL,
  `telef` text,
  
  CONSTRAINT PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcado de datos para la tabla `clientes`
INSERT INTO `clientes`
(`id`, `trato`, `nombres`, `apellidos`, `email`, `nacionalidad`, `pais`, `telef`) 
VALUES
(3, 'Sra.', 'Carmen', 'Tajada', 'carmen@gmail.com', 'Peruana', 'Peru', '923122323'),
(4, 'Dr.', 'Reyner', 'Baily', 'ricardocorazondeleon2018@gmail.com', 'Extranjera', 'Costa Rica', '923342343');

-- AUTO_INCREMENT de la tabla `clientes`
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


-- --------------------------------------------------------

-- Estructura de tabla para la tabla `reservas`
CREATE TABLE `reservas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `nro_habitacion` int(10) UNSIGNED NOT NULL,
  `comidas` varchar(15) DEFAULT NULL,
  `fecha_entrada` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `cant_dias` int(11) DEFAULT NULL,
  
  CONSTRAINT PRIMARY KEY (`id`)
  

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcado de datos para la tabla `reservas`
INSERT INTO `reservas`
(`id`, `id_cliente`, `nro_habitacion`, `comidas`, `fecha_entrada`, `fecha_salida`, `estado`, `cant_dias`) 
VALUES
(1, 3, 7, 'Desayuno', '2018-02-01', '2018-02-15', 'Confirmado', 14),
(2, 4, 10, 'Pension completa', '2018-01-16', '2018-01-25', 'Sin confirmar', 9);

-- AUTO_INCREMENT de la tabla `reservas`
ALTER TABLE `reservas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


-- --------------------------------------------------------

-- Estructura de tabla para la tabla `pagos`
CREATE TABLE `pagos` (
  `id` int(11) DEFAULT NULL,
  `id_reserva` int(10) UNSIGNED NOT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,

  CONSTRAINT PRIMARY KEY (`id`),
  CONSTRAINT FOREIGN KEY (`id_reserva`) REFERENCES `reservas`(`id`) ON UPDATE CASCADE

) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Volcado de datos para la tabla `pagos`
INSERT INTO `pagos` 
(`id`, `id_reserva`, `ttot`, `fintot`, `mepr`, `btot`) 
VALUES
(1, 1 , 6720.00, 7123.20, 268.80, 134.40),
(2, 2,  3080.00, 3264.80, 123.20, 61.60);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
