-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2025 at 02:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productos`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `destacado` tinyint(1) DEFAULT 0,
  `novedad` tinyint(1) DEFAULT 0,
  `descripcion` text DEFAULT NULL,
  `mas_vendido` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `precio`, `imagen`, `destacado`, `novedad`, `descripcion`, `mas_vendido`) VALUES
(2, 'camita', 'Cama', 550000.00, 'cabezon1.jpeg', 1, 0, '', 0),
(5, 'Cajon Marbella', 'Cajon', 650000.00, 'cajon.jpeg', 1, 0, '', 0),
(6, 'Cajon Andorra', 'Cajon', 600000.00, 'cajon1.jpeg', 0, 0, NULL, 0),
(7, 'Cajon Sevilla', 'Cajon', 620000.00, 'cajon2.jpeg', 1, 0, '', 0),
(8, 'Nocheros Barcelona', 'Cajon', 400000.00, 'cajon3.jpeg', 1, 1, '', 1),
(9, 'Centro de Entretenimiento Bilbao', 'Cajon', 580000.00, 'cajon4.jpeg', 0, 0, NULL, 0),
(10, 'Centro de Entretenimiento Coruña', 'Cajon', 580000.00, 'cajon8.jpeg', 0, 0, NULL, 0),
(11, 'Cajonera Valladolid', 'Cajon', 630000.00, 'cajon10.jpeg', 0, 1, '', 0),
(12, 'Espaldar Madrid', 'Cama', 350000.00, 'cabezon5.jpeg', 0, 0, '', 1),
(13, 'Espaldar Palma de Mallorca', 'Cama', 350000.00, 'cabezon2.jpeg', 0, 0, NULL, 0),
(14, 'Espaldar Girona', 'Cama', 350000.00, 'cabezon3.jpeg', 0, 0, NULL, 0),
(15, 'Cama de Lujo Murcia', 'Cama', 2800000.00, 'cama.jpeg', 0, 0, 'Cama de lujo con acabados en madera de alta calidad, perfecta para dormitorios modernos.', 0),
(16, 'Cama de Lujo Pamplona', 'Cama', 3000000.00, 'cama2.jpeg', 0, 1, '', 0),
(17, 'Closet Lérida', 'Closet', 2500000.00, 'closet26.jpeg', 0, 0, NULL, 0),
(18, 'Closet Infantil Teruel', 'Closet', 650000.00, 'closet25.jpeg', 0, 0, NULL, 0),
(19, 'Closet Malaga', 'Closet', 900000.00, 'closet39.jpeg', 0, 1, '', 0),
(20, 'Tocador Badalona', 'Closet', 890000.00, 'closet33.jpeg', 0, 0, '', 1),
(21, 'Closet Tenerife', 'Closet', 1500000.00, 'closet34.jpeg', 0, 0, '', 1),
(22, 'Closet Vigo', 'Closet', 800000.00, 'closet.jpeg', 0, 1, '', 1),
(23, 'Closet Alicante', 'Closet', 700000.00, 'closet18.jpeg', 0, 0, NULL, 0),
(24, 'Comedor Toleo', 'Comedor', 1800000.00, 'comedor.jpeg', 0, 0, 'Comedor elegante con capacidad para 6 personas, ideal para reuniones familiares.', 0),
(25, 'Comedor Rubi', 'Comedor', 2300000.00, 'comedor3.jpeg', 0, 0, '', 0),
(26, 'Comedor Cadiz', 'Comedor', 2100000.00, 'comedor6.jpeg', 0, 0, '', 0),
(27, 'Comedor Zamora', 'Comedor', 2100000.00, 'comedor12.jpeg', 0, 0, NULL, 0),
(28, 'Comedor Segovia', 'Comedor', 1800000.00, 'comedor9.jpeg', 0, 0, NULL, 0),
(29, 'Comedor Gerona', 'Comedor', 1900000.00, 'comedor14.jpeg', 0, 0, NULL, 0),
(30, 'Sala Tarragona', 'Sala', 2500000.00, 'sala19.jpeg', 0, 0, 'Sala moderna con diseño contemporáneo, perfecta para espacios amplios.', 0),
(31, 'Sala Osasuna', 'Sala', 1800000.00, 'sala17.jpeg', 0, 0, NULL, 0),
(32, 'Sala León', 'Sala', 2000000.00, 'sala15.jpeg', 0, 0, NULL, 0),
(33, 'Sala Parla', 'Sala', 3000000.00, 'sala9.jpeg', 0, 0, NULL, 0),
(34, 'Sala Bologna', 'Sala', 2500000.00, 'sala4.jpeg', 0, 0, NULL, 0),
(35, 'Sala Mataro', 'Sala', 3200000.00, 'sala11.jpeg', 0, 0, NULL, 0),
(36, 'Silla Getafe', 'Silla', 200000.00, 'silla.jpeg', 1, 0, 'Silla ergonómica diseñada para máxima comodidad durante largas jornadas de trabajo.', 0),
(37, 'Silla Leganes', 'Silla', 320000.00, 'silla2.jpeg', 0, 0, NULL, 0),
(38, 'Silla Santander', 'Silla', 340000.00, 'silla3.jpeg', 0, 0, NULL, 0),
(39, 'Tocador Almeria', 'Tocador', 900000.00, 'tocador.jpeg', 0, 0, NULL, 0),
(40, 'Tocador Alcala', 'Tocador', 930000.00, 'tocador1.jpeg', 0, 0, NULL, 0),
(41, 'Tocador Tarrasa', 'Tocador', 670000.00, 'tocador4.jpeg', 0, 0, NULL, 0),
(42, 'Tocador Sabadell', 'Tocador', 750000.00, 'tocador7.jpeg', 0, 0, '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
