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

   <?php
   //ABSTRACCIÓN
   //clase
   class Juego{
      //atributos
      public $numero;
      public $costo;
      //constructor
      public function __construct($numero, $costo)
      {
         $this->numero=$numero;
         $this->costo=$costo;
      }
      //comportamiento
      public function ganar1(){
         echo "¡Felicidades! ha ganado: $70";
      }
      public function ganar2(){
         echo "¡Felicidades! ha ganado: $140";
      }
      public function ganar3(){
         echo "¡Felicidades! ha ganado: $210";
      }
      public function ganar4(){
         echo "¡Felicidades! ha ganado: $280";
      }
      public function ganar5(){
         echo "¡Felicidades! ha ganado: $350";
      }
      public function ganar6(){
         echo "¡Felicidades! ha ganado: $420";
      }
      public function ganar7(){
         echo "¡Felicidades! ha ganado: $490";
      }
      public function ganar8(){
         echo "¡Felicidades! ha ganado: $560";
      }
      public function ganar9(){
         echo "¡Felicidades! ha ganado: $630";
      }
      public function ganar10(){
         echo "¡Felicidades! ha ganado: $700";
      }
      public function perder(){
         echo "No ganó, suerte para la próxima.";
      }
   }
   //FIN DE LA ABSTRACCIÓN
   //objeto
   $azar=new Juego($_POST['numero'], $_POST['costo']);
   //aplicar método
   if ($_POST['costo']=="1"){
      $azar->ganar1();
   }else if ($_POST['costo']=="2"){
      $azar->ganar2();
   }else if ($_POST['costo']=="3"){
      $azar->ganar3();
   }else if ($_POST['costo']=="4"){
      $azar->ganar4();
   }else if ($_POST['costo']=="5"){
      $azar->ganar5();
   }else if ($_POST['costo']=="6"){
      $azar->ganar6();
   }else if ($_POST['costo']=="7"){
      $azar->ganar7();
   }else if ($_POST['costo']=="8"){
      $azar->ganar8();
   }else if ($_POST['costo']=="9"){
      $azar->ganar9();
   }else if ($_POST['costo']=="10"){
      $azar->ganar10();
   }else{
      $azar->perder();
   }
   ?>