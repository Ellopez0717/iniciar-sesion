<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "Informatica";
$conecta = mysqli_connect($servidor,$usuario,$password,$base);
if ($conecta->connect_error) {
  die('Error al conecta la Base de datos '.$conecta->connect_error);
}
 ?>
