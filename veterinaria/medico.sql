-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-08-2020 a las 23:35:09
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
-- Base de datos: `medico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`codigo`, `correo`, `clave`) VALUES
(1, 'vete@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` bigint(10) NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_animal` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad_animal` int(11) NOT NULL,
  `tipo_animal` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo_animal` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`codigo`, `cedula`, `nombre`, `apellido`, `correo`, `direccion`, `nombre_animal`, `edad_animal`, `tipo_animal`, `sexo_animal`, `descripcion`) VALUES
(1, 1234567891, 'ANDRES', 'GUZMAN', 'sony@utb.edu.ec', 'VENTANAS', 'CAMILA', 4, 'HAMSTER', 'HEMBRA', 'Ninguno'),
(2, 1204578963, 'YADIRA', 'NAVARRETE', 'hello@yahoo.com', 'LA VIRGINIA', 'LUCAS', 6, 'GATO', 'MACHO', 'NINGUNO'),
(3, 1207506038, 'LEONEL', 'MESSI', 'emelec@hotmail.com', 'BY PASS', 'ROBERTO', 9, 'PERRO', 'MACHO', 'TIENE DISCAPACIDAD'),
(4, 1234567891, 'ANDRES', 'GUZMAN', 'sony@utb.edu.ec', 'VENTANAS', 'SAMUEL', 9, 'PEZ', 'MACHO', 'NINGUNO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
