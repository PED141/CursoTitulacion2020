<?php
$estacion="invierno";

switch($estacion){
    case 'primavera';
    echo "Bienvenidos a la primavera";
break;
case'invierno';
echo"hace frio";
break;

default;
echo "En que estacion estamos??";
break;
}

/**
 * Estructura while
 * 
 */

 $x=1;
while ($x <=5){
    echo"el numero es:$x <br>";
    $x++;
}
echo "<br>";
$y=1;

do{
echo "el numero es: $y <br>";
$y++;

}while ($y <=10);