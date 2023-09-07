<!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
  <style>
          table{
              border: 1px gray solid;
              width:900px;
              margin: auto;
              margin-right:455px;
              text-align: center;
              font-family: helvetica;
          }
          table th{
              background-color:#ffbc69;
              color: black;
          }
          table td{
              width: 180px;
              border: 1px gray solid
          }
      </style>
      <table>
          <tr>
              <th>ID</th>
              <th>fila Nombre</th>
              <th>Fila Apellido</th>
              <th>fila mascotas</th>
              <th>Años</th>
              <th>Telefono</th>
              <th>email</th>
              <th>Contraseña</th>
              <th>Ip</th>

          </tr>
          <tr>
          <?php
  include "conexion.php";

  $todos_usuarios = "SELECT * FROM datos ORDER BY id ASC";

  $resultado = mysqli_query($conectar, $todos_usuarios);
      while($fila = mysqli_fetch_assoc($resultado)){
          ?>
          <tr>
          <td><?php echo $fila["id"]?></td>
          <td><?php echo $fila["filanombre"]?></td>
          <td><?php echo $fila["filaapellido"]?></td>
          <td><?php echo $fila["filamascota"]?></td>
          <td><?php echo $fila["resultado"]?></td>
          <td><?php echo $fila["numerogenerado"]?></td>
          <td><?php echo $fila["email"]?></td>
          <td><?php echo $fila["contrasena"]?></td>
          <td><?php echo $fila["ip_usuario"]?></td>

          </tr>
          <?php
      }
  ?>
          </tr>
      </table>
  </body>
  </html>