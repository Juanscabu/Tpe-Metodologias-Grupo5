-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2020 a las 02:58:04
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_agenda_viajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alojamiento`
--

CREATE TABLE `alojamiento` (
  `id_alojamiento` int(11) NOT NULL,
  `id_viaje` int(11) NOT NULL,
  `hotel` varchar(20) NOT NULL,
  `single` int(20) NOT NULL,
  `doble` int(10) NOT NULL,
  `cantidad_personas` int(11) NOT NULL,
  `cantidad_habitaciones` int(11) NOT NULL,
  `servicio` varchar(100) NOT NULL,
  `horario_checkin` int(11) NOT NULL,
  `horario_checkout` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_egreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alojamiento`
--

INSERT INTO `alojamiento` (`id_alojamiento`, `id_viaje`, `hotel`, `single`, `doble`, `cantidad_personas`, `cantidad_habitaciones`, `servicio`, `horario_checkin`, `horario_checkout`, `fecha_ingreso`, `fecha_egreso`) VALUES
(27, 2, 'Hotel Amarillo', 1, 1, 3, 2, 'gimnasio', 10, 12, '2020-05-29', '2020-05-31'),
(46, 2, 'Hotel Negro', 0, 1, 2, 1, 'desayuno, limpieza.', 10, 12, '2020-05-22', '2020-05-30'),
(47, 2, 'Hotel Verde', 0, 2, 4, 2, 'desayuno, pileta.', 10, 12, '2020-05-29', '2020-05-31'),
(48, 2, 'Hotel Oslo Central', 1, 1, 3, 2, 'Gimnasio', 11, 12, '2020-06-25', '2020-06-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE `viaje` (
  `id_viaje` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `nro_vuelo` int(11) NOT NULL,
  `compania` text NOT NULL,
  `ciudad_origen` varchar(20) NOT NULL,
  `ciudad_destino` varchar(20) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `descripcion` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`id_viaje`, `nombre`, `nro_vuelo`, `compania`, `ciudad_origen`, `ciudad_destino`, `fecha_inicio`, `fecha_fin`, `descripcion`) VALUES
(2, 'Viaje 1', 123, 'American Express', 'Azul', 'Tandil', '2020-05-28', '2020-06-01', 'probando'),
(3, 'Viaje 2', 12, 'Aerolineas Argentinas', 'Tandil', 'Olavarria', '2020-06-30', '2020-07-10', 'dsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE `vuelo` (
  `id_vuelo` int(11) NOT NULL,
  `id_viaje` int(11) NOT NULL,
  `nro_vuelo` int(11) NOT NULL,
  `puerta` varchar(100) NOT NULL,
  `compañia` varchar(100) NOT NULL,
  `asiento` int(100) NOT NULL,
  `aeropuerto_origen` varchar(100) NOT NULL,
  `ciudad_origen` varchar(100) NOT NULL,
  `pais_origen` varchar(100) NOT NULL,
  `aeropuerto_destino` varchar(100) NOT NULL,
  `ciudad_destino` varchar(100) NOT NULL,
  `pais_destino` varchar(100) NOT NULL,
  `fecha_salida` date NOT NULL,
  `hora_salida` time(6) NOT NULL,
  `fecha_llegada` date NOT NULL,
  `hora_llegada` time(6) NOT NULL,
  `reserva` varchar(100) NOT NULL,
  `tiempo entre escalas` int(100) NOT NULL,
  `agenteID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vuelo`
--

INSERT INTO `vuelo` (`id_vuelo`, `id_viaje`, `nro_vuelo`, `puerta`, `compañia`, `asiento`, `aeropuerto_origen`, `ciudad_origen`, `pais_origen`, `aeropuerto_destino`, `ciudad_destino`, `pais_destino`, `fecha_salida`, `hora_salida`, `fecha_llegada`, `hora_llegada`, `reserva`, `tiempo entre escalas`, `agenteID`) VALUES
(3, 3, 12, '3', 'Aerolineas Argentinas', 3, '321', 'Tandil', 'Argentina', '31', 'Olavarria', '311', '2020-07-01', '01:21:00.000000', '2020-07-09', '21:21:00.000000', '', 0, 0),
(19, 2, 0, '', 'das', 0, 'sad', 'das', 'dsa', 'ads', 'da', 'das', '2020-06-12', '00:00:00.000000', '0000-00-00', '00:00:00.000000', '', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  ADD PRIMARY KEY (`id_alojamiento`),
  ADD KEY `id_viaje` (`id_viaje`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`id_viaje`);

--
-- Indices de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD PRIMARY KEY (`id_vuelo`),
  ADD KEY `id_viaje` (`id_viaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  MODIFY `id_alojamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `id_viaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  MODIFY `id_vuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  ADD CONSTRAINT `alojamiento_ibfk_1` FOREIGN KEY (`id_viaje`) REFERENCES `viaje` (`id_viaje`);

--
-- Filtros para la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD CONSTRAINT `vuelo_ibfk_1` FOREIGN KEY (`id_viaje`) REFERENCES `viaje` (`id_viaje`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
