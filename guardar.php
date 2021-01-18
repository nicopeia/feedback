<?php 
require 'conexion.php';
 

if(isset($nombre) && isset($email) &&   isset($mensaje) ){  

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    if(empty( $nombre ) || empty($email ) || empty($mensaje)){
        echo ' <div class="alert alert-danger" role="alert">
        * Debe completar todos los campos.
      </div> ';
    }else{
        if(strlen($nombre)> 2 && strlen($nombre)<30 && preg_match('/^[^0-9][a-zA-Z0-9\_\.]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"])){
            
            
            $consulta = $conexion->prepare("INSERT INTO clientes(nombre, email, mensaje)VALUES(:nombre, :email, :mensaje)");

            $consulta->bindParam(':nombre', $nombre);
            $consulta->bindParam(':email', $email);
            $consulta->bindParam(':mensaje', $mensaje);
            
            
            
            
            $consulta->execute();
          
    
      
          
        }

}
}
?>