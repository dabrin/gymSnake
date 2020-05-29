<?php

class MapController {

    function __construct() {
        $this->view = new View();
    }

    function defaultAction() {
        $this->view->show("MapView.php");
    }
    
    function notFound() {
        $this->view->show("notFoundView.php");
    }
}
