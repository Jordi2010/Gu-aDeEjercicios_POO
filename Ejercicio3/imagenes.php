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

    <?php
    class Imagenes{
        public function imagen(){
            echo '<img src="img/simio.jpg" width="500" height="600">';
        }
    }
    $imagen=new Imagenes();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        for($i = 1; $i<=$_POST["numero"];$i++){
            $imagen->imagen();
        }
    }
    ?>