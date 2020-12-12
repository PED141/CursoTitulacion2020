<?php
/**
 * un array almacena multiples valores en una variable
 * En phpla funcion array () es utilizada para crear un arreglo
 */

 $frutas=array("mango","manzana","pera","naranja");
 echo"compra".$frutas[0].",".$frutas[2].",".$frutas[3];
 echo"<br>";

 
 /**
  * obtener la longitud de un arreglo con la funcion count()
  */
  echo"longitud:".count($frutas);
  echo"<br>";

  /**
   * arreglos indexados en PHP
   * los indices se pueden asignar automaticamente o de manera manual
   * */

   //Asignacion automatica
   $animales=array("perro","gato","conejo");
 var_dump($animales);
 echo"<br>";

//Asignacion manual
$colores[0]="rojo";
$colores[1]="azul";
$colores[2]="verde";
var_dump($colores);
echo"<br>";

/**
 * iterar un arreglo
*/

$idiomas=array("español","ingles","frances","portugues","italiano");
$idiomas.lenght=count($idiomas);
echo"los idiomas son:<br>";
for($x=0; $X <$idiomasLenght; $x++){
    echo $idiomas[$x];
    echo"<br>";
}
/**
 * Arreglo asociativo
 * 
 /
$edad=array("pedro"=>25,"juan"=>26,"Alejandro"=>30);
echo "juan tiene".$edad["juan"]."años";
echo"<br>";

/**
 * Iterar un arreglo asociativo
 /
 foreach($edad as $key=>$value){
     echo"Llave=". $key.",valor=".$value;
     echo"<br>";

     /**
      * array multidimensional
      /
      $cars=array(
      array ("Volvo",22,18),
      array("BWN"15,13);
      array("VW Golf",5,2);
      array("Land Rover",17,15);
 );
 var_dump($cars);
 echo"<hr>";

 echo $cars[0][0].":En almacen:".$cars[0][1].",vendidos:".$cars[0][2].".<br>";
 echo $cars[1][0].":En almacen:".$cars[1][1].",vendidos:".$cars[1][2].".<br>";
 echo $cars[2][0].":En almacen:".$cars[2][1].",vendidos:".$cars[2][2].".<br>";
 echo $cars[3][0].":En almacen:".$cars[1][1].",vendidos:".$cars[3][2].".<br>";

 /**
  * Iterar en un array multidimensional
  /

  for ($row=0; $row<4; $row++){
      echo"<p><b>Numero de fila $row"</b></p>
      echo"<>ul";
      for($col=0; $col <3;$col++){
echo"<>li".scars[$row][$col]."</li>";
      }
      echo"/ul";

    }





