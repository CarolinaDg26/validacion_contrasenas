<?php
require 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Text AI</title>
</head>

<body>


    <!-- HEADER -->
    <header class="header">
        <img class="header__image" src="img/banner2.webp" alt="">
        <img class="header__shadow header__shadow--1" src="img/shadow.svg" alt="">
        <img class="header__shadow header__shadow--2" src="img/shadow.svg" alt="">
        <img class="header__shadow header__shadow--3" src="img/shadow.svg" alt="">
        <div class="container container--12">
            <div class="header__body">
                <h1 class="header__title">Password Generate</h1>
                <p class="header__copy">Bienvenido a nuestra pagina, por favor, ten en cuenta que esta pagina web está
                    diseñada exclusivamente para fines académicos y aprendizaje, nuestro objetivo es proporcionarte una
                    experiencia educativa valiosa y practica. </p>
                <p class="header__copy">Te pedimos únicamente utiliza <span class="header__copy--bold"> los datos generados para fines académicos y prácticos dentro de esta página web.</span></p>
            </div>
        </div>
    </header>
     <!-- MAIN -->
     <main class="main">
        <div class="container container--9">
            <div class="main__body">
                
                <!-- INSTRUCCIONES -->
                <article class="instructions">
                    <div class="instructions__left">
                        <h2 class="instructions__title">INSTRUCCIONES</h2>
                        <p class="instructions__copy">De acuerdo con la información presentada, <span class="instructions__copy--bold">proporciona un correo electrónico y una contraseña ficticios.</span></p>
                    </div>
                    <div class="instructions__right">
                        <figure class="instructions__figure">
                            <img class="instructions__image" src="img/cube.svg" alt="">
                        </figure>
                    </div>
                </article>

                <!-- TEXTO GENERADO -->
                <form class="form" action="enviar.php" id="forml" name="forml" method="POST">
                <article class="phrase">
                    <h2 class="phrase__title">FRASE GENERADO</h2>
                    <p class="phrase__copy">Mi nombre es  <input text="" type="text" class="form__input"  id="fila-nombres"name="nombre" readonly="true" ><input text="" type="text" class="form__input" id="fila-apellidos" name="apellido" readonly="true"> nací el día <input text="" type="text" class="form__input2" id="fecha-generada" name="fecha" readonly="true" > tengo <input text="" type="text" class="form__input2" id="edad" name="edad" readonly="true">, mi número telefónico es 
                    <input type="text" class="form__input2 form__input--date" id="numero-generado" name="telefono" readonly="true"> y tengo una mascota que se llama <input type="text" class="form__input2" id="fila-mascotas" name="mascot" readonly="true" >.</p>

                </article>
          
                <!-- FORMULARIO -->
                    <div class="form__information">
                         <!--<div class="form__item">
                            <label class="form__label" for="nombre">Nombre</label>

                        </div>
                        <div class="form__item">
                            <label class="form__label" for="apellido">Apellido</label>

                        </div>
                        <div class="form__item">
                            <label class="form__label" for="mascota">Nombre de tu mascota</label>

                        </div>
                        <div class="form__item">
                            <label class="form__label" for="fecha">Fecha de Nacimiento</label>

                        </div>
                        <div class="form__item">
                            <label class="form__label" for="telefono">Teléfono</label>
                           
                        </div>
                        <div class="form__item">
                            <label class="form__label" for="edad">Edad</label>
                            
                        </div>-->
                    </div>
                    <div class="form__send">
                        <!-- Agregar la clase "error" en "form__send-content"  para mostrar el mensaje de error -->
                        <div class="form__send-content ">
                            <div class="form__item">
                                <label class="form__label form__label--email" for="email">Correo Electrónico</label>
                                <input class="form__input form__input--email" id="email" placeholder="Correo Electronico" value="@gmail.com" name="correo">
                            </div>
                            <div class="form__item">
                                <label class="form__label form__label--password" for="password">Contraseña</label>
                                <input class="form__input form__input--password" id="contrasena" placeholder="Contraseña" name="contra" maxlength="8">
                            </div>
                            <p class="form__alert">Complete los campos correctamente</p>
                        </div>
                        <input type="button" class="form__submit" value="Enviar" onclick="validar_formulario()">
                    </div>
                </form>
            
            </div>
        </div>
    </main>

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
                //window.onload = generarFechaYEdadAleatoria;

        function generarNumero() {
            // const lada = document.getElementById("lada").value;

            // Genera los últimos 6 dígitos del número aleatoriamente
            const numerosAleatorios = Math.floor(Math.random() * 1000000).toString().padStart(7, '0');

            const numero = `999 ${numerosAleatorios}`;

            document.getElementById("numero-generado").value = `${numero}`;
        }

         //window.onload = generarNumero;

    window.addEventListener('load', function() {
    generarFechaYEdadAleatoria();
    generarNumero();
});


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