-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2024 a las 15:13:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idMascota` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `raza` varchar(300) NOT NULL,
  `edad` varchar(300) NOT NULL,
  `documentoProp` varchar(300) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idMascota`, `nombre`, `raza`, `edad`, `documentoProp`, `imagen`) VALUES
(1, 'firulais', 'pitbul_terrier', '4', '105757', 'Imagenes/105757/IMG-66e38d915756a.jpg'),
(2, 'd', 's', '1', '2', 'Imagenes/2/IMG-66e44ade50bcc.jpg'),
(3, 'jbj', 'sf', '234', '21', 'Imagenes/21/IMG-66ec1bdb1fde8.jpg'),
(4, 'jbj', 'sf', '234', '21', 'Imagenes/21/IMG-66ec1cb3aec66.jpg'),
(5, 'jbj', 'sf', '234', '212', 'Imagenes/212/IMG-66ec1d9036afb.jpg'),
(6, 'jbj', 'sf', '234', '212', 'Imagenes/212/IMG-66ec1d9d6daff.jpg'),
(7, 'jbj', 'sf', '234', '212', 'Imagenes/212/IMG-66ec1dad0f27f.jpg'),
(8, 'jbj', 'sf', '234', '233', 'Imagenes/233/IMG-66ec1e21b76d9.jpg'),
(9, 'jbj', 'sf', '234', '21555', 'Imagenes/21555/IMG-66ec1e71efc1b.jpg'),
(10, 'jfhfhfh', 'fhfhfhfh', '3213132', '21321213', 'Imagenes/21321213/IMG-66ec1f6dba901.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMascota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
