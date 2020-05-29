<?php
class PerfilController{
  function __construct() {
        $this->view = new View();
    }

    function defaultAction() {
        $this->view->show("PerfilView.php");
    }
    
    function notFound() {
        $this->view->show("notFoundView.php");
    }
}