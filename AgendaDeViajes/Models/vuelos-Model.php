<?php
class VuelosModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_agenda_viajes;charset=utf8', 'root', '');
        }
    

    function addVuelo ($nro_vuelo,$compañia,$aeropuerto_origen,$aeropuerto_destino,$ciudad_origen,$ciudad_destino,$pais_origen,$pais_destino,$fecha_salida,$fecha_llegada,$id) {
        $sentencia = $this->db->prepare('INSERT INTO VUELO (nro_vuelo,compañia,aeropuerto_origen,aeropuerto_destino,ciudad_origen,ciudad_destino,pais_origen,pais_destino,fecha_salida,fecha_llegada,id) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
        $sentencia->execute(array($nro_Vuelo,$compañia,$aeropuerto_origen,$aeropuerto_destino,$ciudad_origen,$ciudad_destino,$pais_origen,$pais_destino,$fecha_salida,$fecha_llegada,$id));
    }

    function getVuelos ($id) {
        $sentencia = $this->db->prepare('SELECT * FROM VUELO WHERE id_viaje = ?');
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }


function getvuelo ($id) {
        $sentencia = $this->db->prepare('SELECT * FROM VUELO WHERE id_vuelo = ?');
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    

   
}
?>