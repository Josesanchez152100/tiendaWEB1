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

            <form action="registrarProductos.php" method="POST">
                
                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold"></label>                        
                    </div>
                </div>
                
                <h1 align="center">ADMINISTRACIÓN DE PRODUCTOS</h1>

                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold"></label>                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="nombreProducto" name="nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="marcaProducto" name="marca">
                    </div>
                </div>

                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold"></label>                        
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="precioProducto" name="precio">
                    </div>
                </div>
                
                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold">Descripción:</label>
                        <textarea class="form-control" rows="4" placeholder="Descripción" name="descripcion"></textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold">Foto:</label>
                        <input type="text" class="form-control" placeholder="URL fotografía" name="foto">
                    </div>
                </div>

                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold"></label>                        
                    </div>
                </div>
                
                <button type="submit" class="btn btn-info btn-block" name="botonEnvio">Registrar</button>
            </form>

            <footer class="page-footer font-small unique-color-dark pt-4">            
                <ul class="list-unstyled list-inline text-center py-2">
                    <li class="list-inline-item">
                        <h5 class="mb-1">Dirección Cr 51 #14 - 57, Teléfono 6040707, Email: cellphone@gmail.com</h5>
                    </li>
                </ul>
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="formularioRegistro.php"> TiendaCellPhone.com</a>
                </div> 
            </footer>   
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>