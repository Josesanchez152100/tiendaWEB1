<?php

include('BaseDatos.php');

if(isset($_POST["botonEnvio"])){

    //recibo los datos del formulario
    $nombre=$_POST['nombre'];
    $marca=$_POST['marca'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $foto=$_POST['foto'];
    //copia u objeto de la clase BD
    $transaccion= new BaseDatos();
    
    //crear consulta
    $consultaSQL="INSERT INTO productos(nombre, marca, precio, descripcion, foto) VALUES ('$nombre','$marca','$precio','$descripcion','$foto')";

    //llamo al metodo de la clase BD agregarDatos()
    $transaccion->agregarDatos($consultaSQL);

    //Redireccion
    header("location:formularioRegistro.php");

}

?>