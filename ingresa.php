<?php
//Datos de conexión a la base de datos
$hostname = 'localhost';
$database = 'aorrego';
$username = 'root';
$password = '';

$rut=$_REQUEST['rut'];
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$sexo=$_REQUEST['sexo'];

echo $rut;
echo "<br/>";
echo $nombre;
echo "<br/>";
echo $apellido;
echo "<br/>";
echo $sexo;
echo "<br/>";
?>