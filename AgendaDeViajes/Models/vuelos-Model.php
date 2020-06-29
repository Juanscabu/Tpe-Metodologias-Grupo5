<?php
class VuelosModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_agenda_viajes;charset=utf8', 'root', '');
        }
    

    function addVuelo ($id_vuelo,$compañia,$aeropuerto_origen,$aeropuerto_destino,$ciudad_origen,$ciudad_destino,$pais_origen,$pais_destino,$fecha_salida,$fecha_llegada,$id) {
        $sentencia = $this->db->prepare('INSERT INTO VUELO (id_vuelo,compañia,aeropuerto_origen,aeropuerto_destino,ciudad_origen,ciudad_destino,pais_origen,pais_destino,fecha_salida,fecha_llegada,id) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
        $sentencia->execute(array($id_vuelo,$compañia,$aeropuerto_origen,$aeropuerto_destino,$ciudad_origen,$ciudad_destino,$pais_origen,$pais_destino,$fecha_salida,$fecha_llegada,$id));
    }

    

   
}
?>