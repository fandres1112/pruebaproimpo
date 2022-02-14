-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2022 a las 04:16:17
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebaproimpo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosusuarios`
--

CREATE TABLE `datosusuarios` (
  `pk_datosusuarios` int(11) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `fk_tipoid` int(11) NOT NULL DEFAULT 1,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `usuario_creacion` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosusuarios`
--

INSERT INTO `datosusuarios` (`pk_datosusuarios`, `cedula`, `fk_tipoid`, `nombre`, `apellido`, `correo`, `telefono`, `direccion`, `ciudad`, `usuario_creacion`, `fecha_creacion`) VALUES
(1, '1132123244', 1, 'Darkaaaaa', 'perea', 'asd@gmail.com', '3122212323', 'calle 34 21 12', 'Cali', 8, '2022-02-13 07:41:21'),
(2, '44543434', 2, 'Andres', 'as', 'asdasdas@gmail.com', '3121121223', 'calle 34 21 12', 'Cali', 9, '2022-02-13 07:46:57'),
(3, '66545432', 1, 'Arnold', 'Piu', 'aaa@gmail.com', '3215579808', 'Calle 3', 'Medellin', 20, '2022-02-13 16:28:19'),
(4, '1121324322', 1, 'Santiago', 'Ress', 'eee@gmail.com', '3150098767', 'Calle5', 'Bogota', 20, '2022-02-13 16:30:40'),
(5, '22345432', 1, 'Laura', 'Herrera', 'laura@hotmail.com', '3245545654', 'Calle 1', 'Pereira', 8, '2022-02-13 19:14:46'),
(6, '1123456789', 1, 'Antonella', 'Perez', 'Anto@gmail.com', '3212200987', 'Calle 6', 'Cali', 8, '2022-02-13 19:15:22'),
(7, '1123212111', 1, 'Sury', 'Sol', 'Sur@hotmail.es', '3198857464', 'Calle 7', 'Bogota', 8, '2022-02-13 19:15:56'),
(8, '1123212121', 5, 'Oriana', 'Fretz', 'Fret@gmail.com', '3218869786', 'Calle 8', 'Medellin', 8, '2022-02-13 19:16:59'),
(9, '1122321', 1, 'Siri', 'Lopez', 'siri@yahoo.com', '3144444444', 'Calle 10', 'Armenia', 8, '2022-02-13 19:17:38'),
(10, '99876546', 1, 'Angela', 'Grisales', 'ange@hotmail.com', '3132232222', 'Calle 11', 'Cali', 8, '2022-02-13 19:18:09'),
(11, '1145556677', 1, 'Alejandro', 'Cena', 'ale1111@gmail.com', '3129998745', 'Calle 12', 'Bogota', 8, '2022-02-13 19:19:06'),
(12, '1122334455', 2, 'Nuevo', 'Registro', 'sdsd@gmail.com', '3212212222', 'Calle 12', 'Cali', 8, '2022-02-14 01:42:02'),
(13, '1122321288', 1, 'Antonio', 'Pino', 'Apino@hotmail.com', '3432232121', 'Cra 22', 'Bogota', 8, '2022-02-14 01:44:26'),
(14, '43565654', 3, 'Agie', 'Solarte', 'Angi@gmail.com', '3213333333', 'Cra 14 #23B-01', 'Barranquilla', 8, '2022-02-14 01:46:04'),
(15, '1123234322', 1, 'Fabian', 'Jaramillo', 'fandres1112@gmail.com', '31234454444', 'calle', 'Cali', 8, '2022-02-14 02:59:17'),
(16, '1151967422', 1, 'Fabian', 'Jaramillo', 'fandres1112@gmail.com', '3142232323', 'as', 'Cali', 8, '2022-02-14 03:08:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoidentificacion`
--

CREATE TABLE `tipoidentificacion` (
  `pk_tipoid` int(11) NOT NULL,
  `descripcion` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoidentificacion`
--

INSERT INTO `tipoidentificacion` (`pk_tipoid`, `descripcion`) VALUES
(1, 'CC'),
(2, 'CE'),
(3, 'NIT'),
(4, 'PP'),
(5, 'TI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `pk_usuario` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`pk_usuario`, `usuario`, `clave`, `fecha_creacion`) VALUES
(8, 'a', '$2y$10$GB0apbp5Luzqht7nQoTJWu280c5Gk2VxGKDgZUBWeVBUOGAQxrmK6', '2022-02-13 04:42:39'),
(9, 'b', '$2y$10$iL0jGGXuCujC/d0moUwONuslRmeyqzrh1H.xZuImSsn9GcTTXXD6.', '2022-02-13 04:43:43'),
(10, 'c', '$2y$10$zS9rKQLXT0sMXaC44OyMQ.win6s1XbqoG4c3AEU9e27yHTp94YMFW', '2022-02-13 04:46:29'),
(11, 'd', '$2y$10$2rw5S6HSuP7DVWB8asIqyubX1STvcmlURL7.IklGtPqKzbPIYH4Dy', '2022-02-13 04:46:45'),
(16, 'fabian', '$2y$10$j14bFYj.UdX1ldPLrfrRduWyOmA8p7fuJemh00XeissqTyYeFst4G', '2022-02-13 15:15:38'),
(18, 'eee', '$2y$10$3Ie4B3PP7sYlXXMtiw0Oe.O5rFj3cp9FvlvwR6xeWIzwmlwbbjr9K', '2022-02-13 16:02:22'),
(19, 'eeee', '$2y$10$mv23tVzJJvECpKhx7LrRyORs5szC2lP4r2iOolA7Ft12Dz6CtgVP.', '2022-02-13 16:03:03'),
(20, 'prueba', '$2y$10$SEo69lL.pJ/CBp3Lvs3rL.oYa8jZj2iVkDTmpjhYUH6dbm7uwxzi2', '2022-02-13 16:13:58'),
(21, 'prueba2', '$2y$10$TOZPlqJZlJLO7JOLOXa.8eUwhTsegtzW9T1cToy54WBo7G6ddJZwu', '2022-02-13 16:27:15'),
(22, '', '$2y$10$UbiW4pl3JqtlejiLdnRLPeBo91AoHlmRLPffY23JoM/.xhMAsTcNG', '2022-02-13 16:43:44'),
(23, 'qq', '$2y$10$gmVlRn98jglVF527qyGsL.XwxPbsVew4xOE4XBdXrOJP4ccJ.iDyy', '2022-02-14 00:33:22'),
(27, 'ww', '$2y$10$OpHVyxPAery6sKvHDTWDxe52/qIycYjmXtGqzlZsU0OdxGw03u4X.', '2022-02-14 01:04:37'),
(28, 'ee', '$2y$10$E.hvQzWmlaQ4tjUndN9SPO938ccoSWdTpMtc.4IRZftMiC.wwzlr.', '2022-02-14 01:06:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosusuarios`
--
ALTER TABLE `datosusuarios`
  ADD PRIMARY KEY (`pk_datosusuarios`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD KEY `usuario_creacion` (`usuario_creacion`),
  ADD KEY `tipoid` (`fk_tipoid`);

--
-- Indices de la tabla `tipoidentificacion`
--
ALTER TABLE `tipoidentificacion`
  ADD PRIMARY KEY (`pk_tipoid`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`pk_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosusuarios`
--
ALTER TABLE `datosusuarios`
  MODIFY `pk_datosusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tipoidentificacion`
--
ALTER TABLE `tipoidentificacion`
  MODIFY `pk_tipoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `pk_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datosusuarios`
--
ALTER TABLE `datosusuarios`
  ADD CONSTRAINT `datosusuarios_ibfk_1` FOREIGN KEY (`usuario_creacion`) REFERENCES `usuarios` (`pk_usuario`),
  ADD CONSTRAINT `datosusuarios_ibfk_2` FOREIGN KEY (`fk_tipoid`) REFERENCES `tipoidentificacion` (`pk_tipoid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
