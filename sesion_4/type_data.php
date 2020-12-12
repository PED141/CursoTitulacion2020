
$saludo="hola";
echo $saludo."Bienvenidos a".'PHP';
echo "<br>";

//integer
echo "<hr>"
$x=2020;
var_dump($x);
echo"<br>";

echo "<hr>"
echo "<hr>"
$y=10.5672;
var_dump($y);
echo"<br>";


//bolean
echo "<hr>"
$verdadero=true;
$falso=false;
var_dump(falso);
echo"<br>";

//array colores
$colores=array("rojo","verde","azul","negro","blanco");
var_dump($colores);
echo"<br>";

//objeto 1 
class carro{
    public $color; //Atribitos
    public $modelo;

    public function_construct($color,modelo){
        this->color=$color;
        this->modelo=$modelo;
            }
    public function mensaje(){
        return "Micarro es un" . this->modelo=$modelo."".this->color=$color;
    }
    public detenerse(){
        return"Deteniendose..";
    }
}

$miCarro=new carro("Rojo","Chevrolet");
echo $miCarro->mensaje();
echo"<br>";
$miCarro=new carro("Blanco","Toyota");
echo $miCarro->mensaje();
echo "<br>";

//null
$valor=4;
$valor=NULL;
var_dump($valor);

//Resource
/**
*Recursos externos  a PHP
 *Base de datos
*Archivos
 *Funciones
*Etc.
 */