<?php

  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $clave = $_POST["clave"];

  $mysqli = new mysqli("localhost", "root", "", "BD");
  if ($mysqli->connect_errno) {
      echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

  $mysqli->query("INSERT INTO `usuarios` (`id`, `nombres`, `correo`, `clave`) VALUES (NULL, '$nombre', '$correo', '$clave');");


  header("location:formuario.php");

?>