<?php 
include_once('Views/vuelos-View.php');
include_once('Models/vuelos-Model.php');

class VuelosController {
    private $vuelosView;
    private $vuelosModel;
    private $viajesModel;

    public function __construct() {
        $this->vuelosView = new VuelosView ();
        $this->vuelosModel = new VuelosModel ();
        $this->viajesModel = new ViajesModel ();
    }

    public function mostrarAgregarVuelo() {
        $this->vuelosView->mostrarAgregarVuelo();
    }

    public function addVueloFormulario() {
        $nro_vuelo = $_POST["nro_vuelo"];
        $compañia = $_POST["compañia"];
        $aeropuerto_origen = $_POST["aeropuerto_origen"];
        $aeropuerto_destino = $_POST["aeropuerto_destino"];
        $ciudad_origen = $_POST["ciudad_origen"];
        $ciudad_destino = $_POST["ciudad_destino"];
        $pais_origen = $_POST["pais_origen"];
        $pais_destino = $_POST["pais_destino"];
        $fecha_salida = $_POST["fecha_salida"];
        $fecha_llegada = $_POST["fecha_llegada"];
        $id = $_POST["idViaje"]; 
        /*
        $viaje = $this->viajesModel->getViajeFechas($fecha_salida,$fechallegada);
        if (isset $viaje)  { //HACER VERIFICACIONES DE EN QUE FECHAS ESTA EL VUELO.
                    $this->vuelosModel->addVuelo($nro_vuelo,$compañia,$aeropuerto_origen,$aeropuerto_destino,$ciudad_origen,$ciudad_destino,$pais_origen,$pais_destino,$fecha_salida,$fecha_llegada,$id);
                    header("Location: " . HOME);
                } else 
                    $this->vuelosView->mostrarError("Las fechas no coinciden"); //MOSTRAR AGREGAR OTRO VUELO
            }
             else
                $this->vuelosView->mostrarError("Faltan campos obligatorios");
                */
    }
    public function addVueloMail () {
        
    }


}
?>