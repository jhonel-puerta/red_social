<?php

class conexion{
    
    function conectar(){
        try{
            $cnn = mysqli_connect("localhost","root","","red_social_principal");      
        }catch(Exception $e){
            echo ("error de conexion " .  $e);
        }
    }
}

$objConexion = new conexion();

$objConexion->conectar();
?>