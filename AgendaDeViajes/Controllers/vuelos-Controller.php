<?php 
include_once('Views/vuelos-View.php');
include_once('Controllers/viajes-controller.php');
include_once('Models/viajes-Model.php');
include_once('Models/vuelos-Model.php');

class VuelosController {
    private $viajesController;
    private $vuelosView;
    private $vuelosModel;
    private $viajesModel;

    public function __construct() {
        $this->viajesController = new ViajesController ();
        $this->vuelosView = new VuelosView ();
        $this->vuelosModel = new VuelosModel ();
        $this->viajesModel = new ViajesModel ();
    }

    public function mostrarAgregarVuelo() {
        $this->vuelosView->mostrarAgregarVuelo();
    }

    public function mostrarVuelos($params=null) {
        $id = $params[':ID'];
        $vuelos = $this->vuelosModel->getVuelos($id);
        $this->vuelosView->mostrarVuelos($vuelos);
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
        if (sizeof($viaje)>0)  { //HACER VERIFICACIONES DE EN QUE FECHAS ESTA EL VUELO.
            $miViaje = $viaje[0];
            $id_viaje = (int)$miViaje->id_viaje;
                $this->vuelosModel->addVuelo($nro_vuelo,$compañia,$aeropuerto_origen,$aeropuerto_destino,$ciudad_origen,$ciudad_destino,$pais_origen,$pais_destino,$fecha_salida,$hora_salida,$fecha_llegada,$hora_llegada,$id_viaje);
                header("Location: " . HOME);
            } else{
                $this->viajesController->agregarViajeVuelo();
            }
    }

    public function addViajeVuelo(){
        $nombre = $_POST["nombre_viaje"];
        $origen = $_POST["origen"];
        $destino = $_POST["destino"];
        $fecha_inicio = $_POST["fecha_inicio"];
        $fecha_fin = $_POST["fecha_fin"];
        $this->viajesModel->addViaje($nombre,$origen,$destino,$fecha_inicio,$fecha_fin);
        $this->addVueloFormulario();
        header("Location: " . HOME);
    }

    public function addVueloMail () {
        
    }

}
?>