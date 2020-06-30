<?php 
include_once('Views/vuelos-View.php');
include_once('Models/viajes-Model.php');
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
        $hora_salida = $_POST["hora_salida"];
        $fecha_llegada = $_POST["fecha_llegada"];
        $hora_llegada = $_POST["hora_llegada"];

        $viaje = $this->viajesModel->getViajeFechas($fecha_salida,$fecha_llegada);
        if (!is_null($viaje))  { //HACER VERIFICACIONES DE EN QUE FECHAS ESTA EL VUELO.
            $miViaje = $viaje[0];
            $id_viaje = (int)$miViaje->id_viaje;
                $this->vuelosModel->addVuelo($nro_vuelo,$compañia,$aeropuerto_origen,$aeropuerto_destino,$ciudad_origen,$ciudad_destino,$pais_origen,$pais_destino,$fecha_salida,$hora_salida,$fecha_llegada,$hora_llegada,$id_viaje);
                header("Location: " . HOME);
            } //else
                // $this->vuelosView->mostrarError("Las fechas no coinciden"); //MOSTRAR AGREGAR OTRO VUELO
    }

    public function addVueloMail () {
        
    }

}
?>