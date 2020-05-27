-- Ejecutese el presente script para la creación de las tablas necesarias
-- para la reserva de un alojamienot
BEGIN;

CREATE DATABASE IF NOT EXISTS db_agencia_viajes;

CREATE TABLE db_agencia_viajes.alojamiento
(
    id_alojamiento          int(11)        NOT NULL AUTO_INCREMENT,
    hotel                   varchar(10)    NOT NULL,
    tipo_habitacion         varchar(10)    NOT NULL,
    servicio                varchar(20)    NOT NULL,
    horario_checkin         int(11)        NOT NULL,
    horario_checkout        int(11)        NOT NULL,
    fecha_ingreso           date           NOT NULL,
    fecha_engreso           date           NOT NULL,
    CONSTRAINT alojamiento_pk PRIMARY KEY (id_alojamiento)
);

CREATE TABLE IF NOT EXISTS db_agencia_viajes.viaje
(
    id_viaje                integer(11) NOT NULL AUTO_INCREMENT,
    origen                  varchar(15) NOT NULL,
    destino                 varchar(15) NOT NULL,
    fecha_salida            date NOT NULL,
    fecha_llegada           date NOT NULL,
    medio_transporte        varchar(3) NULL,
    CONSTRAINT viaje_pk PRIMARY KEY (id_viaje)

);

COMMIT;