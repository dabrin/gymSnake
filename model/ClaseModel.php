<?php
class ClaseModel {

    protected $db;
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

    public function get_clases(){
        $id_clase=$_SESSION["id_clase"];
        $dia=$_SESSION["dia"];

        $consulta = $this->db->prepare("call sp_listar_clases('".$id_clase ."','".$dia."')");
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

    public function get_clases_adm(){
        $id_clase=$_SESSION["id_Tipo_clase"];
        $consulta = $this->db->prepare("call sp_listar_clases_adm('".$id_clase ."')");
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resulado; 
    }

    public function updateTipoClase(){
        $id_clase=$_POST['id_clase'];
        $nombre=$_POST['nombre'];
        $icono=$_POST['icono'];
        $descripcion=$_POST['descripcion'];
        $consulta = $this->db->prepare("call sp_update_tipo_clase('".$id_clase ."','".$icono."','".$nombre."','".$descripcion."')");
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();

    }


    
    public function updateClase(){
        $id_clase=$_POST['id_clase'];
        $id_tipo_clase=$_POST['id_tipo_clase'];
        $dia=$_POST['dia'];
        $hora_ini=$_POST['hora_ini'];
        $hora_fin=$_POST['hora_fin'];
        $instructor=$_POST['instructor'];
        $cupos=$_POST['cupos'];
        $consulta = $this->db->prepare("call sp_update_clase('".$id_clase."','".$id_tipo_clase."','".$dia."','".$hora_ini."','".$hora_fin."','".$instructor."','".$cupos."')");
     
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();

    }

    public function createTipoClase(){
        $nombre=$_POST['nombre'];
        $icono=$_POST['icono'];
        $descripcion=$_POST['descripcion'];
        $consulta = $this->db->prepare("call sp_insert_tipo_clase('".$icono."','".$nombre."','".$descripcion."')");
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
            
    }

     /* CAMBIAR EL INGRESO DEL TIPO CLASE DE NUMERO A LETRAS*/ 
     public function createClase(){
        $id_tipo_clase=$_POST['id_tipo_clase1'];
        $dia=$_POST['dia'];
        $hora_ini=$_POST['hora_ini'];
        $hora_fin=$_POST['hora_fin'];
        $instructor=$_POST['instructor'];
        $cupos=$_POST['cupos'];
        $consulta = $this->db->prepare("call sp_insertar_clase('".$id_tipo_clase."','".$dia."','".$hora_ini."','".$hora_fin."','".$instructor."','".$cupos."')");
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
            
    }
    

     public function deleteTipoClase(){
        $id_clase=$_POST['id_clase'];
       
        $consulta = $this->db->prepare("call sp_delete_tipo_clase('".$id_clase."')");
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        
        
    }



    public function deleteClase(){
        $id_clase=$_POST['id_clase'];
       
        $consulta = $this->db->prepare("call sp_delete_clase('".$id_clase."')");
        $consulta->execute();
        $resulado = $consulta->fetchAll();
        $consulta->CloseCursor();
        
        
    }

}
