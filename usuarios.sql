SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Crear la tabla de usuarios
CREATE TABLE `usuarios` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nombre_completo` varchar(50) NOT NULL,
    `telefono` varchar(50) NOT NULL,
    `tipo_documento` varchar(50) NOT NULL,
    `documento` varchar(50) NOT NULL,
    `direccion` varchar(50) NOT NULL,
    `correo_electronico` varchar(50) NOT NULL,
    `contrasena` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
    
    ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

