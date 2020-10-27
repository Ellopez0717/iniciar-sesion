<?php
  session_start();
  include 'conecta.php';
  $usuario = $_POST['usuario'];
  $password = md5($_POST['password']);
  // consulta para extraer los datos de la base de datos de el alumno
  $consulta = "SELECT * FROM Alumnos WHERE Usuario = '$usuario' and Password = '$password'";
  if ($resultado = $conecta->query($consulta)) {
    while ($row = $resultado->fetch_array()) {
        $userok = $row['Usuario'];
        $passwordok = $row['Password'];
    }
    $resultado->close();
  }
  $conecta->close();
  if (isset($usuario) && isset($password)) {
     if ($usuario == $userok && $password == $passwordok) {
         $_SESSION['login']= TRUE;
         $_SESSION['Usuario']= $usuario;
         header("location:../principal.php");
     }
      else {
        header("location:../Aplicacion1.php");
      }
    }     else{
       header("location:../Aplicacion1.php");
  }
 ?>
