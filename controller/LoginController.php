<?php
class LoginController{
  function __construct() {
        $this->view = new View();
    }

    function defaultAction() {
        $this->view->show("LoginView.php");
    }

    function login() { 
        require 'model/AdminModel.php';
        $items = new AdminModel();
        if(null!=($items->login())){
            $data='Cool';
        }else {$data='MIERDA';}
        $this->view->show("perfilView.php",$data);
    }
    
    function notFound() {
        $this->view->show("notFoundView.php");
    }
}