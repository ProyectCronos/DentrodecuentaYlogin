<?php
#isset significa q la variable que se recibe esta vacia, entonces sale 
if (  !isset($_POST["Nombre"]) || !isset($_POST["Correo_Electronico"]) || !isset($_POST["Usuario"]) || !isset($_POST["Contraseña"]) ) exit();

include_once "conexion.php";

$Nombre    = $_POST["Nombre"];
$Correo_Electronico = $_POST["Correo_Electronico"];
$Usuario      = $_POST["Usuario"];
$Contraseña    = $_POST["Contraseña"];


$sentencia = $base_de_datos->prepare("INSERT INTO register_usuario(Nombre, Correo_Electronico, Usuario, Contraseña) VALUES (?, ?, ?, ?);");
$resultado = $sentencia->bind_param('sssd',$Nombre, $Correo_Electronico, $Usuario, $Contraseña); 
$sentencia->execute();
# Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === TRUE) 
   header('Location: Login.html');
else
  echo "Algo salió mal. Por favor verifica que la tabla! ";
?>