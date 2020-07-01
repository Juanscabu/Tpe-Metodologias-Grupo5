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

  
  public function mostrarVuelos($nro_vuelo, $compañia, $puerta, $asiento, $aeropuerto_origen, $aeropuerto_destino, $ciudad_origen, $ciudad_destino, $pais_origen, $pais_destino, $fecha_salida, $fecha_llegada, $reserva, $tiempo_escalas, $Agent_Id, $cant_pasajeros, $cant_valijas, $peso_maximo, $id) {
    $this->smarty->assign('titulo',"Vuelos");
    $this->smarty->assign('nro_vuelo',$nro_vuelo);
    $this->smarty->assign('compañia',$compañia);
    $this->smarty->assign('puerta',$puerta);
    $this->smarty->assign('asiento',$asiento);
    $this->smarty->assign('aeropuerto_origen',$aeropuerto_origen);
    $this->smarty->assign('aeropuerto_destino',$aeropuerto_destino);
    $this->smarty->assign('ciudad_origen',$ciudad_origen);
    $this->smarty->assign('$ciudad_destino',$ciudad_destino);
    $this->smarty->assign('pais_origen',$pais_origen);
    $this->smarty->assign('pais_destino',$pais_destino);
    $this->smarty->assign('fecha_salida',$fecha_salida);
    $this->smarty->assign('fecha_llegada',$fecha_llegada);
    $this->smarty->assign('reserva',$reserva);
    $this->smarty->assign('tiempo_escalas',$tiempo_escalas);
    $this->smarty->assign('Agent_Id',$Agent_Id);
    $this->smarty->assign('cant_pasajeros',$cant_pasajeros);
    $this->smarty->assign('cant_valijas',$cant_valijas);
    $this->smarty->assign('peso_maximo',$peso_maximo);
    $this->smarty->assign('id',$id);

    $this->smarty->display('templates/agregarVuelo.tpl');
  }

}

?>