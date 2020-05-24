<?php 
include_once('Views/viajes-View.php');
include_once('Models/viajes-Model.php');

class ViajesController {
    private $view;

    public function __construct() {
        $this->viajesView = new ViajesView ();
    }

    
    public function mostrarMisViajes() {
        $this->viajesView->mostrarMisViajes();
    }

    public function mostrarAgregarViajes() {
        $this->viajesView->mostrarAgregarViajes();
    }

}
?>