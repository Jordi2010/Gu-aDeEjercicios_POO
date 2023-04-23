<!--Guía de ejercicios.
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.

    Ejercicio 3
    Todos los ejercicios deben de apuntar a un principal index automaticamente al entrar a la carpeta del
    ejercicio y dar la solución a todo lo solicitado.
 3. Desarrolle el siguiente ejercicio utilizando html y php con POO, solicite por medio de un control un
    número y según el numero que se inserte asi mostrar una cantidad de imágenes. La imagen puede ser solo
    una y posicionarlas como desee.
    Ejemplo si el numero ingresado es: 3 mostrar 3 imágenes.-->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <h1>Imagenes</h1>
        <form action="imagenes.php" method="POST">
            <input type="number" name="numero" required placeholder="Digite el número">
            <br><br>
            <button type="submit">Enviar número</button>
        </form>
    </body>
    </html>