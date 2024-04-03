<?php
$servername = "localhost";
$username = "root";
$password = "RIVERDALE";
// debes cambiar el nombre de la base de datos 
$dbname = "registro";

// Create connection
$base_de_datos = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($base_de_datos->connect_error) {
  die("Conexión a la base de datos fallida: " . $base_de_datos->connect_error);
} 



?>