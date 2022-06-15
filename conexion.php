<?php   
$server = "localhost"; //Aquí puede ser la IP intercambiada por la palabra "localhost"
$user = "root"; //usuario por lo general siempre es root en servidores gratuitos
$pass = ""; //Contraseña del servidor web
$db = "vf"; //nombre de tu base de datos
 
// conexión con la base de datos
$connect = new mysqli($server, $user, $pass, $db);
// verificar conexion
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Conectado satisfactoriamente";
}
?>
