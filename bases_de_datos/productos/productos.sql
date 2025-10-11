-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2025 a las 01:49:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12
-- Tiempo de generación: 29-07-2025 a las 04:37:03
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `destacado` tinyint(1) DEFAULT 0,
  `novedad` tinyint(1) DEFAULT 0,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `precio`, `imagen`) VALUES
(2, 'camita', 'Cama', 550000.00, 'cabezon1.jpeg'),
(5, 'Cajon Marbella', 'Cajon', 650000.00, 'cajon.jpeg'),
(6, 'Cajon Andorra', 'Cajon', 600000.00, 'cajon1.jpeg'),
(7, 'Cajon Sevilla', 'Cajon', 620000.00, 'cajon2.jpeg'),
(8, 'Nocheros Barcelona', 'Cajon', 400000.00, 'cajon3.jpeg'),
(9, 'Centro de Entretenimiento Bilbao', 'Cajon', 580000.00, 'cajon4.jpeg'),
(10, 'Centro de Entretenimiento Coruña', 'Cajon', 580000.00, 'cajon8.jpeg'),
(11, 'Cajonera Valladolid', 'Cajon', 630000.00, 'cajon10.jpeg'),
(12, 'Espaldar Madrid', 'Cama', 350000.00, 'cabezon5.jpeg'),
(13, 'Espaldar Palma de Mallorca', 'Cama', 350000.00, 'cabezon2.jpeg'),
(14, 'Espaldar Girona', 'Cama', 350000.00, 'cabezon3.jpeg'),
(15, 'Cama de Lujo Murcia', 'Cama', 2800000.00, 'cama.jpeg'),
(16, 'Cama de Lujo Pamplona', 'Cama', 3000000.00, 'cama2.jpeg'),
(17, 'Closet Lérida', 'Closet', 2500000.00, 'closet26.jpeg'),
(18, 'Closet Infantil Teruel', 'Closet', 650000.00, 'closet25.jpeg'),
(19, 'Closet Malaga', 'Closet', 900000.00, 'closet39.jpeg'),
(20, 'Tocador Badalona', 'Closet', 890000.00, 'closet33.jpeg'),
(21, 'Closet Tenerife', 'Closet', 1500000.00, 'closet34.jpeg'),
(22, 'Closet Vigo', 'Closet', 800000.00, 'closet.jpeg'),
(23, 'Closet Alicante', 'Closet', 700000.00, 'closet18.jpeg'),
(24, 'Comedor Toleo', 'Comedor', 1800000.00, 'comedor.jpeg'),
(25, 'Comedor Rubi', 'Comedor', 2300000.00, 'comedor3.jpeg'),
(26, 'Comedor Cadiz', 'Comedor', 2100000.00, 'comedor6.jpeg'),
(27, 'Comedor Zamora', 'Comedor', 2100000.00, 'comedor12.jpeg'),
(28, 'Comedor Segovia', 'Comedor', 1800000.00, 'comedor9.jpeg'),
(29, 'Comedor Gerona', 'Comedor', 1900000.00, 'comedor14.jpeg'),
(30, 'Sala Tarragona', 'Sala', 2500000.00, 'sala19.jpeg'),
(31, 'Sala Osasuna', 'Sala', 1800000.00, 'sala17.jpeg'),
(32, 'Sala León', 'Sala', 2000000.00, 'sala15.jpeg'),
(33, 'Sala Parla', 'Sala', 3000000.00, 'sala9.jpeg'),
(34, 'Sala Bologna', 'Sala', 2500000.00, 'sala4.jpeg'),
(35, 'Sala Mataro', 'Sala', 3200000.00, 'sala11.jpeg'),
(36, 'Silla Getafe', 'Silla', 200000.00, 'silla.jpeg'),
(37, 'Silla Leganes', 'Silla', 320000.00, 'silla2.jpeg'),
(38, 'Silla Santander', 'Silla', 340000.00, 'silla3.jpeg'),
(39, 'Tocador Almeria', 'Tocador', 900000.00, 'tocador.jpeg'),
(40, 'Tocador Alcala', 'Tocador', 930000.00, 'tocador1.jpeg'),
(41, 'Tocador Tarrasa', 'Tocador', 670000.00, 'tocador4.jpeg'),
(42, 'Tocador Sabadell', 'Tocador', 750000.00, 'tocador7.jpeg');
(4, 'comedor', 'Comedor', 25000.00, 'cabezon1.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
