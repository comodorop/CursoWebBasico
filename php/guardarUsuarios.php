<?php
include_once '../DAOConeccion/coneccion.php';
$cn = new Coneccion();
$cn->conectarse();
$nombre = "";
$usuario = "";
$password = "";
$nombre = $_POST["txtNombre"];
$usuario = $_POST["txtUsuario"];
$password = $_POST["txtPassword"];
$sql = "INSERT INTO usuario (usuario,pass,nombre) VALUES ('$usuario', '$password', '$nombre')";
$datos = mysql_query($sql);
$cn->cerrarBd();
if ($datos == false) {
    echo mysql_error();
} else {
    echo 'Informacion guardada en la bd.';
    echo "El nombre es " . $nombre;
    echo '<br/>';
    echo 'El usuario es :' . $usuario;
    echo '<br>';
    echo 'El pass es: ' . $password;
}
?>