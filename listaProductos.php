<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
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
    <main>
    
        <div class="container">

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
        
        </div>
    
    
    
    </main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>