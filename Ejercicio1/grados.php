<!--Guía de ejercicios.
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.

    Ejercicio 1
    Todos los ejercicios deben de apuntar a un principal index automaticamente al entrar a la carpeta del
    ejercicio y dar la solución a todo lo solicitado.
 1. Utilizando solamente código php y POO cree un código que permita calcular grados centígrados en
    Fahrenheit.-->

    <?php
    //ABSTRACCIÓN
    //clase
    class Grados{
        //atributos
        public $gradoCentigrado;
        public $gradoFahrenheit;
        //constructor
        public function __construct($gradoCentigrado)
        {
            $this->gradoCentigrado=$gradoCentigrado;
            $this->gradoFahrenheit=($gradoCentigrado*1.8)+32;
        }
        //comportamiento
        public function convertir(){
            echo "El grado centígrado ".$this->gradoCentigrado." convertido en grados Fahrenheit es: ".$this->gradoFahrenheit;
        }
    }
    //FIN DE LA ABSTRACCIÓN
    //objeto
    $fahrenheit=new Grados($_POST['gCentigrado']);
    //aplicar método
    $fahrenheit->convertir();
    ?>