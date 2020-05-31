<?php
class AdminModel {

    protected $db;
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    public function login(){
        $user_ = $_POST["user"];
        $pass_ = $_POST["pass"];
        $consulta = $this->db->prepare("call login('".$user_ ."','".$pass_."')");
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }

}
