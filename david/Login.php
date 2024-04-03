<?php    
   include "conexion.php";
 // usuario esta lo pasa a la pagina de acceso y si no lo encuentra 
//   mosi elstrara un mensaje  o lo puede enviar a alguna pagina que ustedes hagan 

   $login_Usuario  = $_POST["Usuario"];
   $login_Contraseña = $_POST["Contraseña"];

   $sql    = "select * from register_usuario where Usuario = '$login_Usuario' and Contraseña = '$login_Contraseña'  ";
   $result = $base_de_datos->query($sql);


   if ($result->num_rows > 0) {
      header('Location: ../home.html');    
   } else {
      echo "Usuario No registrado! ";       
   }
   


  // header('Location: RegistarPersona.html?user='.$login_usuario);
?>

