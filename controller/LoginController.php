<?php
class LoginController{
  function __construct() {
        $this->view = new View();
    }

    function defaultAction() {
        $this->view->show("LoginView.php");
    }
    
    function notFound() {
        $this->view->show("notFoundView.php");
    }
}