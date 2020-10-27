<?php 
$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "informatica";
$conecta = mysqli_connect($servidor,$usuario,$password,$base);
if ($conecta->connect_error) {
	die('Error al conectar la base de datos '.$conecta->connect_error);
}
?>