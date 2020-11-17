<?php

include("BaseDatos.php");

//1. Crear el objeto de la BD
$transaccion=new BaseDatos();


//2. Recibir Datos
if(isset($_POST["botonEditar"])){


    //3. Recibir el id que quiero editar
    $id=$_GET["id"];
    echo($id);

    $nombre=$_POST['nombreEditar'];
    echo($nombre);
    $marca=$_POST['marcaEditar'];
    echo($marca);
    $precio=$_POST['precioEditar'];
    echo($precio);
    $foto=$_POST['fotoEditar'];
    echo($foto);
    $descripcion=$_POST['descEditar'];
    echo($descripcion);

    //4. Consulta para editar un registro
    $consultaSQL="UPDATE productos SET nombre='$nombre', marca='$marca', precio='$precio', foto='$foto', descripcion='$descripcion' WHERE idProducto='$id'";

    //5. Utilizar el metodo editar
    $transaccion->editarDatos($consultaSQL);

    //Redireccion
    header("location:listaProductos.php");

}




?>