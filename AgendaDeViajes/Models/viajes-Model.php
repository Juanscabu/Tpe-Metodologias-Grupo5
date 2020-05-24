<?php
class ViajesModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=...nombreDelaBase...;charset=utf8', 'root', '');
        }

    function getViajes() {
            $sentencia = $this->db->prepare('SELECT * FROM  ORDER BY  asc');
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }


    function getViaje ($id) {
            $sentencia = $this->db->prepare('SELECT * ');
            $sentencia->execute(array($id));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
    function addViaje ($dato1,$dato2) { //poner nombre a los datos en base a los nombres que tengan los atributos en la base 
        $sentencia = $this->db->prepare('INSERT INTO ) VALUES(?,?)');
        $sentencia->execute(array($dato1,$dato2));
    }

    function  modificaViajeEditado ($dato1,$dato2,$id) {
        $sentencia = $this->db->prepare('UPDATE SET dato1=?,dato2=? WHERE id_viaje = ?' );
        $sentencia->execute(array($dato1,$dato2,$id));
    }

      
    public function borrarViaje($id) {
        $sentencia = $this->db->prepare('DELETE FROM  WHERE viajes.id_viaje = ?' );
        $sentencia->execute(array($id));
        }

   
}
?>