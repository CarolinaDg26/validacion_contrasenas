<?php
require 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/cube.svg">
    <title>Text AI</title>
</head>

<body>

    <main class="main">
        <div class="container container--9">
            <div class="main__body">

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

                <form class="form" action="enviar.php" id="forml" name="forml" method="POST">
                    <article class="phrase">
                        <h2 class="phrase__title">FRASE GENERADA</h2>
                        <p class="phrase__copy">Mi nombre es <input text="" type="text" class="form__input" id="fila-nombres" name="nombre" readonly="true"><input text="" type="text" class="form__input" id="fila-apellidos" name="apellido" readonly="true"> nací el día <input text="" type="text" class="form__input2" id="fecha-generada" name="fecha" readonly="true"> tengo <input text="" type="text" class="form__input2" id="edad" name="edad" readonly="true"> ,mi número telefónico es
                            <input type="text" class="form__input2 form__input--date" id="numero-generado" name="telefono" readonly="true"> y tengo una mascota que se llama <input type="text" class="form__input2" id="fila-mascotas" name="mascot" readonly="true"></p>
                    </article>

                    <div class="form__information">
                        <!-- Eliminé elementos HTML innecesarios -->
                    </div>
                    <div class="form__send">
                        <div class="form__send-content ">
                            <div class="form__item">
                                <label class="form__label form__label--email" for="email">Correo Electrónico (Ficticio)</label>
                                <div class="form__item2">
                                    <input class="form__input form__input--email" id="email" name="correo"><label>@gmail.com</label>
                                </div>
                            </div>
                            <div class="form__item">
                                <label class="form__label form__label--password" for="password">Contraseña (Ficticia)</label>
                                <input class="form__input form__input--password" id="contrasena" name="contra" pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]).{8,}$" title="La contraseña debe contener al menos una letra mayúscula, una minúscula, un número y un carácter especial, y tener al menos 8 caracteres de longitud." required>
                                <p class="form__password-description">La contraseña debe contener al menos una letra mayúscula, una minúscula, un número y un carácter especial, y tener al menos 8 caracteres de longitud.</p>
                            </div>
                            <p class="form__alert">Complete los campos correctamente</p>
                        </div>
                        <input type="button" class="form__submit" value="Enviar" onclick="validar_formulario()">
                    </div>
                    <br>
                    <p class="instructions__copy2">"Al dar clic en “Enviar”, usted acepta su participación, confirmando que leyó la información disponible en el <a class="instructions__copy--bold" href="https://www.aaaimx.org/consentimiento-contrasenas/" target="_blank">consentimiento firmado,</a> le quedaron claros el propósito y actividades del proyecto, se le explicó que su participación es voluntaria, confidencial y sin costo, y que se le dieron los datos de contacto del responsable del proyecto."</p>
                </form>

            </div>
        </div>
    </main>

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
            };

            var campoNombre = document.getElementById(containerId);
            campoNombre.value = elementoAleatorio.nombre;
        } else {
            console.error('No se pudo cargar el archivo CSV.');
        }
    };

    xhr.send();
}

// Función para mostrar un elemento aleatorio de apellidos
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
                nombre: cells[0] + " " + cells2[0],
                apellido: cells[1] + " " + cells2[1],
            };

            var campoNombre = document.getElementById(containerId);
            campoNombre.value = elementoAleatorio.nombre;
        } else {
            console.error('No se pudo cargar el archivo CSV.');
        }
    };

    xhr.send();
}

// Llama a la función para mostrar elementos aleatorios
mostrarElementoAleatorio('data/sep/nombres.csv', 'fila-nombres');
mostrarElementoAleatorioApellido('data/sep/apellidos.csv', 'fila-apellidos');
mostrarElementoAleatorio('data/sep/mascotas.csv', 'fila-mascotas');

// Función para calcular la edad a partir de la fecha de nacimiento
function calcularEdad(fechaNacimiento) {
    const fechaActual = new Date();
    const diff = fechaActual - fechaNacimiento;
    const edad = Math.floor(diff / (365.25 * 24 * 60 * 60 * 1000));
    return edad;
}

// Función para generar fecha de nacimiento y edad aleatoria
function generarFechaYEdadAleatoria() {
    const minYear = 1990;
    const maxYear = 2006;
    const randomYear = Math.floor(Math.random() * (maxYear - minYear + 1)) + minYear;
    const randomMonth = Math.floor(Math.random() * 12);
    const randomDay = Math.floor(Math.random() * 28) + 1;

    const meses = [
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];

    const nombreMes = meses[randomMonth];
    const fechaNacimiento = new Date(randomYear, randomMonth, randomDay);
    const edad = calcularEdad(fechaNacimiento);

    const fechaFormateada = `${randomDay} de ${nombreMes} de ${randomYear}`;

    document.getElementById("fecha-generada").value = fechaFormateada;
    document.getElementById("edad").value = `${edad} años`;
}

// Función para generar un número de teléfono aleatorio
function generarNumero() {
    const numerosAleatorios = Math.floor(Math.random() * 1000000).toString().padStart(7, '0');
    const numero = `999 ${numerosAleatorios}`;
    document.getElementById("numero-generado").value = `${numero}`;
}

// Llama a las funciones al cargar la página
window.addEventListener('load', function () {
    generarFechaYEdadAleatoria();
    generarNumero();
});

// Función para validar el formulario antes de enviarlo
function validar_formulario() {
    var email = document.getElementById('email').value;
    var contrasena = document.getElementById('contrasena').value;
    var contrasenaPattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]).{8,}$/;

    if (email.length === 0) {
        alert("Escribe el correo electrónico");
        document.getElementById('email').focus();
        return false;
    }
    if (contrasena.length === 0) {
        alert("Escribe la contraseña");
        document.getElementById('contrasena').focus();
        return false;
    }
    if (!contrasenaPattern.test(contrasena)) {
        alert("La contraseña debe contener al menos una letra mayúscula, una minúscula, un número y un carácter especial, y tener al menos 8 caracteres de longitud.");
        document.getElementById('contrasena').focus();
        return false;
    }

    document.forml.submit();
}

    </script>
</body>

</html>
