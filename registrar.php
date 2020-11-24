<?php

include("BaseDatos.php");

if (isset($_POST["botonEnvio"])) {


    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $foto = $_POST["foto"];

    $transaccion = new BaseDatos();

    $consultaSQL = "INSERT INTO motos(marca, modelo, descripcion, precio, foto) VALUES ('$marca','$modelo', '$descripcion', '$precio', '$foto')";

    $transaccion->agregarDatos($consultaSQL);

   // header("location:formularioRegistro.php");
}
