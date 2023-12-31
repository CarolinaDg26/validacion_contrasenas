<?php
require 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de contraseñas</title>
    <link rel="stylesheet" href="estilo.css">
    <script src='https://kit.fontawesome.com/e3805e7bb5.js' crossorigin='anonymous'></script>
</head>
<body onload="generarNumero()" class="ancho" >
<form class="fondo"action="enviar.php" id="forml" name="forml" method="POST">

    <div class="contenedor1">
        <h1>De acuerdo con la información presentada, proporciona tu edad, un correo electrónico ficticio y una contraseña:</h1>
    </div>
    <div class="prueba">
     <div class="imguser">
     <i class="fa-regular fa-user user"></i> <br>
     </div>

     <div class="column">
     <p>Nombre: </p><input class="campos" text="" type="text" id="fila-nombres"name="nombre"/>
     </div>

     <div class="column">
        <p>Apellido: </p><input text="" type="text" id="fila-apellidos" name="apellido"/>
    </div>
    </div>

    <br><br><br>

    <div class="prueba1">
     <div class="imguser2">
     <i class="fa-solid fa-paw user"></i>
     </div>
     <div class="column2">
        <p>Nombres de tu mascota:</p>
        <input text="" type="text" id="fila-mascotas" name="mascot"/>
     </div>
    </div>

    <div style="clear: both;"></div>  <!--Clear float para evitar problemas de altura -->

    <br>

    <div class="prueba2">
    <div class="imguser3">
    <i class="fa-solid fa-calendar-days user"></i>
    </div>
     <div class="column3">
        <!--h1>Edad</!h1-->
        <label  for="fecha-nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha-nacimiento">
        <input class="btn_enviar" onclick="calcularEdad()" value="Guardar" type="button"/>
        <input type="text" id="resultado" name="fecha" readonly="true"/>
     </div>
    </div>

    <br><br>

    <div class="prueba3">
     <div class="imguser4">
       <i class="fa-solid fa-phone-volume user"></i>
     </div>

     <div class="column4">
        <!--h1>Números de Teléfono</!--h1>
        <label for="lada">Selecciona una Lada:</label>
        <select id="lada">
            <option value="999">999</option>
            <option value="988">988</option>
            Agrega más opciones de ladas según sea necesario
        </select
        <button-- onclick="generarNumero()">Generar Número</button-->
        <p>Número telefónico:</p><input type="text" id="numero-generado" name="telefono"/>
     </div>
    </div>

    <br><br><br>
    <div class="prueba4">
     <div class="imguser5">
     <i class="fa-solid fa-envelopes-bulk user"></i>
     </div>
     <div class="contenido">
        <label for="correo">Ingresa un correo electrónico Ficticio</label><br>
        <input type="text" id="email" placeholder="Correo Electrónico" size="30" name="correo">
        <br>
        <label for="contrasena">Ingresa una Contraseña:</label><br>
        <input type="text" id="contrasena" placeholder="Contraseña" size="30" name="contra"><br>
        <input class="btn_enviar" type="button" value="Enviar" onclick="validar_formulario()"/>
      </div>
     </div>
    <br><br><br><br><br><br><br>

    <div class="contenedor2">
        <img class="imge" src="./imagenes/maia.png" alt="">
    </div>


</form>
<!--Todas las funciones-->
    <script>
        // Función para cargar y mostrar un elemento aleatorio de un archivo CSV
        function mostrarElementoAleatorio(url, containerId) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            var csvData = xhr.responseText;
            var rows = csvData.split('\n');
            var randomRowIndex = Math.floor(Math.random() * (rows.length - 1)) + 1; // Selecciona una fila aleatoria (excluyendo encabezados)

            var cells = rows[randomRowIndex].split(',');

            // Crea un objeto con los datos del elemento aleatorio
            var elementoAleatorio = {
                nombre: cells[0],
                apellido: cells[1],
                // Agrega más propiedades según sea necesario
            };

            // Ahora puedes usar este objeto en otras partes del código
            var campoNombre = document.getElementById(containerId);
            // alert (elementoAleatorio.nombre);
            campoNombre.value = elementoAleatorio.nombre;

            // También puedes almacenar el objeto en una variable global si lo necesitas en múltiples lugares.
            // window.elementoAleatorio = elementoAleatorio;
        } else {
            console.error('No se pudo cargar el archivo CSV.');
        }
    };

    xhr.send();
}

        // Llama a la función para mostrar un elemento aleatorio del archivo "mujeres.csv"
        mostrarElementoAleatorio('data/sep/nombres.csv', 'fila-nombres');

        // Llama a la función para mostrar un elemento aleatorio del archivo "apellidos.csv"
        mostrarElementoAleatorio('data/sep/apellidos.csv', 'fila-apellidos');

         // Llama a la función para mostrar un elemento aleatorio del archivo "apellidos.csv"
         mostrarElementoAleatorio('data/sep/mascotas.csv', 'fila-mascotas');

        function calcularEdad() {
            const fechaNacimiento = new Date(document.getElementById("fecha-nacimiento").value);
            const fechaActual = new Date();
            const edadMilisegundos = fechaActual - fechaNacimiento;

            // Calcula la edad en años
            const edad = Math.floor(edadMilisegundos / (365 * 24 * 60 * 60 * 1000));

            document.getElementById("resultado").value = `${edad}`;
        }
        function generarNumero() {
            // const lada = document.getElementById("lada").value;

            // Genera los últimos 6 dígitos del número aleatoriamente
            const numerosAleatorios = Math.floor(Math.random() * 1000000).toString().padStart(7, '0');

            const numero = `999 ${numerosAleatorios}`;

            document.getElementById("numero-generado").value = `${numero}`;
        }

        //Guardar los cuadros de texto
        function validar_formulario(){
            if (document.getElementById('email').value.length == 0) {
                alert("Escribe el correo electronico")
                document.getElementById('email').focus()
                return 0
            }
            if (document.getElementById('contrasena').value.length == 0) {
                alert("Escribe la contraseña ")
                document.getElementById('contrasena').focus()
                return 0
            }
            if (document.getElementById('resultado').value.length == 0) {
                alert("Calcula la edad")
                document.getElementById('resultado').focus()
                return 0
            }


            document.forml.submit()
        }
    </script>
</body>
</html>
