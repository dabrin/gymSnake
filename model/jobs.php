<?php


   $mysqli = new mysqli("163.178.107.10", "laboratorios", "UCRSA.118", "proyectosnakemoc");


        
        $mysqli->query("call sp_borrar_cliente('43')");
      
       
    

