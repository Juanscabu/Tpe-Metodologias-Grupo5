<?php
require_once('libs/Smarty.class.php');

class ViajesView {
  private $smarty;
  
  public function __construct() {
    $this->smarty = new Smarty();
    $this->smarty->assign('basehref', BASE_URL);
}

  public function mostrarMisViajes($viajes) {
    $this->smarty->assign('titulo',"Mis Viajes");
    $this->smarty->assign('viajes',$viajes);
    $this->smarty->display('templates/misViajes.tpl');
  }

  public function mostrarAlojamientos($alojamientos,$id) {
    $this->smarty->assign('titulo',"Alojamientos");
    $this->smarty->assign('id',$id);
    $this->smarty->assign('alojamientos',$alojamientos);
    $this->smarty->display('templates/alojamientos.tpl');
  }

  public function mostrarformulario($id) {
    $this->smarty->assign('titulo',"Formulario");
    $this->smarty->assign('id',$id);
    $this->smarty->display('templates/formAgregarAlojamiento.tpl');
  }

  public function mostrarAgregarViajes() {
    $this->smarty->assign('titulo',"Agregar Viajes");
    $this->smarty->display('templates/agregarViajes.tpl');
  }

  public function mostrarMail() {
    $this->smarty->assign('titulo');
    $this->smarty->display('templates/mail.tpl');
  }

  public function mostrarError($msgError) {
    echo "<h1>ERROR!</h1>";
    echo "<h2>{$msgError}</h2>";
  }

  public function mostrarFormViajeVuelo($id) {
    $this->smarty->assign('titulo',"Agregar Viaje y Vuelo");
    $this->smarty->display('templates/formAgregarViajeVuelo.tpl');
  }
}

?>