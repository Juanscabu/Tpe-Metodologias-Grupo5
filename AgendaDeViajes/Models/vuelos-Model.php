<?php
class VuelosModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_agenda_viajes;charset=utf8', 'root', '');
        }
    

    function addVuelo ($nro_vuelo,$compañia,$aeropuerto_origen,$aeropuerto_destino,$ciudad_origen,$ciudad_destino,$pais_origen,$pais_destino,$fecha_salida,$hora_salida,$fecha_llegada,$hora_llegada,$id_viaje) {
        $sentencia = $this->db->prepare('INSERT INTO VUELO (nro_vuelo,compañia,aeropuerto_origen,aeropuerto_destino,ciudad_origen,ciudad_destino,pais_origen,pais_destino,fecha_salida,hora_salida,fecha_llegada,hora_llegada,id_viaje) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $sentencia->execute(array($nro_vuelo,$compañia,$aeropuerto_origen,$aeropuerto_destino,$ciudad_origen,$ciudad_destino,$pais_origen,$pais_destino,$fecha_salida,$hora_salida,$fecha_llegada,$hora_llegada,$id_viaje));
    }

    

   
}
?>