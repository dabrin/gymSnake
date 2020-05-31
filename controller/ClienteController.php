<?php

class ClienteController {

    function __construct() {
        $this->view = new View();
    }

    function defaultAction() {
    }
    
    function notFound() {
        $this->view->show("notFoundView.php");
    }

    function clienteView(){
        require 'model/ClienteModel.php';
        $items = new ClienteModel();
        $data['listRegisterClient'] = $items->get_clients();
        $this->view->show("clienteView.php",$data);
    }

    
    function clienteRegister(){
        require 'model/ClienteModel.php';
        $items = new ClienteModel();
        $items->put_client();
        $data['listRegisterClient'] = $items->get_clients();
        $this->view->show("clienteView.php",$data);

    }

    


}
