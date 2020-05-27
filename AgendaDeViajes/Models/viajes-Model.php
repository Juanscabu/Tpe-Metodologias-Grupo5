<?php
class ViajesModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_agenda_viajes;charset=utf8', 'root', '');
        }

    function getAlojamientos() {
            $sentencia = $this->db->prepare('SELECT * FROM ALOJAMIENTO');
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }


    function getAlojamiento ($id) {
            $sentencia = $this->db->prepare('SELECT * FROM ALOJAMIENTO WHERE id_alojamiento = ?');
            $sentencia->execute(array($id));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }

    function addAlojamientoFormulario ($hotel,$tipo_habitacion,$servicio,$horario_checkin,$horario_checkout,$fecha_ingreso,$fecha_egreso) {
        $sentencia = $this->db->prepare('INSERT INTO ALOJAMIENTO (hotel,tipo_habitacion,servicio,horario_checkin,horario_checkout,fecha_ingreso,fecha_egreso) VALUES(?,?,?,?,?,?,?)');
        $sentencia->execute(array($hotel,$tipo_habitacion,$servicio,$horario_checkin,$horario_checkout,$fecha_ingreso,$fecha_egreso));
    }

     
    public function borrarAlojamiento($id) {
        $sentencia = $this->db->prepare('DELETE * FROM ALOJAMIENTO WHERE ALOJAMIENTO.id_alojameinto = ?' );
        $sentencia->execute(array($id));
        }

   
}
?>