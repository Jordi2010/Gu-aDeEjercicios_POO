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

    <?php
    //ABSTRACCIÓN
    //clase
    class Temperatura{
        //atributos
        public $temperatura;
        //constructor
        public function __construct($temperatura)
        {
            $this->temperatura=$temperatura;
        }
        //comportamiento
        public function evaluarFria(){
            echo '<p style="color:blue;">temperatura máximamente FRÍA.<p>';
        }
        public function evaluarEstable(){
            echo '<p style="color:yellow;">temperatura estable.<p>';
        }
        public function evaluarCaliente(){
            echo '<p style="color:red;">temperatura máximamente CALIENTE.<p>';
        }
    }
    //FIN DE LA ABSTRACCIÓN
    //objeto
    $centigrados=new Temperatura($_POST['gCentigrado']);
    //aplicar método
    if ($_POST['gCentigrado']<=0){
        $centigrados->evaluarFria();
    }
    else if ($_POST['gCentigrado']<=30 && $_POST['gCentigrado']>0){
        $centigrados->evaluarEstable();
    }
    else if ($_POST['gCentigrado']>=31){
        $centigrados->evaluarCaliente();
    }
    ?>