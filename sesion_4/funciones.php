<?php
declare (strict_types=1);
/**
 * Declarar funciones
 */

 function saludo()
 {
     echo"Hola ¿como estan?";

 }
saludo();
echo"<hr>";
/**
 * Funcion con parametros
 */
function suma (int $a, int $b){
    echo $a+$b;
}
suma(5,7);