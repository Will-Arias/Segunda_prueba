-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2018 a las 17:36:34
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `arsama2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblarchivo`
--

CREATE TABLE `tblarchivo` (
  `documento_usuario` int(12) NOT NULL,
  `nombre_usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `sala_archivo` text COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion_archivo` text COLLATE utf8_spanish_ci NOT NULL,
  `estante_archivo` text COLLATE utf8_spanish_ci NOT NULL,
  `fila_archivo` text COLLATE utf8_spanish_ci NOT NULL,
  `columna_archivo` text COLLATE utf8_spanish_ci NOT NULL,
  `estado_archivo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `fecha_destruccion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblempleado`
--

CREATE TABLE `tblempleado` (
  `documento_empleado` int(11) NOT NULL,
  `nombre_empleado` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_empleado` text COLLATE utf8_spanish_ci NOT NULL,
  `cargo_empleado` text COLLATE utf8_spanish_ci NOT NULL,
  `estado_empleado` text COLLATE utf8_spanish_ci NOT NULL,
  `contrasena_empleado` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblempleado`
--

INSERT INTO `tblempleado` (`documento_empleado`, `nombre_empleado`, `apellido_empleado`, `cargo_empleado`, `estado_empleado`, `contrasena_empleado`) VALUES
(12345, 'jadder', 'jaimes', 'externo', 'activo', '1'),
(1193471870, 'jadder', 'jaimes', 'archivo', 'activo', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprestamo`
--

CREATE TABLE `tblprestamo` (
  `codigo_prestamo` int(11) NOT NULL,
  `documento_empleado` int(11) NOT NULL,
  `nombre_empleado` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_empleado` text COLLATE utf8_spanish_ci NOT NULL,
  `cargo_empleado` text COLLATE utf8_spanish_ci NOT NULL,
  `documento_usuario` int(11) NOT NULL,
  `ubicacion_prestamo` text COLLATE utf8_spanish_ci NOT NULL,
  `estado_archivo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblarchivo`
--
ALTER TABLE `tblarchivo`
  ADD PRIMARY KEY (`documento_usuario`);

--
-- Indices de la tabla `tblempleado`
--
ALTER TABLE `tblempleado`
  ADD PRIMARY KEY (`documento_empleado`);

--
-- Indices de la tabla `tblprestamo`
--
ALTER TABLE `tblprestamo`
  ADD PRIMARY KEY (`codigo_prestamo`),
  ADD KEY `documento_empleado` (`documento_empleado`),
  ADD KEY `documento_usuario` (`documento_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblprestamo`
--
ALTER TABLE `tblprestamo`
  MODIFY `codigo_prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblprestamo`
--
ALTER TABLE `tblprestamo`
  ADD CONSTRAINT `tblprestamo_ibfk_1` FOREIGN KEY (`documento_usuario`) REFERENCES `tblarchivo` (`documento_usuario`),
  ADD CONSTRAINT `tblprestamo_ibfk_2` FOREIGN KEY (`documento_empleado`) REFERENCES `tblempleado` (`documento_empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
