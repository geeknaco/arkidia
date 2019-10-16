-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-10-2019 a las 01:54:29
-- Versión del servidor: 10.2.10-MariaDB
-- Versión de PHP: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Arkidia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(2) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen_categoria` varchar(70) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `color` varchar(7) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `descripcion`, `imagen_categoria`, `color`) VALUES
(1, 'COCINA', 'ARCHIVO', ''),
(2, 'DIBUJO', 'ARCHIVO', ''),
(3, 'CIENCIA', 'ARCHIVO', ''),
(4, 'FOTOGRAFIA', 'ARCHIVO', ''),
(5, 'CONSTRUCCION', 'ARCHIVO', ''),
(6, 'PINTURA', 'ARCHIVO', ''),
(8, 'DANZA', 'ARCHIVO', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `fecha` date NOT NULL,
  `evento` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`fecha`, `evento`, `usuario`) VALUES
('2019-10-06', 'INGRESO AL SISTEMA', 'polrojas@gmail.com'),
('2019-10-06', 'AGREGO UN HIJO', 'polrojas@gmail.com'),
('2019-10-06', 'INGRESO AL SISTEMA', 'polrojas@gmail.com'),
('2019-10-06', 'REGISTRACION DE USUARIO', 'alberto.garcia@mail.com'),
('2019-10-06', 'REGISTRACION DE USUARIO', 'pablo.rojas@bbva.com'),
('2019-10-06', 'AGREGO UN HIJO', 'pablo.rojas@bbva.com'),
('2019-10-06', 'ENVIO DE CLAVE', 'silvia.cristina.sola@gmail.com'),
('2019-10-06', 'INGRESO AL SISTEMA', 'silvia.cristina.sola@gmail.com'),
('2019-10-06', 'INGRESO AL SISTEMA', 'silvia.cristina.sola@gmail.com'),
('2019-10-06', 'INGRESO AL SISTEMA', 'silvia.cristina.sola@gmail.com'),
('2019-10-06', 'INGRESO AL SISTEMA', 'silvia.cristina.sola@gmail.com'),
('2019-10-06', 'AGREGO CATEGORIA', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'INGRESO AL DASHBOARD ADMINISTRADOR', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'AGREGO CATEGORIA', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'INGRESO AL DASHBOARD ADMINISTRADOR', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'AGREGO CATEGORIA', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'AGREGO CATEGORIA', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'AGREGO CATEGORIA', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'AGREGO CATEGORIA', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'AGREGO CATEGORIA', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'AGREGO CATEGORIA', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'AGREGO CATEGORIA', 'jorge.vazquez@gmail.com'),
('2019-10-06', 'AGREGO CATEGORIA', 'jorge.vazquez@gmail.com'),
('2019-10-07', 'INGRESO AL DASHBOARD PADRES', 'polrojas@gmail.com'),
('2019-10-07', 'AGREGO UN HIJO', 'polrojas@gmail.com'),
('2019-10-07', 'INGRESO AL DASHBOARD ADMINISTRADOR', 'jorge.vazquez@gmail.com'),
('2019-10-07', 'INGRESO AL DASHBOARD PADRES', 'polrojas@gmail.com'),
('2019-10-07', 'INGRESO AL DASHBOARD PADRES', 'polrojas@gmail.com'),
('2019-10-07', 'AGREGO UN HIJO', 'polrojas@gmail.com'),
('2019-10-07', 'INGRESO AL DASHBOARD PADRES', 'polrojas@gmail.com'),
('2019-10-08', 'INGRESO AL DASHBOARD PADRES', 'polrojas@gmail.com'),
('2019-10-09', 'INGRESO AL DASHBOARD PADRES', 'polrojas@gmail.com'),
('2019-10-09', 'INGRESO AL DASHBOARD PADRES', 'polrojas@gmail.com'),
('2019-10-09', 'REGISTRACION DE USUARIO', 'tosti.gaston@gmail.com'),
('2019-10-09', 'AGREGO UN HIJO', 'tosti.gaston@gmail.com'),
('2019-10-12', 'INGRESO AL DASHBOARD ADMINISTRADOR', 'jorge.vazquez@gmail.com'),
('2019-10-13', 'INGRESO AL DASHBOARD PADRES', 'polrojas@gmail.com'),
('2019-10-14', 'INGRESO AL DASHBOARD PADRES', 'polrojas@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_administrador`
--

CREATE TABLE `usuario_administrador` (
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `mail` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario_administrador`
--

INSERT INTO `usuario_administrador` (`nombre`, `apellido`, `mail`, `password`) VALUES
('JORGE', 'VAZQUEZ', 'jorge.vazquez@gmail.com', '333333aA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_hijo`
--

CREATE TABLE `usuario_hijo` (
  `usuario` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `alias` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_padre` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario_hijo`
--

INSERT INTO `usuario_hijo` (`usuario`, `alias`, `usuario_padre`, `edad`, `password`) VALUES
('DELFINA', 'DELFI', 'tosti.gaston@gmail.com', 12, '333333aA'),
('GERMAN', 'GER', 'polrojas@gmail.com', 12, '222222aA'),
('LAUTARO', 'LAUTA', 'polrojas@gmail.com', 6, '1111'),
('PABLLO112', 'POL', 'polrojas@gmail.com', 23, '12345Qq'),
('POLITO', 'POLITO', 'pablo.rojas@bbva.com', 6, 'Qaz11qaz'),
('SOLITA1234', 'SOLITA', 'polrojas@gmail.com', 4, '123456qQ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_padre`
--

CREATE TABLE `usuario_padre` (
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `mail` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario_padre`
--

INSERT INTO `usuario_padre` (`nombre`, `apellido`, `mail`, `password`) VALUES
('PABLO', 'ROJAS', 'polrojas@gmail.com', '1111'),
('SILVIA', 'SOLA', 'silvia.cristina.sola@gmail.com', 'w0WC6f31'),
('SILVIA', 'SOLA', 'silvia.sola@bbva.com', '111111aA'),
('SSSS', 'SSSSS', 'aaa@sss.com', '111111aA'),
('ALBERTO', 'GARCIA', 'alberto.garcia@mail.com', '222222aA'),
('PABLO', 'ROJAS', 'pablo.rojas@bbva.com', 'Qaz11qaz'),
('GASTON', 'TOSTI', 'tosti.gaston@gmail.com', '111111aA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `usuario_hijo`
--
ALTER TABLE `usuario_hijo`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
