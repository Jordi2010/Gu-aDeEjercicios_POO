<!--Guía de ejercicios.
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.

    Ejercicio 1
    Todos los ejercicios deben de apuntar a un principal index automaticamente al entrar a la carpeta del
    ejercicio y dar la solución a todo lo solicitado.
 1. Utilizando solamente código php y POO cree un código que permita calcular grados centígrados en
    Fahrenheit.-->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h1>Grados centígrados a Fahrenheit</h1>
        <form action="../Ejercicio1/grados.php" method="POST">
            <input type="number" name="gCentigrado" require placeholder="Digite el grado">
            <br><br>
            <button type="submit">Enviar grado</button>
        </form>
    </body>
    </html>