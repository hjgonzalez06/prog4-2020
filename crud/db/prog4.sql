-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-11-2020 a las 01:30:56
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prog4`
--
CREATE DATABASE IF NOT EXISTS `prog4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prog4`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `account_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`account_id`, `username`, `pass`, `fullname`, `email`, `address`, `role`) VALUES
(1, 'hjgonzalez06', '$2y$10$quYvLP9b9IA5odbYNJKsT.y4Wenvp9pMqtv2ZDPlKSpDfdVTpMdo.', 'Hiram Gonzalez', 'hgonzalez.4832@unimar.edu.ve', 'Juangriego', 0),
(3, 'mgarcia', '$2y$10$yi/ee8gIGK03jFJn1ipjnelgVcllX/IT0NRgWgX0d7m.ADc2Wq4g2', 'Mariano Garc&iacute;a', 'mgarcia.7097@unimar.edu.ve', 'Guatamare', 1),
(4, 'lgamboa', '$2y$10$EvpP8PIkB7LYF9oyj5iyVejgVwwVFoEm3DxOhqif/7rRhQGVGqTW2', 'Laura Gamboa', 'lgamboa.4799@unimar.edu.ve', 'Juangriego', 0),
(5, 'fmoreno', '$2y$10$ayCWwdQnWmKiX.o.WgXmdOROslDaoIBFijnT13ra6UwRsGlmVGlaa', 'Franklin Moreno', 'fmoreno.5690@unimar.edu.ve', 'Villa Rosa', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
