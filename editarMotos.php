<?php

include("BaseDatos.php");

//1. Recibir desde la URl el id del registro que vamos a editar

$id = $_GET["id"];

//2. recibo los datos a editar
if (isset($_POST["botonEditar"])) {

    $modelo = $_POST["modelo"];
    $precio = $_POST["precio"];
    $foto= $_POST["foto"];

}
//3. Utilizar o crear un objeto de la clase Base Datos
$transaccion = new BaseDatos();

//4. Crear una consulta SQL para editar datos
$consultaSQL = "UPDATE motos SET modelo='$modelo', precio='$precio', foto='$foto' WHERE id_moto='$id' ";


//5. Utilizar el metodo editarDatos
$transaccion->editarDatos($consultaSQL);

 //6. Redireccion
 header("location:listaMotos.php");
