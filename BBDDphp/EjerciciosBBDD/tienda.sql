-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2016 a las 18:05:36
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codProducto` int(5) NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `precio` int(5) NOT NULL,
  `imagen` text COLLATE utf8_bin NOT NULL,
  `detalle` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codProducto`, `nombre`, `precio`, `imagen`, `detalle`) VALUES
(1, 'Camiseta Selección Española', 40, 'imagenes/espania.jpg', '2016-2017'),
(2, 'Camiseta Selección Rusa', 40, 'imagenes/rusia.jpg', '2016-2017'),
(3, 'Camiseta Real Madrid C.F.', 50, 'imagenes/madrid.jpg', '2016-2017'),
(4, 'Camiseta Bayern Munich', 50, 'imagenes/bayern.jpg', '2016-2017');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codProducto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
