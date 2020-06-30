<?php
class ViajesModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_agenda_viajes;charset=utf8', 'root', '');
        }

        function getAlojamientos ($id) {
            $sentencia = $this->db->prepare('SELECT * FROM ALOJAMIENTO WHERE id_viaje = ?');
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }


    function getAlojamiento ($id) {
            $sentencia = $this->db->prepare('SELECT * FROM ALOJAMIENTO WHERE id_alojamiento = ?');
            $sentencia->execute(array($id));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }

        function getViajes () {
           $sentencia = $this->db->prepare('SELECT * FROM VIAJE');
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

    function addAlojamientoFormulario ($hotel,$single,$doble,$servicio,$cantidad_personas,$cantidad_habitaciones,$horario_checkin,$horario_checkout,$fecha_ingreso,$fecha_egreso,$id) {
        $sentencia = $this->db->prepare('INSERT INTO ALOJAMIENTO (hotel,single,doble,servicio,cantidad_personas,cantidad_habitaciones,horario_checkin,horario_checkout,fecha_ingreso,fecha_egreso,id_viaje) VALUES(?,?,?,?,?,?,?,?,?,?,?)');
        $sentencia->execute(array($hotel,$single,$doble,$servicio,$cantidad_personas,$cantidad_habitaciones,$horario_checkin,$horario_checkout,$fecha_ingreso,$fecha_egreso,$id));
    }

    function getViajeFechas($fecha_salida,$fecha_llegada){
        $sentencia = $this->db->prepare('SELECT * FROM VIAJE WHERE fecha_inicio = ? AND fecha_fin = ?');
        $sentencia->execute(array($fecha_salida,$fecha_llegada));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}
?>