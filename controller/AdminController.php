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
        $data['listClases'] = $items->get_clases();
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


}

?>