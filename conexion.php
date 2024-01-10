<?php
$host="contrasenas-seguras.aaaimx.org";
$user="u925603734_admin_contras";
$contrasena="aA12345678";
$bd="u925603734_contra_seguras";

$conectar=mysqli_connect($host, $user, $contrasena, $bd);

if(!$conectar){
    echo "No se pudo conectar a la base de datos";
}
?>