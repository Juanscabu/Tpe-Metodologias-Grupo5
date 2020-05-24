<?php
    require_once('Router.php');
    require_once('Controllers/home-Controller.php');
    require_once('Controllers/viajes-Controller.php');

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();
   
    $r->addRoute("mostrarMisViajes", "GET", "ViajesController", "mostrarMisViajes");
    $r->addRoute("mostrarAgregarViajes", "GET", "ViajesController", "mostrarAgregarViajes");
    
    $r->setDefaultRoute("HomeController", "mostrarHome");
    $r->route($_GET["action"], $_SERVER['REQUEST_METHOD']); 

?>
