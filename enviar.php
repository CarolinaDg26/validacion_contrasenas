<?php
  include 'conexion.php';

  $nombre = addslashes($_POST['nombre']);
  $apellido = addslashes($_POST['apellido']);
  $fecha = $_POST['fecha'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contra'];
  $mascotas = $_POST['mascot'];
  $ip = $_SERVER['REMOTE_ADDR'];
    
  $insertar = "INSERT INTO datos (filanombre, filaapellido,filamascota,resultado,numerogenerado,email, contrasena, ip_usuario ) VALUES ('$nombre','$apellido', '$mascotas', '$fecha', '$telefono', '$correo', '$contrasena', '$ip')";

  $query = mysqli_query($conectar,$insertar);
  if($query){
    echo '
    <script>
    alert("SI SE GUARDARON LOS DATOS CORRECTAMENTE")
    location.href="index.php"
    </script>';
  }
  else{
    echo '
    <script>
    alert("NO SE GUARDARON LOS DATOS CORRECTAMENTE");
    window.history.back();
    </script> ';
  }

?>


>