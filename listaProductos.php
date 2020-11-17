<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiendaCellPhone</title>
    <link rel="icon" href="https://github.com/Josesanchez152100/imagenesProductos/blob/main/favicon.png?raw=true" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <?php
    
        include("BaseDatos.php");

        //1. Crear un objeto de la clase BaseDatos
        $transaccion=new BaseDatos();

        //2. Definir la consulta para buscar datos
        $consultaSQL="SELECT * FROM productos WHERE 1";

        //3. Ejecutar el método consultarDatos() y almacenar la respuesta en una variable
        $productos=$transaccion->consultarDatos($consultaSQL);

             
    
    ?>

<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="formularioRegistro.php">Registro <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listaProductos.php">Productos</a>
                </li>
                </ul>               
            </div>
        </nav>    
</header>

    <main>
    
        <div class="container">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://github.com/Josesanchez152100/imagenesProductos/blob/main/xiaomibanner.jpg?raw=true" class="d-block w-100" height="280px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://github.com/Josesanchez152100/imagenesProductos/blob/main/applebanner.jpg?raw=true" class="d-block w-100" alt="..." height="280px">
                        </div>
                        <div class="carousel-item">
                            <img src="https://github.com/Josesanchez152100/imagenesProductos/blob/main/samsung_banner.jpg?raw=true" class="d-block w-100" height="280px" alt="...">
                        </div>
                    </div>
            </div>

            <div class="row mt-3">
                        
                <div class="col">
                    <label class="font-weight-bold"></label>                        
                </div>
            </div>

            <h1 align="center">PRODUCTOS EN BODEGA</h1>

            <div class="row mt-3">
                    
                <div class="col">
                    <label class="font-weight-bold"></label>                        
                </div>
            </div>
        
            <div class="row row-cols-1 row-cols-md-3">

                <?php foreach($productos as $producto):?>


                    <div class="col mb-4">
                        <div class="card">
                            <img src="<?php echo($producto["foto"]) ?>" class="card-img-top" alt="FOTO">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo($producto["nombre"])?></h3>
                                <h3 class="card-title"><?php echo($producto["marca"])?></h3>
                                <h3 class="card-title"><?php echo($producto["precio"])?></h3>
                                <p class="card-text"><?php echo($producto["descripcion"])?></p>
                                <a href="eliminarProducto.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-danger">Eliminar</a>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                                    editar
                                </button>    
                            </div>
                        </div>

                        <div class="modal fade" id="editar<?php echo($producto["idProducto"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edición de producto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="editarProducto.php?id=<?php echo($producto["idProducto"])?>" method="POST">
                                            <div class="form-group">
                                                <label>Nombre:</label>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"])?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Marca:</label>
                                                <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marca"])?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Precio:</label>
                                                <input type="number" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Foto:</label>
                                                <input type="text" class="form-control" name="fotoEditar" value="<?php echo($producto["foto"])?>">
                                            </div>

                                            <div class="form-group">
                                                <label>Descripcion:</label>
                                                    <textarea class="form-control" rows="3" name="descEditar"><?php echo($producto["descripcion"])?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning" name="botonEditar">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                <?php endforeach?>

            </div>
            <footer class="page-footer font-small unique-color-dark pt-4">            
                <ul class="list-unstyled list-inline text-center py-2">
                    <li class="list-inline-item">
                        <h5 class="mb-1">Dirección Cr 51 #14 - 57, Teléfono 6040707, Email: cellphone@gmail.com</h5>
                    </li>
                </ul>
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="listaProductos.php"> TiendaCellPhone.com</a>
                </div> 
            </footer> 
        </div>
    
    
    
    </main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>