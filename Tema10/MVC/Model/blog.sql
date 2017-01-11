-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2017 a las 12:37:07
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) COLLATE utf8_bin NOT NULL,
  `fecha` datetime NOT NULL,
  `contenido` text COLLATE utf8_bin NOT NULL,
  `autor` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `titulo`, `fecha`, `contenido`, `autor`) VALUES
(2, 'El dedo de Piqué y la opinión del futbolista', '2017-01-10 12:11:12', 'El del fútbol es un oficio perfectamente serio, ligado a una actividad empresarial imponente y basado en la práctica de un deporte que acoge gradas inmensas en todo el mundo. Sobre ese oficio se opina más que lo que se opina sobre el cine o la política, o sobre el dinero, que es también, ahora, el elemento en el que nada casi todo en este espléndido juego. Opina todo el mundo, pues: el graderío, los medios, los directivos. Opina, por decirlo como los castizos, hasta el Tato. Pero cuando opina un futbolista, a no ser que se exprese a favor de la corriente, tiembla el misterio.  ', ''),
(4, 'Pekín incorpora a la Policía a la guerra contra la polución', '2017-01-10 12:13:09', 'Los agentes patrullarán las calles para impedir actividades consideradas fuentes de partículas contaminantes en el aire, desde la incineración ilegal de basura hasta la quema de combustible. Tampoco se librarán los pinchitos de cordero asados en barbacoas al aire libre, uno de los tentempiés ubicuos en las calles de la capital china.   ', ''),
(5, 'La FIFA aprueba un Mundial de 48 equipos para 2026', '2017-01-10 12:16:13', 'El comité de la FIFA ha aprobado este martes por unanimidad la inclusión de 16 equipos más en los Mundiales de fútbol a partir del 2026. Así, la Copa del Mundo pasará de tener 32 a 48 equipos, que se organizarán en 16 grupos de 3 selecciones nacionales cada uno.     ', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
