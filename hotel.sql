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
  `aprobado` varchar(30) DEFAULT NULL,

  CONSTRAINT PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_spanish_ci;

INSERT INTO `contacto` (`id`, `nombre_completo`, `nro_telefono`, `email`, `fecha_contacto`, `aprobado` ) 
VALUES
(1, 'Josefina Torres', 974578712, 'joseftorres@gmail.com', '2021-10-23', 'Permitido'),
(2, 'Oscar Alfredo Garcia', 945678741, 'alfredgarc@gmail.com', '2021-11-04', 'Sin permitir');

-- AUTO_INCREMENT de la tabla `contacto`
ALTER TABLE `contacto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `login`
CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `contra` varchar(30) DEFAULT NULL,

  CONSTRAINT PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_spanish_ci;

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

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_spanish_ci;


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

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_spanish_ci;

-- Volcado de datos para la tabla `habitaciones`
INSERT INTO `habitaciones` (`id`, `tipo_habitacion`, `tipo_cama`, `estado_hab`) 
VALUES
(1, 'Habitacion Superior', 'Simple', 'Disponible'),
(2, 'Habitacion Superior', 'Doble', 'No Disponible'),
(3, 'Habitacion Superior', 'Triple', 'Disponible'),
(4, 'Habitacion Superior', 'Cuadruple', 'Disponible'),    -- reserva sin confirmar, el estado se mantiene como disponible
(5, 'Habitacion Suite', 'Simple', 'Disponible'),
(6, 'Habitacion Suite', 'Doble', 'Disponible'),
(7, 'Habitacion Suite', 'Triple', 'No Disponible'),
(8, 'Habitacion Suite', 'Cuadruple', 'Disponible'),
(9, 'Habitacion Junior', 'Simple', 'Disponible'),
(10, 'Habitacion Junior', 'Doble', 'Disponible'),
(11, 'Habitacion Junior', 'Triple', 'Disponible'),
(12, 'Habitacion Junior Suite', 'Simple', 'Disponible'),
(13, 'Habitacion Junior Suite', 'Doble', 'Disponible'),
(14, 'Habitacion Junior Suite', 'Triple', 'Disponible');

-- AUTO_INCREMENT de la tabla `habitaciones`
ALTER TABLE `habitaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_spanish_ci;

-- Volcado de datos para la tabla `clientes`
INSERT INTO `clientes`
(`id`, `trato`, `nombres`, `apellidos`, `email`, `nacionalidad`, `pais`, `telef`) 
VALUES
(1, 'Sr.', 'Marcos', 'Diaz', 'mdiaz@gmail.com', 'Peruana', 'Peru', '943098145'),
(2, 'Prof.', 'Jose Antonio', 'Solomon', 'solomon@gmail.com', 'Extranjera', 'Chile', '945664341'),
(3, 'Sra.', 'Carmen', 'Tajada', 'carmen@gmail.com', 'Peruana', 'Peru', '923122323'),
(4, 'Dr.', 'Reyner', 'Baily', 'ryb2018@gmail.com', 'Extranjera', 'Costa Rica', '923842343');

-- AUTO_INCREMENT de la tabla `clientes`
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `reservas`
CREATE TABLE `reservas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `nro_habitacion` int(10) UNSIGNED NOT NULL,
  `comidas` varchar(30) DEFAULT NULL,
  `fecha_entrada` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `cant_dias` int(11) DEFAULT NULL,
  
  CONSTRAINT PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_spanish_ci;

-- Volcado de datos para la tabla `reservas`
INSERT INTO `reservas`
(`id`, `id_cliente`, `nro_habitacion`, `comidas`, `fecha_entrada`, `fecha_salida`, `estado`, `cant_dias`) 
VALUES
(1, 2, 2, 'Media pension', '2021-10-28', '2021-11-03', 'Confirmado', 7),
(2, 3, 4, 'Desayuno', '2021-11-02', '2021-11-06', 'Sin confirmar', 4),
(3, 4, 10, 'Pension completa', '2021-12-22', '2021-12-25', 'Sin confirmar', 3),
(4, 1, 7, 'Solo habitacion', '2021-11-01', '2018-01-04', 'Confirmado', 3);

-- AUTO_INCREMENT de la tabla `reservas`
ALTER TABLE `reservas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

-- --------------------------------------------------------

-- Estructura de tabla para la tabla `pagos`
CREATE TABLE `pagos` (
  `id` int(11) DEFAULT NULL,
  `id_reserva` int(10) UNSIGNED NOT NULL,
  `htot` double(8,2) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `ctot` double(8,2) DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,

  CONSTRAINT PRIMARY KEY (`id`),
  CONSTRAINT FOREIGN KEY (`id_reserva`) REFERENCES `reservas`(`id`) ON UPDATE CASCADE

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_spanish_ci;


-- Volcado de datos para la tabla `pagos`
INSERT INTO `pagos` 
(`id`, `id_reserva`, `htot`, `btot`, `ctot`, `total`) 
VALUES
(1, 1 , 6720.00, 134.40, 268.80, 7123.20),
(2, 2,  3264.80, 61.60, 123.20, 3080.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
