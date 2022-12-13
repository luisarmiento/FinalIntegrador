-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 22:15:54
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrendarcasa`
--

CREATE TABLE `arrendarcasa` (
  `id` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `idvi` int(11) DEFAULT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Asunto` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arrendarcasa`
--

INSERT INTO `arrendarcasa` (`id`, `id_usu`, `idvi`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Asunto`) VALUES
(1, 1, 1, 'luis', 'sarmiento', 'luis@gmail.com', '91208', ''),
(2, 3, 25, 'jose', 'ochoa', 'jose@gmail.com', '9132', ''),
(5, 3, 2, 'jose', 'ochoa', 'ochoa@gmail.com', '9489494', 'esta disponible?'),
(6, 6, NULL, 'Jose', 'Ochoa', 'jose2@gmail.com', '65484', 'consulta de habitaciones'),
(7, 6, NULL, 'jose', 'asdas', 'asd@asd.com', '54646', 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'arrendador'),
(2, 'arrendatario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nombre`, `usuario`, `contraseña`, `id_cargo`, `telefono`) VALUES
(1, 'luis', 'luis@hotmail.com', '12345', 1, NULL),
(3, 'jose', 'jose@gmail.com', '123456', 2, NULL),
(4, 'luis', 'luis@h', '123', 1, NULL),
(5, 'Luis', 'luis1@hotmail.com', '123', 1, NULL),
(6, 'Jose', 'jose2@gmail.com', '1234', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `idvi` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`idvi`, `id_usu`, `ruta`, `descripcion`) VALUES
(1, 1, '../img/img_1.jpg', NULL),
(2, 1, '../img/img_2.jpg', NULL),
(3, 1, '../img/img_3.jpg', NULL),
(4, 1, '../img/img_4.jpg', NULL),
(24, 1, '../img/img_5.jpg', 'asdsa'),
(25, 4, '../img/img_6.jpg', 'casa con ventanas'),
(30, 1, '../img/img_5.jpg', '1 casa'),
(31, 5, '../img/img_6.jpg', 'Casa con vista al mar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arrendarcasa`
--
ALTER TABLE `arrendarcasa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usu` (`id_usu`),
  ADD KEY `id_v` (`idvi`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`idvi`),
  ADD KEY `id_usu` (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arrendarcasa`
--
ALTER TABLE `arrendarcasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `idvi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `arrendarcasa`
--
ALTER TABLE `arrendarcasa`
  ADD CONSTRAINT `arrendarcasa_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `arrendarcasa_ibfk_2` FOREIGN KEY (`idvi`) REFERENCES `vivienda` (`idvi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD CONSTRAINT `vivienda_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id_usu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
