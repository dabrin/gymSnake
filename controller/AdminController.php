<?php

class AdminController
{

    function __construct() {
        $this->view = new View();
    }

    function defaultAction() {
    }
    
    function notFound() {
        $this->view->show("notFoundView.php");
    }


    function data_clientClassView(){
        $_SESSION['id_clase']=$_POST['id_clase'];
        $_SESSION['id_cliente']=$_POST['id_cliente'];
    }

    function updateTipoClase(){
        require 'model/ClaseModel.php';
        $items = new ClaseModel(); 
        $items->updateTipoClase();
       
    }

     function createTipoClase(){
        require 'model/ClaseModel.php';
        $items = new ClaseModel(); 
        $items->createTipoClase();
       
    }

    function deleteTipoClase(){
        require 'model/ClaseModel.php';
        $items = new ClaseModel(); 
        $items->deleteTipoClase();
       
    }


    function delete_client(){
        require 'model/ClienteModel.php';
        $items = new ClienteModel(); 
        $items->delete_client();
        //$data['listClientes'] = $items->delete_client();
        //$this->view->show("clientClassView.php",$data);
        }
    function clientClassView(){
        require 'model/ClienteModel.php';
        $items = new ClienteModel(); 
        $data['listClientes'] = $items->get_clients();
        $this->view->show("clientClassView.php",$data);
    }
    function showClass(){
        require 'model/ClaseModel.php';
        $items = new ClaseModel();    
        $data['listClases'] = $items->get_tipo_clases();
        $this->view->show("ListClientView.php",$data);
    }


    function data_claseView(){
        $_SESSION['id_clase']=$_POST['id_clase'];

    }

    function claseView(){
        require 'model/ClaseModel.php';
        $items = new ClaseModel(); 
        $data['listClases'] = $items->get_clases_adm();
        $this->view->show("DetailListView.php",$data);
    }

    function data_detalleView(){
        $_SESSION['id_clase']=$_POST['id_clase'];
    }

    function detalleView(){
        require 'model/ClienteModel.php';
        $items = new ClienteModel(); 
        $data['listClases'] = $items->get_clients();
    }

    function close(){
        unset($_SESSION['nombre']);
        $this->view->show("indexView.php");
    }




}

?>