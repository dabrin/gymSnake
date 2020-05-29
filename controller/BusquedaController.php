<?php
class BusquedaController{
  function __construct() {
        $this->view = new View();
    }

    function defaultAction() {
        $this->view->show("BusquedaView.php");
    }
    
    function notFound() {
        $this->view->show("notFoundView.php");
    }
}