-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2022 a las 01:00:47
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
-- Base de datos: `sshealt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partescuerpo`
--

CREATE TABLE `partescuerpo` (
  `id_parte` int(11) NOT NULL,
  `parte` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `partescuerpo`
--

INSERT INTO `partescuerpo` (`id_parte`, `parte`) VALUES
(1, 'Cabeza'),
(2, 'Ojos'),
(3, 'Nuca/cuello'),
(4, 'Hombro derecho'),
(5, 'Hombro izquierdo'),
(6, 'Brazo derecho'),
(7, 'Brazo izquierdo'),
(8, 'Codo derecho'),
(9, 'Codo izquierdo'),
(10, 'Antebrazo derecho'),
(11, 'Antebrazo izquierdo'),
(12, 'Manos/muñeca derecha'),
(13, 'Manos/muñeca izquierda'),
(14, 'Espalda alta (Cervical)'),
(15, 'Espalda media (Dorsal)'),
(16, 'Espalda baja (Lumbar)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendaciones`
--

CREATE TABLE `recomendaciones` (
  `id_recomendacion` int(11) NOT NULL,
  `recomendacion` varchar(512) COLLATE utf8_bin NOT NULL,
  `enlace` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `id_parte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `recomendaciones`
--

INSERT INTO `recomendaciones` (`id_recomendacion`, `recomendacion`, `enlace`, `id_parte`) VALUES
(1, 'Recomendacion de prueba', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ&amp;list=PLy78BVRhuosyxlmzLsuYm0PbT7wYd_0PJ', 12),
(2, 'Recomendacion 2', 'https://www.youtube.com/watch?v=cSN8AxFEsrM', 2),
(3, 'Lorem ipsum dolor sit amet dolore sea voluptua dolor lobortis et dolor sed. Amet mazim eos sea eos dolor et. Dolores ea justo et stet in sed no eirmod sanctus in. Et iriure rebum erat diam amet augue takimata. Facer eirmod justo labore elitr vel sea duo duo. Euismod rebum dignissim et ea et takimata. Et magna tation minim consetetur no elitr et voluptua erat consetetur vero ipsum labore sea ut. Voluptua amet velit et ipsum et elitr accusam consequat tempor diam. Ut amet stet dolore vero sed iriure. At id gu', 'https://www.youtube.com/watch?v=cSN8AxFEsrM', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioparte`
--

CREATE TABLE `usuarioparte` (
  `id_usupart` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `id_parte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `ape` varchar(100) COLLATE utf8_bin NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(10) COLLATE utf8_bin NOT NULL,
  `dir` varchar(100) COLLATE utf8_bin NOT NULL,
  `cel` varchar(15) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `empresa` varchar(30) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(30) COLLATE utf8_bin NOT NULL,
  `dep` varchar(50) COLLATE utf8_bin NOT NULL,
  `ciudad` varchar(50) COLLATE utf8_bin NOT NULL,
  `estado` varchar(10) COLLATE utf8_bin NOT NULL,
  `rol` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `nom`, `ape`, `edad`, `sexo`, `dir`, `cel`, `email`, `empresa`, `cargo`, `dep`, `ciudad`, `estado`, `rol`) VALUES
(2, 'Jaime Andrés', 'Lagos Chaves', 32, 'Masculino', ' 14', '3207313434', 'jaimeandresl@hotmail.com', 'Katary Software', 'Desarrollador', 'Nariño', 'San Juan de Pasto', 'Activo', 'Trabajador'),
(3, 'Yinethe Katherine', 'Carlosama Ordoñez', 29, 'Femenino', 'calle 4 cr 14', '3207313456', 'prueba123456@yopmail.com', 'AYC Soluciones', 'Desarrollador', 'Nariño', 'San Juan de Pasto', 'Activo', 'Trabajador'),
(4, 'Prueba Nombre', 'Perez Torres', 22, 'Masculino', 'calle calle', '3207313444', 'z.a.ve.l.e65.o.h.iho@gmail.com', 'AYC Soluciones', 'Desarrollador tiempo completo', 'Nariño', 'San Juan de Pasto', 'Activo', 'Trabajador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `partescuerpo`
--
ALTER TABLE `partescuerpo`
  ADD PRIMARY KEY (`id_parte`);

--
-- Indices de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  ADD PRIMARY KEY (`id_recomendacion`);

--
-- Indices de la tabla `usuarioparte`
--
ALTER TABLE `usuarioparte`
  ADD PRIMARY KEY (`id_usupart`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `partescuerpo`
--
ALTER TABLE `partescuerpo`
  MODIFY `id_parte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  MODIFY `id_recomendacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
