-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2021 a las 01:36:03
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comvertidor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `insert` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `nombre`, `fechaNacimiento`, `email`, `usuario`, `password`, `insert`) VALUES
(1, 'fatima2', '2021-06-10', 'fatima@gmail.com', 'fatima2', '8cb2237d0679ca88db6464eac60da96345513964', '2021-06-27 10:47:05'),
(2, 'edgar', '2021-06-08', 'edgar@gmail.com', 'edgar3', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-06-27 12:11:13'),
(3, 'ailin', '2010-02-06', 'ailin@gmail.com', 'ailin', '8cb2237d0679ca88db6464eac60da96345513964', '2021-06-27 17:10:50'),
(4, 'Diego', '2016-01-11', 'diego@gmail.com', 'diego', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-06-27 17:12:55'),
(5, 'esmeralda', '2014-04-10', 'esme@gmail.com', 'esmeralda', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-06-27 17:13:48'),
(6, 'edith', '1991-05-28', 'edith@gmail.com', 'edith', '8cb2237d0679ca88db6464eac60da96345513964', '2021-06-27 18:21:38'),
(7, 'jony', '2021-06-10', 'jony@gmail.com', 'jony', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2021-06-28 16:42:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
