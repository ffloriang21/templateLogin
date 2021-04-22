-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2021 a las 22:10:53
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsitech_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` varchar(3) NOT NULL,
  `nombre_user` varchar(30) NOT NULL,
  `correo_user` varchar(40) NOT NULL,
  `clave_user` varchar(255) NOT NULL,
  `activo_user` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `nombre_user`, `correo_user`, `clave_user`, `activo_user`) VALUES
('123', 'ffloriang', 'fabian@gmail.com', '12345', 1),
('384', 'admin', 'fabio@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
('337', 'admin', 'fabio@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 1),
('170', 'admin', 'fabio@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 1),
('497', 'admin', 'fabio@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
('555', 'gomezf', 'fabianflorian@gmail.com', '3c086f596b4aee58e1d71b3626fefc87', 1),
('44', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
