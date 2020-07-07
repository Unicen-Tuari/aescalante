-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2020 a las 20:30:42
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `the_new_sensation`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player`
--

CREATE TABLE `player` (
  `id_player` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `surname` varchar(30) COLLATE utf8_bin NOT NULL,
  `nickname` varchar(30) COLLATE utf8_bin NOT NULL,
  `id_position` int(11) NOT NULL,
  `edit` tinyint(1) NOT NULL DEFAULT 0,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `player`
--

INSERT INTO `player` (`id_player`, `name`, `surname`, `nickname`, `id_position`, `edit`, `number`) VALUES
(58, 'Agustin ', 'Escalante', 'Escaa', 7, 1, 7),
(59, 'Enzo', 'Tolosa', 'Gorda', 20, 0, 10),
(60, 'Lucio', 'Mansilla', 'Mansi', 8, 0, 26),
(61, 'Nahuel', 'Tolosa', 'Cabee', 4, 1, 2),
(62, 'Matias', 'Ferro', 'Mati', 5, 0, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `position`
--

CREATE TABLE `position` (
  `id_position` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `position`
--

INSERT INTO `position` (`id_position`, `name`) VALUES
(4, 'Mediocampista'),
(5, 'Defensor'),
(6, 'Defensor lateral'),
(7, 'Extremo / Win'),
(8, 'Mediocampista defensivo'),
(20, 'Delantero centro'),
(21, 'Arquero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `mail` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `mail`, `password`) VALUES
(1, 'agus@esca.com', '$2y$10$hZHqoXoOYlJbH3BDU0HKMuBLNwkxje8nr6ufdrtE9ygmvduG4BDNa'),
(3, 'usuario@gmail.com', '$2y$10$MjzAgsRdEVscB.vDArZ3TeOvjmd704d6ocn3sBWabFNLH9JPfq37q'),
(4, 'agus@esca.com', '$2y$10$SvM.ZjGH.kJq0PxUsy2N4OmgSOPOzKMB4vcRWVBM8TLUn9GG85S/e'),
(5, 'usuariosecreto@gmail.com', '$2y$10$hCxaTYpa4F990lA4IHnTluDKrZB4qvgNED72McTQ16A3ybLvo6MQ.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id_player`);

--
-- Indices de la tabla `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `player`
--
ALTER TABLE `player`
  MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
