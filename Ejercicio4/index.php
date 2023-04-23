<!--Guía de ejercicios.
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.

    Ejercicio 4
    Todos los ejercicios deben de apuntar a un principal index automaticamente al entrar a la carpeta del
    ejercicio y dar la solución a todo lo solicitado.
 4. Desarrolle en html una vista para un juego de azar, puede decorar la vista como usted desee, primero se
    debe de colocar un numero y un costo con el cual compra los números, los números deben ser de 0 a 100 y
    el costo con el que se pueden comprar es de $1 hasta $10.
    La tabla de precios por la compra de número y lo que se gana es el siguiente:
    $1=$70
    $2=$140
    $3=$210
    $4=$280
    $5=$350
    $6=$420
    $7=$490
    $8=$560
    $9=$630
    $10=$700
    Al mostrar el numero ganador, si el jugador gana mostrar un mensaje de que el jugador gano y
    cuanto $ dinero gano.
    Si el jugador no gano nada, mostrar el mensaje de que el usuario no gano, suerte para la próxima.
    Considerar que cuando se presione el botón de jugar se debe de bloquear el control donde se coloca el
    numero y activarse y limpiarse cuando se presione otro botón de jugar nuevamente.-->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
    </head>
    <style>
        input{
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 10 auto;
            border-collapse: collapse;
            padding: 10px;
            border: 2px solid red;
            margin-top: 10px;
        }
    </style>
    <body>
        <h1>Juego de azar</h1>
        <form action="vista.php" method="post">
           <label for="numero">Ingrese el número (0 - 100):</label>
           <br>
           <input type="number" require placeholder="número (0 - 100)" name="numero" id="numero" min="0" max="100" required>
           <br><br>
           <label for="costo">Ingrese el costo ($1 - $10):</label>
           <br>
           <input type="number" require placeholder="costo" name="costo" id=costo min="1" max="10" required>
           <br><br>
           <button type="submit">Jugar</button>
        </form>
    </body>
    </html>