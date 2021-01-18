<?php 


if(isset($_POST['submit'])){
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];


  if(isset($_POST['submit'])){


    if(empty( $nombre ) || empty($email ) || empty($mensaje)){
        echo ' <div class="alert alert-danger" role="alert">
        * Debe completar todos los campos.
      </div> ';
    }
    else{
        if(!empty($nombre ) && !empty($email ) &&  !empty($mensaje)){ 
        if(!empty($email) || !empty($nombre)){ 
        if(strlen($nombre)> 2 && strlen($nombre)<30 && preg_match('/^[^0-9][a-zA-Z0-9\_\.]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"])){
        
        echo'<div id="alerta" class="alert alert-success " role="alert" >
        Mensaje enviado con exito. Un representante se pondra en contacto a la brevedad!
       </div>'; 

           
    }else{
        echo'<div id="alerta" class="alert alert-danger " role="alert" >
        algunos de los datos ingresados son incorrectos.Verifique y vuelva a intentarlo!
       </div>'; 
    }
 
    }
}
}


   
}
}






?>