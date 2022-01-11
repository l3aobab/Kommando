-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2022 a las 12:52:14
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
-- Base de datos: `glosario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alcatel`
--

CREATE TABLE `alcatel` (
  `codigo` int(11) NOT NULL,
  `uso` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `completo` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `alcatel`
--

INSERT INTO `alcatel` (`codigo`, `uso`, `completo`) VALUES
(1, 'Mostrar el estado de los APs', 'show interface status'),
(2, 'mostrar el PoE de los puertos', 'show lanpower 1'),
(4, 'muestra las vlans del switch', 'show vlan'),
(5, 'Ver APs conectados al switch', 'show lldp remote-system'),
(6, 'Comprobar si un puerto esta UP y que tiene conectados', 'show lldp x/x remote-system'),
(7, 'Ver el uptime del switch', 'show system'),
(8, 'Ver otros switches conectados', 'show amap'),
(9, 'Ver configuracion del switch', 'show configuration snapshot'),
(10, 'ver configuracion vlan de todos los puertos', 'show vlan port'),
(11, 'ver configuracion vlan de un puerto en concreto', 'show vlan port x/x'),
(12, 'Desactivar el PoE de un puerto determinado', 'lanpower stop x/x'),
(13, 'Activar el PoE de un puerto determinado', 'lanpower start x/x'),
(14, 'Desactivar el PoE de un puerto determinado de forma administrativa', 'interfaces x/x admin down'),
(15, 'Activar el PoE de un puerto determinado de forma administrativa', 'interfaces x/x admin up'),
(16, 'Ver miembros del stack', 'show vsf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cisco`
--

CREATE TABLE `cisco` (
  `codigo` int(11) NOT NULL,
  `uso` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `completo` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cisco`
--

INSERT INTO `cisco` (`codigo`, `uso`, `completo`) VALUES
(1, 'Comprobar el estado del LED de un AP en concreto', 'show ap led-state AP-H3301.6A53'),
(2, 'Ver stack', 'show switch'),
(3, 'Realizar un test de cableado', 'test cable-diagnostics tdr interface fastEthernet 0/2'),
(4, 'Comprobar los resultados de un test de cableado', 'show cable-diagnostics tdr interface fastEthernet 0/2'),
(5, 'Ver el CDP de un puerto', 'show cdp neighbors fastEthernet 0/8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruckus`
--

CREATE TABLE `ruckus` (
  `codigo` int(11) NOT NULL,
  `uso` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `completo` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alcatel`
--
ALTER TABLE `alcatel`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `cisco`
--
ALTER TABLE `cisco`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `completo` (`completo`);

--
-- Indices de la tabla `ruckus`
--
ALTER TABLE `ruckus`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `completo` (`completo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alcatel`
--
ALTER TABLE `alcatel`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cisco`
--
ALTER TABLE `cisco`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ruckus`
--
ALTER TABLE `ruckus`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
