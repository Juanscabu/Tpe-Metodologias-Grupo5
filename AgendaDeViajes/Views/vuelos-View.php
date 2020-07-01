<?php
require_once('libs/Smarty.class.php');

class VuelosView {
  private $smarty;
  
  public function __construct() {
    $this->smarty = new Smarty();
    $this->smarty->assign('basehref', BASE_URL);
}

public function mostrarAgregarVuelo() {
    $this->smarty->assign('titulo',"Agregar Vuelo");
    $this->smarty->display('templates/formAgregarVuelo.tpl');
  }

  public function mostrarMail() {
    $this->smarty->assign('titulo');
    $this->smarty->display('templates/agregarVuelo.tpl');
  }

}

?>