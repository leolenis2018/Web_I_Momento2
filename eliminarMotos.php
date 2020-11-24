<?php

include("BaseDatos.php");

//1. Recibir desde la URl el id del registro que vamos a eliminar

$id=$_GET["id"];

//2. Creamos un objeto de la clase Base Datos()
$transaccion = new BaseDatos();

//3. Crear una consulta SQL para elimiar datos
$consultaSQL = "DELETE FROM motos WHERE id_moto='$id' ";

//4. Utilizar el metodo eliminarDatos
$transaccion->eliminarDatos($consultaSQL);

//6. Redireccion
header("location:listaMotos.php");

?>