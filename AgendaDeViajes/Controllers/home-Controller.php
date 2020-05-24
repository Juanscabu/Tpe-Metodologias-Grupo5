<?php 
include_once('Views/home-View.php');

class HomeController {
    private $homeView;
    

    public function __construct() {
        $this->homeView = new HomeView ();
    }

    
    public function mostrarHome() {
        $this->homeView->mostrarHome();
    }

}
?>