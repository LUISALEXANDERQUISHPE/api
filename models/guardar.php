<?php
    include_once("conexion.php");
    //SI NECESITAMOS QUE SE QUEDE CARGADO EN UNA PAGINA POR SIEMPRE SERIA EL INCLUDE PERO SI QUEREMOS UNA SOLA VE EL include_once

    class crudG{

    public static function insertarEstudiante(){
    $objetoConexion= new Conexion();    
    $conn= $objetoConexion->conectar();

    $cedula=$_POST['cedula'];  //este post sirve para coger valores desde un formulario
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $guardarEstudiante="Insert into estudiantes values('$cedula','$nombre','$apellido','$direccion','$telefono')";

    $result=$conn->prepare($guardarEstudiante);
    $result->execute();
    //print_r($result ?"\n <br> Insercción exitosa".true:"Algo anda mal".false);
    }
}

?>

