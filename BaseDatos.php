<?php

class BaseDatos{

//atributos
public $usuarioBD="root";
public $passwordBD="";

//constructor
public function __construct(){}

//metodos
public function conectarBD(){

    $datosBD="mysql:host=localhost;dbname=productosm2";
    $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);

    try {

        $datosBD="mysql:host=localhost;dbname=productosm2";
        $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
        //echo("exito");
        return($conexionBD);

    } catch (PDOException $error) {
       
        echo($error->getMessage());

    }

}

public function agregarDatos($consultaSQL){

    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //preparar consulta
    $insertarDatos=$conexionBD->prepare($consultaSQL);

    //ejecutar la consulta
    $resultado = $insertarDatos->execute();

    //verifico el resultado
    if($resultado){
        echo("producto agregado");
    }else{
        echo("error");
    }
}

public function consultarDatos($consultaSQL){
    
    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //preparar consulta
    $consultarDatos=$conexionBD->prepare($consultaSQL);

    //Establecer el método de consulta
    $consultarDatos->setFetchMOde(PDO::FETCH_ASSOC);

    //Ejecutar la operacion en la BD
    $consultarDatos->execute();

    //Retorne los datos consultados
    return($consultarDatos->fetchAll());

}

public function eliminarDatos($consultaSQL){
    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //preparar consulta
    $eliminarDatos=$conexionBD->prepare($consultaSQL);
    
    //Ejecutar la operacion en la BD
    $resultado= $eliminarDatos->execute();
    
    //verifico el resultado
    if($resultado){
        //Redireccion
        header("location:listaProductos.php");
        //echo("producto eliminado");
    }else{
        echo("error");
    }
}

public function editarDatos($consultaSQL){
    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //preparar consulta
    $eliminarDatos=$conexionBD->prepare($consultaSQL);
    
    //Ejecutar la operacion en la BD
    $resultado= $eliminarDatos->execute();
    
    //verifico el resultado
    if($resultado){
        echo("producto editado");
    }else{
        echo("error");
    }
}

}















?>