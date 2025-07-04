-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2025 a las 02:54:59
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mersch_augusto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--
-- Creación: 07-06-2025 a las 21:52:03
--

CREATE TABLE `perfiles` (
  `id_perfil` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 16-06-2025 a las 21:17:05
-- Última actualización: 29-06-2025 a las 00:37:03
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(2, 'p222212121', 'prueba2', 'qwe2', '123123@ASD.CP22', '$2y$10$LIn3Oqu5TlDXwKCpryQ5GO9xGE/arrz6uWHRCuedvkWAzcFTgK4GS', 2, 'NO'),
(3, 'Miguel', 'ASD', 'aasdqwe', '123123@ASD.CP221', '$2y$10$GNsmFOnih/5qW3Tox8Vaaei3X2t0g7hkqr4Ds22HClaoLBuljYuwq', 2, 'NO'),
(5, 'USUARIO5', 'PRUEBA', 'ASDASDA2', 'ASD@ASD.COM2', '$2y$10$ybsP6VqwWvaAgO7UnvnRj.V31N38MZQ9o62Psp5.VlDsGzydx.NpG', 2, 'NO'),
(6, 'PRUEBA5', 'PRUEBA', 'ASDASDA25', 'ASD@ASD.COM25', '$2y$10$tW7JQFFEmmhNrCpxGVvm1ueT0JDgE/CnrQfvwmMNslIJCQ1R52obu', 2, 'NO'),
(7, 'augusto', 'mersch', 'augusto', 'augusto@mersch.com', '$2y$10$FxxAs2kFoa1RCmZ480vh..f0Hr/K1KybLVXCuR5lE7SOJ/xV3mDvS', 1, 'NO'),
(8, 'augusto', 'mersch', 'augusto2', 'augusto2@mersch.com', '$2y$10$2DalsajkKapn57Lqxt6T9eIQBUU74o4SJUZ30Ao5O0Z2yW7ZTfzhm', 2, 'NO'),
(9, 'Juan', 'Lopez', 'Julo', 'julo@prueba.com', '$2y$10$kebdDJsJnAKUC7Ij.Xcl/OTG1.yl1rqdvwAtagDI/ykzOR/pvRxyK', 2, 'NO'),
(10, '22-6-usuario', 'lopez', '226usuario', '226usuario@prueba.com', '$2y$10$goLJhWj78mZkBuSCT.FVn.POp6rCJe5oNzY6E/PI/.Q4i33EUVGEq', 2, 'NO'),
(11, '25-06', 'junio', '250601', '250601@prueba.com', '$2y$10$l3jF47K7fCs1kEEnCZ09Ju2DO.Vq8HoFRPRPsaUCsndvYNAkPf3jK', 2, 'NO'),
(12, '250602', 'junio', '250602', '250602@prueba.com', '$2y$10$wFELlEsWbg7fAv0SPMbZIOXbO45CpJzaQpMq3FP5vraWh3NZYeyjC', 2, 'NO'),
(13, 'administrador', 'web', 'admin', 'admin@prueba.com', '$2y$10$CkHGYlGq9MKqzmjgguLnXu85wUeUhS4GeN2ccSbBzgiKG7aQ71QVS', 1, 'NO'),
(16, 'NUEVO', 'USUARIO', 'NUEVO_USUARIO', 'nuevo_usuario@prueba.com', '$2y$10$UqFr2qWXmpmeOImIbaxPG.pOqqJ.usQPthdy6VINStKSAe088oE3e', 2, 'NO'),
(17, 'Jeny', 'Lopez', 'jlopez', 'jlopez@prueba.com', '$2y$10$A8NM3MfIYb/WTfBgskZZ3.caFOlQ6Yf.XRfjVgtW/TmK3JUEFGknC', 2, 'NO'),
(18, 'Juan', 'Gomez', 'jgomez', 'jgomez@prueba.com', '$2y$10$GZZID4VzM1Y2aMsE4Tie5O2RonBZLCgRNqDnOv/LjLAj3xo4wE06G', 2, 'NO'),
(19, 'Maria', 'Maria', 'maria', 'mariamaria@prueba.com', '$2y$10$C8s.O3g1073IpU2od7dHWOJBv/bzYpmaDpGedfG7090ciXUJOLhba', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
