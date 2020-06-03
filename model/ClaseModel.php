<?php
class ClaseModel {

    protected $db;
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    public function get_clases(){
        $id_clase=$_SESSION["id_clase"];

        $consulta = $this->db->prepare("call sp_listar_clases('".$id_clase ."')");
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }

     public function get_tipo_clases(){
        $consulta = $this->db->prepare("call sp_listar_tipo_clases()");
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }

}
