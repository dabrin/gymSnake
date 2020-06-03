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

    function data_clientView(){
        $_SESSION['id_clase']=$_POST['id_clase'];
       

    }
    function clienteView(){
        require 'model/ClaseModel.php';
        $items = new ClaseModel();
        
        $data['listClases'] = $items->get_clases();
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
