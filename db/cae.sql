-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-08-2018 a las 13:26:15
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_costo`
--

CREATE TABLE `centro_costo` (
  `id_centro_costo` int(11) NOT NULL,
  `centro_costo` varchar(50) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `centro_costo`
--

INSERT INTO `centro_costo` (`id_centro_costo`, `centro_costo`, `activo`) VALUES
(1, 'Compras', 1),
(2, 'Ventas', 1),
(3, 'Finanzas', 1),
(4, 'RRHH', 1),
(5, 'Logística', 1),
(6, 'Producción', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar_trabajo`
--

CREATE TABLE `lugar_trabajo` (
  `id_lugar_trabajo` int(11) NOT NULL,
  `lugar_trabajo` varchar(50) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugar_trabajo`
--

INSERT INTO `lugar_trabajo` (`id_lugar_trabajo`, `lugar_trabajo`, `activo`) VALUES
(1, 'Bogotá', 1),
(2, 'Medellin', 1),
(3, 'Cali', 1),
(4, 'Barranquilla', 1),
(5, 'Cartagena', 1),
(6, 'No Aplica', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL,
  `ab_tipo_documento` char(2) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `ab_tipo_documento`, `tipo_documento`, `activo`) VALUES
(1, 'CC', 'CEDULA DE CIUDADANIA', 1),
(2, 'CE', 'CEDULA DE EXTRANJERIA', 1),
(3, 'TI', 'TARJETA DE IDENTIDAD', 1),
(4, 'PA', 'PA', 1),
(5, 'PP', 'PASAPORTE', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centro_costo`
--
ALTER TABLE `centro_costo`
  ADD PRIMARY KEY (`id_centro_costo`);

--
-- Indices de la tabla `lugar_trabajo`
--
ALTER TABLE `lugar_trabajo`
  ADD PRIMARY KEY (`id_lugar_trabajo`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centro_costo`
--
ALTER TABLE `centro_costo`
  MODIFY `id_centro_costo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `lugar_trabajo`
--
ALTER TABLE `lugar_trabajo`
  MODIFY `id_lugar_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
