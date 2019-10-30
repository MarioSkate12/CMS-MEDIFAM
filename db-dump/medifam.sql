-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2019 a las 15:11:16
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `medifam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro_salud`
--

CREATE TABLE `centro_salud` (
  `id_centro` int(10) NOT NULL,
  `des_centro` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `centro_salud`
--

INSERT INTO `centro_salud` (`id_centro`, `des_centro`) VALUES
(1, 'KENNEDY'),
(2, 'FLORESTA'),
(3, 'SOACHA'),
(4, 'CALLE 90'),
(5, 'FACATATIVA'),
(6, 'SUBA'),
(7, 'CALLE 51'),
(8, 'CALLE 48'),
(9, 'CHÍA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especial` int(10) NOT NULL,
  `des_especial` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id_especial`, `des_especial`) VALUES
(1, 'ODONTOLOGIA'),
(2, 'MEDICINA GENERAL'),
(3, 'PEDIATRÍA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificacion`
--

CREATE TABLE `identificacion` (
  `tipo_id` int(11) NOT NULL,
  `tipo_desc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `identificacion`
--

INSERT INTO `identificacion` (`tipo_id`, `tipo_desc`) VALUES
(1, 'REGISTRO CIVIL'),
(2, 'T.I. TARJETA DE IDENTIDAD'),
(3, 'C.C. CEDULA DE CIUDADANIA'),
(4, 'C.E. CEDULA EXTREJERA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(10) NOT NULL,
  `des_rol` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `des_rol`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'DOCTOR'),
(3, 'USUARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitar_citas`
--

CREATE TABLE `solicitar_citas` (
  `id_solicitud` int(10) NOT NULL,
  `tipo_id` int(10) NOT NULL,
  `documento` int(15) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Apellido` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `id_centro` int(10) NOT NULL,
  `id_especial` int(10) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitar_citas`
--

INSERT INTO `solicitar_citas` (`id_solicitud`, `tipo_id`, `documento`, `Nombre`, `Apellido`, `fecha`, `Hora`, `id_centro`, `id_especial`, `usuario_id`) VALUES
(1, 3, 1000, 'Bayron', 'Cardona', '1121-12-12', '12:21:00', 1, 2, 4),
(2, 1, 111, 'dairon ', ' Beltran', '2019-10-12', '12:12:00', 4, 2, 14),
(3, 1, 222, 'dayab', 'lol', '3321-02-10', '12:02:00', 2, 3, 15),
(4, 2, 222, 'Dayan', 'lol', '2011-10-23', '12:12:00', 9, 1, 15),
(5, 4, 222, 'dayan', 'lol', '1242-12-12', '12:12:00', 7, 2, 15),
(6, 3, 2147483647, 'rasfsfs', 'fsfsf', '1222-12-12', '00:12:00', 3, 2, 15),
(7, 3, 1000382, 'Ingrid', 'Beltran', '2019-12-25', '01:20:00', 3, 2, 16),
(8, 3, 80654, 'phineas', 'Flynn', '2019-10-26', '14:20:00', 7, 2, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_ident`
--

CREATE TABLE `tipo_ident` (
  `id_tipo` int(10) NOT NULL,
  `des_tipo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_ident`
--

INSERT INTO `tipo_ident` (`id_tipo`, `des_tipo`) VALUES
(1, 'REGISTRO CIVIL'),
(2, 'T.I. TARJETA DE IDENTIDAD'),
(3, 'C.C. CEDULA DE CIUDADANIA'),
(4, 'C.E. CEDULA EXTRAJERA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `id_tipo` int(10) NOT NULL,
  `documento` int(15) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `ciudad` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `id_rol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_tipo`, `documento`, `nombres`, `apellidos`, `ciudad`, `direccion`, `pass`, `url_image`, `id_rol`) VALUES
(3, 2, 12, 'Paulo Londra', 'lol', 'lol', 'lol', '$2y$10$Zyjmfv8UkuzFSrBR9Prpve4QMClWtfkdzpwamdRyTkJoVHR/3fDuu', 'assets/img/500x500.jpg', 1),
(4, 2, 1000, 'Bayron ', 'Cardona', 'Bogota', 'Cali, valle del cauca', '$2y$10$1vkkl.QRfEWcEyJ3WR6oWeJfngNSKP9s1f0s0M0v4iAPS2e9rSMmq', 'assets/img/464bb2f4-d79b-4991-9335-90ea5ce0dd23.jpg', 3),
(10, 3, 3000, 'Trixie', 'Encantada', 'Magica', 'Animada', '$2y$10$d2Ga3h6.iqJvSj5cFGVYXe2J3xFXiDFJdF0U3OwZ36VR7xqEhKDlO', 'assets/img/61077742_332487540754769_3411689833533305680_n.jpg', 2),
(12, 2, 123, 'Trueno', 'Fms', 'Argentina', 'Buenos Aires', '$2y$10$WZI74eBCq.qb2zH/npq.ZOb7P1n.IVoFpi9gXUl8ZVnZmwCtTdTV2', 'assets/img/Trueno5.jpg', 2),
(14, 2, 111, 'dairon', 'Beltran', 'usme', 'usme', '$2y$10$tT1bY6Fno8BG5WeZTn6RJOQBdg2.Gca0MMnEfCnns/RERjlbc5LZu', 'assets/img/descarga.jpg', 3),
(15, 3, 222, 'Mario ', 'Beltran', 'lo', 'lol', '$2y$10$bQjnQW2rSpZ8Nt1y42reB.mMQn5Y/VmAmXpDCFq/2bSii.22GQKfG', 'assets/img/dcs.ico', 3),
(16, 3, 1000382, 'Ingrid', 'Beltran', 'Bogotá D.C', 'Bosa', '$2y$10$xSrPp7H0yujMLgRWgmlqBO3QhrWprHIAgh4PwgadC8IpKWtNc5Wv6', 'assets/img/Mikasa_Ackerman_(anime).png', 3),
(17, 3, 1003, 'Meliodas', 'Capital', 'Funza ', 'Bosa', '$2y$10$0Gmonyu.KtakW4.HLi5xvuAIaBm26iSn5iEnaPsZKVtag.oFHNfhq', 'assets/img/Meliodas_Anime.png', 2),
(18, 3, 80654, 'phineas ', 'Flyn', 'Bogota D.C', 'Disney', '$2y$10$gSanPL3v8df/GiiPyfs2wuFstiwYCQ2XRvlaRGJ0NBueqebSa6C5S', 'assets/img/Temporada1.jpg', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centro_salud`
--
ALTER TABLE `centro_salud`
  ADD PRIMARY KEY (`id_centro`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_especial`);

--
-- Indices de la tabla `identificacion`
--
ALTER TABLE `identificacion`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `solicitar_citas`
--
ALTER TABLE `solicitar_citas`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `id_usuario` (`tipo_id`,`id_centro`,`id_especial`),
  ADD KEY `id_tipo` (`tipo_id`),
  ADD KEY `id_especial` (`id_especial`),
  ADD KEY `id_centro` (`id_centro`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `tipo_ident`
--
ALTER TABLE `tipo_ident`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo` (`id_tipo`,`id_rol`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centro_salud`
--
ALTER TABLE `centro_salud`
  MODIFY `id_centro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id_especial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `identificacion`
--
ALTER TABLE `identificacion`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitar_citas`
--
ALTER TABLE `solicitar_citas`
  MODIFY `id_solicitud` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_ident`
--
ALTER TABLE `tipo_ident`
  MODIFY `id_tipo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `solicitar_citas`
--
ALTER TABLE `solicitar_citas`
  ADD CONSTRAINT `solicitar_citas_ibfk_3` FOREIGN KEY (`id_especial`) REFERENCES `especialidad` (`id_especial`),
  ADD CONSTRAINT `solicitar_citas_ibfk_4` FOREIGN KEY (`id_centro`) REFERENCES `centro_salud` (`id_centro`),
  ADD CONSTRAINT `solicitar_citas_ibfk_5` FOREIGN KEY (`tipo_id`) REFERENCES `identificacion` (`tipo_id`),
  ADD CONSTRAINT `solicitar_citas_ibfk_6` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_ident` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
