<?php
#Declaraciones de las variables
$txt="hola a todos";
/*
los nombres de variables empiezan con el signo de $ los nombres de las variables
deben de empezar con una letra o_
No pueden iniciar con un numero o solo puede contenber caracteres alfanumricos
Los numeros de las variablers son sencibles a mayusculas y minusculas
*/
$x=5;
$x=10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";


$a=5;
$b=3;

echo"la suma de " , ($a+$b);


#Alcance de las variables

//Global

$c=5; //Variables global

function pruebaGlobal(){
    //utilizar n dentro de esta funcion marcara error.
    echo"<p>Variables c dentro dela funcion es: $c</p>";
}
function pruebaGlobal(){
    echo "variable c fuera de la funcion es: $c</p>";
    //local
$z=5; //variable local

function pruebalocal(){
    //Utilizar n dentro de esta funcion marcara error-
    echo "<p> variable z dentro de la funcion es: $z</p>";
   }


