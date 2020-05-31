<?php
class ClaseModel {

    protected $db;
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    public function get_clases(){
        $consulta = $this->db->prepare('call sp_listar_clases()');
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }

}
