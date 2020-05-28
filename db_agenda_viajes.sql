-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2020 a las 02:02:21
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: db_agenda_viajes
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla alojamiento
--

CREATE TABLE db_agencia_viajes.alojamiento (
  id_alojamiento int(11) NOT NULL,
  id_viaje int(11) NOT NULL,
  hotel varchar(20) NOT NULL,
  single int(20) NOT NULL,
  doble int(10) NOT NULL,
  cantidad_personas int(11) NOT NULL,
  cantidad_habitaciones int(11) NOT NULL,
  servicio varchar(20) NOT NULL,
  horario_checkin int(11) NOT NULL,
  horario_checkout int(11) NOT NULL,
  fecha_ingreso date NOT NULL,
  fecha_egreso date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla alojamiento
--

INSERT INTO db_agencia_viajes.alojamiento (id_alojamiento, id_viaje, hotel, single, doble, cantidad_personas, cantidad_habitaciones, servicio, horario_checkin, horario_checkout, fecha_ingreso, fecha_egreso) VALUES
(23, 2, '3', 4, 0, 0, 0, '3', 10, 12, '2020-05-29', '2020-05-31'),
(24, 2, '3', 2, 0, 0, 0, '3', 10, 12, '2020-05-21', '2020-05-30'),
(25, 2, 'Hotel Alej', 0, 0, 1, 3, 'desayuno', 10, 12, '2020-05-20', '2020-05-29'),
(26, 2, 'Hotel Blan', 0, 0, 1, 32, 'pileta', 10, 12, '2020-05-28', '2020-05-30'),
(27, 2, 'Hotel Amarillo', 0, 0, 3, 4, 'gimnasio', 10, 12, '2020-05-29', '2020-05-31'),
(28, 2, 'Hotel Marrón', 0, 0, 12, 31, 'pileta', 10, 12, '2020-05-21', '2020-05-30'),
(29, 2, 'Hotel Azul', 0, 0, 12, 31, 'dsads', 10, 12, '2020-05-21', '2020-05-29'),
(30, 2, 'Hotel Alejo', 1, 2, 2, 3, 'dsda', 10, 12, '2020-05-28', '2020-05-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla viaje
--

CREATE TABLE db_agencia_viajes.viaje (
  id_viaje int(11) NOT NULL,
  nombre varchar(20) NOT NULL,
  ciudad_origen varchar(20) NOT NULL,
  ciudad_destino varchar(20) NOT NULL,
  fecha_inicio date NOT NULL,
  fecha_fin date NOT NULL,
  descripcion varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla viaje
--

INSERT INTO viaje (id_viaje, nombre, ciudad_origen, ciudad_destino, fecha_inicio, fecha_fin, descripcion) VALUES
(2, 'Viaje 1', 'Azul', 'Tandil', '2020-05-28', '2020-05-31', 'probando');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla alojamiento
--
ALTER TABLE alojamiento
  ADD PRIMARY KEY (id_alojamiento),
  ADD KEY id_viaje (id_viaje);

--
-- Indices de la tabla viaje
--
ALTER TABLE viaje
  ADD PRIMARY KEY (id_viaje);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla alojamiento
--
ALTER TABLE alojamiento
  MODIFY id_alojamiento int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla viaje
--
ALTER TABLE viaje
  MODIFY id_viaje int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla alojamiento
--
ALTER TABLE alojamiento
  ADD CONSTRAINT alojamiento_ibfk_1 FOREIGN KEY (id_viaje) REFERENCES viaje (id_viaje);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
