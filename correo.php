<?php 
    
    $destino= "n.peianovich@gmail.com";
     $nombre = $_POST["nombre"];
     $email = $_POST["email"];
     $mensaje = $_POST["mensaje"];
     $mail= mail($destino,$email, $nombre, $mensaje);
   




 ?>