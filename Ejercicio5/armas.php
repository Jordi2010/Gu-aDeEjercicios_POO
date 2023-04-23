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

    <?php
    //ABSTRACCIÓN
    //clase
    class Arma{
        //atributos
        protected $tipo;
        protected $balas;
        //constructor
        public function __construct($tipo) {
            $this->tipo = $tipo;
            $this->balas = 0;
        }
        //métodos
        public function recargar() {
            $this->balas += 8;
        }
        public function disparar() {
            if ($this->balas > 0) {
                $this->balas--;
            }
        }
    }
    //objeto
    $arma1=new Arma($_POST['totalBalas']);
    $arma2=new Arma($_POST['totalBalas']);
    $arma3=new Arma($_POST['totalBalas']);
    $arma4=new Arma($_POST['totalBalas']);
    //aplicar método
    if ($_POST['totalBalas']=0){
        $arma1->recargar();
        $arma2->recargar();
        $arma3->recargar();
        $arma4->recargar();
    }
    else if ($_POST['totalBalas']>0){
        $arma1->disparar();
        $arma2->disparar();
        $arma3->disparar();
        $arma4->disparar();
    }
    ?>