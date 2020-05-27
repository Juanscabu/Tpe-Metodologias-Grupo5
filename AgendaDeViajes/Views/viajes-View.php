<?php
require_once('libs/Smarty.class.php');

class ViajesView {
  private $smarty;
  
  public function __construct() {
    $this->smarty = new Smarty();
    $this->smarty->assign('basehref', BASE_URL);
}

  public function mostrarMisViajes() {
    $this->smarty->assign('titulo',"Mis Viajes");
    $this->smarty->display('templates/misViajes.tpl');
  }

  public function mostrarAgregarViajes() {
    $this->smarty->assign('titulo',"Agregar Viajes");
    $this->smarty->display('templates/agregarViajes.tpl');
  }

  public function mostrarError($msgError) {
    echo "<h1>ERROR!</h1>";
    echo "<h2>{$msgError}</h2>";
}

}

?>