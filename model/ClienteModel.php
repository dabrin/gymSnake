<?php
class ClienteModel {

    protected $db;
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }


    public function get_clients(){
        $id_clase = $_SESSION["id_clase"];
        $consulta = $this->db->prepare("call sp_listar_persona_clase('".$id_clase."')");
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado;
    }


   public function delete_client(){
        $id_cliente = $_POST["id_cliente"];
        $consulta = $this->db->prepare("call sp_borrar_cliente('".$id_cliente."')");
        $consulta->execute();
        $consulta->CloseCursor();
        
       
}


     public function put_client() {
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $id_clase = $_POST["id_clase"];
        $consulta = $this->db->prepare("call sp_ingresar_clientes(" . "'" . $nombre . "','" . $telefono ."','".$id_clase. "')");
        $consulta->execute();
        $consulta->closeCursor();
         
    }


}


