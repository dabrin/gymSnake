<?php
class RegisterController{
  function __construct() {
        $this->view = new View();
    }

    function defaultAction() {
        $this->view->show("RegisterView.php");
    }
    
    function notFound() {
        $this->view->show("notFoundView.php");
    }
}