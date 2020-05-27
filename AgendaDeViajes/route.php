<?php
    require_once('Router.php');
    require_once('Controllers/home-Controller.php');
    require_once('Controllers/viajes-Controller.php');

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("HOME", BASE_URL . 'mostrarMisViajes');
    $r = new Router();
   
    $r->addRoute("mostrarMisViajes", "GET", "ViajesController", "mostrarMisViajes");
    $r->addRoute("mostrarAgregarViajes", "GET", "ViajesController", "mostrarAgregarViajes");
    $r->addRoute("addAlojamientoFormulario", "POST", "ViajesController", "addAlojamientoFormulario");
    $r->addRoute("addAlojamiento/:ID", "GET", "ViajesController", "addAlojamiento");
    $r->addRoute("mostrarAlojamientos/:ID", "GET", "ViajesController", "mostrarAlojamientos");
    $r->addRoute("addAlojamientoMail", "GET", "ViajesController", "mostrarMail");
    $r->addRoute("addReservaMail", "POST", "ViajesController", "cargarMail");
    

    $r->setDefaultRoute("HomeController", "mostrarHome");
    $r->route($_GET["action"], $_SERVER['REQUEST_METHOD']); 

?>
