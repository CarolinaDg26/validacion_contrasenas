-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-09-2023 a las 21:04:04
-- Versión del servidor: 10.6.14-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u266634974_contrasenas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `filanombre` varchar(100) DEFAULT NULL,
  `filaapellido` varchar(100) DEFAULT NULL,
  `filamascota` varchar(50) DEFAULT NULL,
  `fecha` varchar(12) DEFAULT NULL,
  `edad` varchar(10) DEFAULT NULL,
  `numerogenerado` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `ip_usuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `filanombre`, `filaapellido`, `filamascota`, `fecha`, `edad`, `numerogenerado`, `email`, `contrasena`, `ip_usuario`) VALUES
(1, 'MARIA ARMIDA', 'ESTRELLA FABILA', 'ARWEN', '25/9/1998', '24 años', '999 0796757', 'Maria1998@gmail.com', 'Arwen675', '2806:10b7:3:ac6a:d5a2:a6cd:89ab:835e'),
(2, 'GRISELDA MARIBEL', 'VIQUEZ SEPULVEDA', 'THOR', '19/7/1998', '25 años', '999 0999043', 'griseldamsepulveda@gmail.com', 'thor2598', '2806:250:418:c4df:904:215e:375f:6535'),
(3, 'ABIGAY', 'OCOMATL VALTIERREZ', 'FROZEN', '14 de Diciem', '28 años', '999 0994302', 'valtierrez14', 'Frozen94', '189.172.234.157');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
