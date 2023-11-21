-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 19:45:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE `asesores` (
  `id_asr` int(11) NOT NULL,
  `asesores` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asesores`
--

INSERT INTO `asesores` (`id_asr`, `asesores`) VALUES
(1, 'Cristina Castillejos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos`
--

CREATE TABLE `casos` (
  `id_cs` int(11) NOT NULL,
  `caso` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `casos`
--

INSERT INTO `casos` (`id_cs`, `caso`) VALUES
(1, 'academico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id` int(11) NOT NULL,
  `nombrePPS` varchar(255) NOT NULL,
  `nombreALM` varchar(255) NOT NULL,
  `grado` int(100) NOT NULL,
  `caso` int(1) NOT NULL,
  `modalidad` int(1) NOT NULL,
  `hora` time NOT NULL,
  `dia` varchar(20) NOT NULL,
  `asunto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id`, `nombrePPS`, `nombreALM`, `grado`, `caso`, `modalidad`, `hora`, `dia`, `asunto`) VALUES
(1, 'juan aguirre mendoza', 'chalino sanchez sanchez', 0, 1, 2, '13:30:00', '19 de octubre', 'blabkabala'),
(2, 'andrik', 'asas', 21, 12, 21, '01:22:11', '121', 'sadDS'),
(3, 'awsef', 'feaw', 12, 2121, 212, '00:00:12', '21', 'adsff'),
(4, 'andrik adrian', 'smith', 401, 0, 0, '09:00:00', '19 de octubre', 'mi hijo va mal en la escuela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modo`
--

CREATE TABLE `modo` (
  `id_md` int(11) NOT NULL,
  `opciones` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modo`
--

INSERT INTO `modo` (`id_md`, `opciones`) VALUES
(1, 'virtual'),
(2, 'presencial'),
(3, 'telefonica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `statuss`
--

CREATE TABLE `statuss` (
  `id_sts` int(11) NOT NULL,
  `statuss` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `statuss`
--

INSERT INTO `statuss` (`id_sts`, `statuss`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usr` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `rol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usr`, `nombre`, `correo`, `contraseña`, `rol`) VALUES
(0, 'leonardo', 'hola@hola.com', 'hola1', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`id_asr`);

--
-- Indices de la tabla `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`id_cs`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modo`
--
ALTER TABLE `modo`
  ADD PRIMARY KEY (`id_md`);

--
-- Indices de la tabla `statuss`
--
ALTER TABLE `statuss`
  ADD PRIMARY KEY (`id_sts`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usr`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
  MODIFY `id_asr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `casos`
--
ALTER TABLE `casos`
  MODIFY `id_cs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modo`
--
ALTER TABLE `modo`
  MODIFY `id_md` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `statuss`
--
ALTER TABLE `statuss`
  MODIFY `id_sts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
