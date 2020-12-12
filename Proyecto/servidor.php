<?php
/**
 * obtener los datos del formulario
 */
//post
if(isset($_POST['nombre']) && isset ($_POST['correo'])){

 $nombre=$_POST['nombre'];
 $correo=$_POST['correo'];

 echo "Hola:" .$nombre.  "tu correo es:".$correo;
}
 //Get 
 if(isset($_Get['producto']) && isset($_GET['cantidad'])){
 $producto=$_GET['producto'];
 $cantidad=$_GET['cantidad'];

 echo"producto:". $producto."la cantidad es de:".$cantidad;
 }