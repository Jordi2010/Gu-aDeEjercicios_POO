<!--Guía de ejercicios.
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.

    Ejercicio 2
    Todos los ejercicios deben de apuntar a un principal index automaticamente al entrar a la carpeta del
    ejercicio y dar la solución a todo lo solicitado.
 2. Utilizando solamente código php y POO cree un código que permita evaluar la temperatura en grados
    centígrados con las siguientes condiciones:
    Temperatura <=0 imprimir en color azul el texto “temperatura máximamente FRIA”.
    Temperatura <=30 imprimir en color amarillo el texto “temperatura estable”.
    Temperatura >=31 imprimir en color rojo el texto “temperatura máximamente CALIENTE”.-->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h1>Evalauación de la temperatura de grados centígrados</h1>
        <form action="../Ejercicio2/temperatura.php" method="POST">
            <input type="number" name="gCentigrado" require placeholder="Digite el grado">
            <br><br>
            <button type="submit">Enviar grado</button>
        </form>
    </body>
    </html>