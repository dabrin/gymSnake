<?php

class IndexController {

    function __construct() {
        $this->view = new View();
    }

    function defaultAction() {
        require 'model/ClaseModel.php';
        $items = new ClaseModel();
        $data['listClases'] = $items->get_clases();
        
        $this->view->show("indexView.php",$data);

    }
    
    function notFound() {
        $this->view->show("notFoundView.php");
    }
}
