-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2020 a las 06:02:34
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concretos`
--
CREATE DATABASE IF NOT EXISTS `concretos` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `concretos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id`, `Nombre`) VALUES
(1, 'Refaccion'),
(2, 'Especial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `Id` int(35) NOT NULL,
  `Nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `ApePa` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `ApeMa` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Contacto` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Puesto` int(5) DEFAULT NULL,
  `FechaCreacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Foto` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`Id`, `Nombre`, `ApePa`, `ApeMa`, `Contacto`, `Puesto`, `FechaCreacion`, `Foto`) VALUES
(1, 'Leonel', 'Leija', 'Perez', '8971026510', 1, '2020-12-11 02:57:54', NULL),
(3, 'Alan', 'Hernandez', 'Salazar', '8971026511', NULL, '2020-12-11 04:17:55', NULL),
(4, 'Yuri', 'Cañamar', 'Cañamar', '897201471', NULL, '2020-12-11 04:25:57', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(100) NOT NULL,
  `NombreP` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad` int(20) NOT NULL,
  `PrecioC` decimal(25,2) NOT NULL,
  `PrecioV` decimal(25,2) NOT NULL,
  `Cate_id` int(3) DEFAULT NULL,
  `Media_id` int(3) DEFAULT NULL,
  `FechaCrea` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `NombreP`, `Cantidad`, `PrecioC`, `PrecioV`, `Cate_id`, `Media_id`, `FechaCrea`) VALUES
(1, 'Llave inglesa', 15, '1500.00', '1600.00', 1, 1, '0000-00-00 00:00:00'),
(2, 'Tuerca rusa', 15, '140.00', '160.00', 2, 1, '2020-12-09 10:02:00'),
(3, 'Ejemplo', 15, '15.00', '15.00', NULL, NULL, '2020-12-10 02:28:30'),
(4, 'Ejemplo', 15, '15.00', '15.00', NULL, NULL, '2020-12-10 03:00:26'),
(5, 'Tuercas', 150000, '50.00', '60.00', NULL, NULL, '2020-12-10 06:03:17'),
(6, 'Tanque de gas', 2, '5000.00', '5500.00', NULL, NULL, '2020-12-10 06:05:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`Id`, `Nombre`) VALUES
(1, 'Mecánico'),
(2, 'Chofer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(3) NOT NULL,
  `Usuario` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `FechaCreacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Usuario`, `Contrasena`, `FechaCreacion`) VALUES
(1, 'Usuario1', 'contra1', '2020-11-09 12:24:19'),
(2, 'Usuario2', 'contra2', '2020-11-23 16:06:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `Id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
