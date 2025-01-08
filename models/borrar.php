<?php
include_once "conexion.php";

class crudD
{
    public static function  borrar()
    {
        $objetoConexion = new Conexion();
        $conn = $objetoConexion->conectar();

        $cedula = $_GET['cedula'];
        $borrarEstudiante = "delete from estudiantes where cedula ='$cedula' ";
        $result = $conn->prepare($borrarEstudiante);
        $result->execute();
        $dataJson = json_encode("Se elimino correctamente");
        print_r($dataJson);
    }

    public static function  borrarParametro($cedula)
    {
        $objetoConexion = new Conexion();
        $conn = $objetoConexion->conectar();

        $borrarEstudiante = "delete from estudiantes where cedula ='$cedula' ";
        $result = $conn->prepare($borrarEstudiante);
        $result->execute();
        $dataJson = json_encode("Se elimino correctamente");
        print_r($dataJson);
    }
}
