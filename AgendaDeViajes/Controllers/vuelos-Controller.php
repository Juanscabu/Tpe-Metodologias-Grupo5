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

    public function addVuelo () {

    }

    public function mostrarMailVuelo () {
        $this->vuelosView->mostrarMail();

    }

    public function cargarMailVuelo () {
        $nro_vuelo = 6548;
        $compañia = "Abrianca";
        $puerta = 1;
        $asiento = 11;
        $aeropuerto_origen = "BUE";
        $aeropuerto_destino = "AUZ";
        $ciudad_origen = "Banderville City";
        $ciudad_destino = "Ullathorpe City";
        $pais_origen = "Banderville";
        $pais_destino = "Ullathorpe City";
        $fecha_salida = "2020-04-26";
        $fecha_llegada = "2020-04-26";
        $reserva = 1;
        $tiempo_escalas = 2;
        $Agent_Id = 456;
        $cant_pasajeros = 1;
        $cant_valijas = 2;
        $peso_maximo = 25;
        $this->viajesModel->addVueloFormulario($nro_vuelo, $compañia, $puerta, $asiento, $aeropuerto_origen, $aeropuerto_destino, $ciudad_origen,
                                                $ciudad_destino, $pais_origen, $pais_destino, $fecha_salida, $fecha_llegada, $reserva,
                                                $tiempo_escalas, $Agent_Id, $cant_pasajeros, $cant_valijas, $peso_maximo);
        header("Location: " . HOME);
    }

}
?>