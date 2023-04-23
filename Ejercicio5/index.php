<!--Guía de ejercicios.
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.

    Ejercicio 5
    Todos los ejercicios deben de apuntar a un principal index automaticamente al entrar a la carpeta del
    ejercicio y dar la solución a todo lo solicitado.
 5. Utilizando html, PHP con POO y métodos de polimorfismo el siguiente ejercicio, Coloque en la vista 4
    tipos de armas distintas, a estas armas colocarle un control que permita recibir números y botón que
    diga recargar, en el inicio del programa el control debe de estar a “0”.
    Cuando se de clic en el botón recargar debe de agregarle 8 balas a las armas (debe de colocarse un
    número 8 en el control). Eso para cada arma con su botón respectivo.
    Si el cargador aún tiene balas no permitir la recarga hasta que el control este complementa mente a 0.
    Agregarle a cada arma un botón que diga disparar el cual cada ves que se dispare debe de descontar las
    balas cargadas.-->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h1>Arsenal</h1>
        <form action="../Ejercicio5/armas.php" method="POST">
            <label for="arma1">Arma 1:</label>
            <input type="text" id="arma1" name="arma1" value="0">
            <button type="button" onclick="recargar('arma1')">Recargar</button>
            <button type="button" onclick="disparar('arma1')">Disparar</button>
            <br><br>

            <label for="arma2">Arma 2:</label>
            <input type="text" id="arma2" name="arma2" value="0">
            <button type="button" onclick="recargar('arma2')">Recargar</button>
            <button type="button" onclick="disparar('arma2')">Disparar</button>
            <br><br>

            <label for="arma3">Arma 3:</label>
            <input type="text" id="arma3" name="arma3" value="0">
            <button type="button" onclick="recargar('arma3')">Recargar</button>
            <button type="button" onclick="disparar('arma3')">Disparar</button>
            <br><br>

            <label for="arma4">Arma 4:</label>
            <input type="text" id="arma4" name="arma4" value="0">
            <button type="button" onclick="recargar('arma4')">Recargar</button>
            <button type="button" onclick="disparar('arma4')">Disparar</button>
            <br><br>
        </form>
        <script>
        function recargar(arma) {
            var control = document.getElementById(arma);
            if (control.value == 0) {
            control.value = 8;
            }
        }
        function disparar(arma) {
            var control = document.getElementById(arma);
            if (control.value > 0) {
            control.value = control.value - 1;
            }
        }
        </script>
    </body>
    </html>