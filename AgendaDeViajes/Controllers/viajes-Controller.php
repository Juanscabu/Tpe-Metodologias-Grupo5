<?php 
include_once('Views/viajes-View.php');
include_once('Models/viajes-Model.php');
date_default_timezone_set('GMT');

class ViajesController {
    private $viajesView;
    private $viajesModel;


    public function __construct() {
        $this->viajesView = new ViajesView ();
        $this->viajesModel = new ViajesModel ();
    }

    
    public function mostrarMisViajes() {
        $viajes = $this->viajesModel->getViajes();
        $this->viajesView->mostrarMisViajes($viajes);
    }

    public function mostrarAgregarViajes() {
        $this->viajesView->mostrarAgregarViajes();
    }

    public function mostrarMail() {
        $this->viajesView->mostrarMail();
    }

    public function mostrarAlojamientos($params=null) {
        $id = $params[':ID'];
        $alojamientos = $this->viajesModel->getAlojamientos($id);
        $this->viajesView->mostrarAlojamientos($alojamientos,$id);
    }

    public function addAlojamiento($params=null) {
        $id = $params[':ID'];
        $this->viajesView->mostrarFormulario($id);
    }

    public function cargarMail() {
        $hotel = "Saga Hotel Oslo Central";
        $tipo_habitacion = "Doble";
        /*$cantidad_personas = 2;*/
        /*$cantidad_habitaciones = 1;*/
        $horario_checkin = 7;
        $horario_checkout = 12;
        $servicio = "Todo Incluido";
        $fecha_ingreso = "2020-08-20";
        $fecha_egreso = "2020-08-26";
        $id = 1;
        $this->viajesModel->addAlojamientoFormulario($hotel,$tipo_habitacion,$servicio,$horario_checkin,$horario_checkout,$fecha_ingreso,$fecha_egreso,$id);
        header("Location: " . HOME);
    }

    public function addAlojamientoFormulario() {
        $hotel = $_POST["hotel"];
        $single = $_POST["single"];
        $doble = $_POST["doble"];
        $horario_checkin = 10;
        $horario_checkout = 12;
        $servicio = $_POST["servicio"];
        $cantidad_personas = $_POST["cantidad_personas"];
        $cantidad_habitaciones = $_POST["cantidad_habitaciones"];
        $fecha_ingreso = $_POST["fecha_ingreso"];
        $fecha_egreso = $_POST["fecha_egreso"];
        $id = $_POST["idViaje"];
            if (isset ($hotel) ) { //Los datos demas datos no se revisan porque siempre hay uno por defecto
                if ($fecha_ingreso <= $fecha_egreso)  {
                    $this->viajesModel->addAlojamientoFormulario($hotel,$single,$doble,$servicio,$cantidad_personas,$cantidad_habitaciones,$horario_checkin,$horario_checkout,$fecha_ingreso,$fecha_egreso,$id);
                    header("Location: " . HOME);
                } else 
                    $this->viajesView->mostrarError("Las fechas no coinciden");
            }
             else
                $this->viajesView->mostrarError("Faltan campos obligatorios");
    }

}
?>