<?php
    require_once('Router.php');
    require_once('Controllers/home-Controller.php');
    require_once('Controllers/viajes-Controller.php');
    require_once('Controllers/vuelos-Controller.php');

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("HOME", BASE_URL . 'mostrarMisViajes');
    $r = new Router();
   
    $r->addRoute("mostrarMisViajes", "GET", "ViajesController", "mostrarMisViajes");
    $r->addRoute("mostrarAgregarVuelo", "GET", "VuelosController", "mostrarAgregarVuelo");
    $r->addRoute("addAlojamientoFormulario", "POST", "ViajesController", "addAlojamientoFormulario");
    $r->addRoute("addAlojamiento/:ID", "GET", "ViajesController", "addAlojamiento");
    $r->addRoute("mostrarAlojamientos/:ID", "GET", "ViajesController", "mostrarAlojamientos");
    $r->addRoute("mostrarMail", "GET", "ViajesController", "mostrarMail");
    $r->addRoute("cargarMail", "GET", "ViajesController", "cargarMail");
    $r->addRoute("addVueloFormulario", "POST", "VuelosController", "addVueloFormulario");
 


  
  
    $r->setDefaultRoute("HomeController", "mostrarHome");
    $r->route($_GET["action"], $_SERVER['REQUEST_METHOD']); 

?>
