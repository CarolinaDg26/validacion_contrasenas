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
<div class="fondo">
<form action="enviar.php" id="forml" name="forml" method="POST">

<div class="contenedor1">
    <p>Bienvenido a nuestra pagina!!, por favor, ten en cuenta que esta página web está diseñada exclusivamente para fines académicos y de aprendizaje, nuestro objetivo es proporcionarte una experiencia educativa valiosa y práctica.
Te pedimos encarecidamente que no compartas información personal real o sensible en esta plataforma. <br> Únicamente utiliza los datos generados para fines académicos y prácticos dentro de esta página web.</p>
    <h1>Instrucciones:</h1>
    <h2>De acuerdo con la información presentada, proporciona una edad, un correo electrónico y una contraseña ficticios:</h2>
</div>
<div class="prueba">
 <div class="imguser">
  <i class="fa-regular fa-user user"></i> <br>
 </div>

 <div class="column">
   <p>Nombre: </p><input class="campos" text="" type="text" id="fila-nombres"name="nombre"readonly="true"/>
 </div>

 <div class="column">
    <p>Apellido: </p><input text="" type="text" id="fila-apellidos" name="apellido"readonly="true"/>
 </div>
</div>

<br><br><br>

<div class="prueba1">
 <div class="imguser2">
 <i class="fa-solid fa-paw user"></i>
 </div>
 <div class="column2">
    <p>Nombres de tu mascota:</p>
    <input text="" type="text" id="fila-mascotas" name="mascot"readonly="true"/>
 </div>
</div>

<div style="clear: both;"></div>  <!--Clear float para evitar problemas de altura -->

<br>

<div class="prueba2">
 <div class="imguser3">
 <i class="fa-solid fa-calendar-days user"></i>
 </div>
 <div class="column3">
    <p>Fecha de nacimiento:</p>
    <input text="" type="text" id="fecha-generada" name="fechaNacimiento" readonly="true"/>
 </div>
 <div class="column3">
    <p>Edad:</p>
    <input text="" type="text" id="edad" name="edad" readonly="true"/>
 </div>

</div>

<br><br>

<div class="prueba3">
 <div class="imguser4">
   <i class="fa-solid fa-phone-volume user"></i>
 </div>

 <div class="column4">
    <p>Número telefónico:</p><input type="text" id="numero-generado" name="telefono" readonly="true"/>
 </div>
</div>

<br><br><br>
<div class="prueba4">
 <div class="imguser5">
  <i class="fa-solid fa-envelopes-bulk user"></i>
 </div>
 <div class="contenido">
    <label for="correo">Ingresa un correo electrónico Ficticio:</label><br><br>
    <input type="text" id="email" placeholder="Correo Electrónico" size="30" name="correo">
    <br><br>
    </div>
 <div class="contenido">
    <label for="contrasena">Ingresa una Contraseña: </label><br><br><br>
    <input type="text" id="contrasena" placeholder="Contraseña" size="30" name="contra"><br>
    <br><br><br><br>
 </div>
 </div>
 <br><br><br>
 <div class="contenido2">
    <input class="btn_enviar" type="button" value="Enviar" onclick="validar_formulario()"/>
</div>
<br><br><br>

<div class="contenedor2">
    <img class="imge" src="./imagenes/maia.png" alt="">
</div>


</form>
</div>

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
            //window.elementoAleatorio = elementoAleatorio;
        } else {
            console.error('No se pudo cargar el archivo CSV.');
        }
    };

    xhr.send();
}

function mostrarElementoAleatorioApellido(url, containerId) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            var csvData = xhr.responseText;
            var rows = csvData.split('\n');
            var randomRowIndex = Math.floor(Math.random() * (rows.length - 1)) + 1; // Selecciona una fila aleatoria (excluyendo encabezados)

            var cells = rows[randomRowIndex].split(',');

            var randomRowIndex = Math.floor(Math.random() * (rows.length - 1)) + 1; // Selecciona una fila aleatoria (excluyendo encabezados)

            var cells2 = rows[randomRowIndex].split(',');
            // Crea un objeto con los datos del elemento aleatorio
            var elementoAleatorio = {
                nombre: cells[0]+" "+cells2[0],
                apellido: cells[1]+" "+cells2[1],
                // Agrega más propiedades según sea necesario
            };
            

            // Ahora puedes usar este objeto en otras partes del código
            var campoNombre = document.getElementById(containerId);
            // alert (elementoAleatorio.nombre);
            campoNombre.value = elementoAleatorio.nombre;
           
            // También puedes almacenar el objeto en una variable global si lo necesitas en múltiples lugares.
            //window.elementoAleatorio = elementoAleatorio;
        } else {
            console.error('No se pudo cargar el archivo CSV.');
        }
    };

    xhr.send();
}

        // Llama a la función para mostrar un elemento aleatorio del archivo "mujeres.csv"
        mostrarElementoAleatorio('data/sep/nombres.csv', 'fila-nombres');

        // Llama a la función para mostrar un elemento aleatorio del archivo "apellidos.csv"
        mostrarElementoAleatorioApellido('data/sep/apellidos.csv', 'fila-apellidos');

        // Llama a la función para mostrar un elemento aleatorio del archivo "apellidos.csv"
        mostrarElementoAleatorio('data/sep/mascotas.csv', 'fila-mascotas');

        function calcularEdad(fechaNacimiento) {
            const fechaActual = new Date();
            const diff = fechaActual - fechaNacimiento;
            const edad = Math.floor(diff / (365.25 * 24 * 60 * 60 * 1000));
            return edad;
        }

        function generarFechaYEdadAleatoria() {
    // Genera una fecha de nacimiento aleatoria en un rango específico (por ejemplo, entre 1950 y 2000)
    const minYear = 1990;
    const maxYear = 2006;

    const randomYear = Math.floor(Math.random() * (maxYear - minYear + 1)) + minYear;
    const randomMonth = Math.floor(Math.random() * 12) + 1;
    const randomDay = Math.floor(Math.random() * 28) + 1; // Puedes ajustar el rango de días según tus necesidades

    const fechaNacimiento = new Date(randomYear, randomMonth - 1, randomDay); // Meses en JavaScript son de 0 a 11
    const edad = calcularEdad(fechaNacimiento);

    document.getElementById("fecha-generada").value = fechaNacimiento.toLocaleDateString();
    document.getElementById("edad").value = `${edad} años`;
}


                  // Genera una fecha aleatoria al cargar la página
                window.onload = generarFechaYEdadAleatoria;

        function generarNumero() {
            // const lada = document.getElementById("lada").value;

            // Genera los últimos 6 dígitos del número aleatoriamente
            const numerosAleatorios = Math.floor(Math.random() * 1000000).toString().padStart(7, '0');

            const numero = `999 ${numerosAleatorios}`;

            document.getElementById("numero-generado").value = `${numero}`;
        }

        // window.onload = generarNumero;


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
            // if (document.getElementById('resultado').value.length == 0) {
            //     alert("Calcula la edad")
            //     document.getElementById('resultado').focus()
            //     return 0
            // }


            document.forml.submit()
        }
    </script>
</body>
</html>