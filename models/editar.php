<?php

include_once "conexion.php";
class crudE
{

    public static function editar()
    {
        parse_str(file_get_contents("php://input"), $_PUT);
        $cedula = $_PUT['cedula'];
        $nombre = $_PUT['nombre'];
        $apellido = $_PUT['apellido'];
        $direccion = $_PUT['direccion'];
        $telefono = $_PUT['telefono'];

        $con = new Conexion();
        $con = $con->conectar();

        // $objetoConexion= new Conexion();    
        //$conn= $objetoConexion->conectar();

        $editarEstudiante = "UPDATE estudiantes SET nombre='$nombre',apellido='$apellido',direccion='$direccion',telefono='$telefono' WHERE cedula = '$cedula'";
        $resulta = $con->prepare($editarEstudiante);
        $resulta->execute();
        $data = json_encode("Se edito Correctamente");
        print_r($data);
    }
   
}
