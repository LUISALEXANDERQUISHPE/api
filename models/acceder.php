<?php
include "conexion.php";class crudS {
    public static function seleccionarEstudiantes() {
        try {
            $objetoConexion = new Conexion();
            $conn = $objetoConexion->conectar();
            $selectEstudiante = "SELECT * FROM estudiantes";
            $result = $conn->prepare($selectEstudiante);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($data); // Devolver los datos en formato JSON
        } catch (PDOException $e) {
            echo json_encode(["error" => "Error al consultar la base de datos: " . $e->getMessage()]);
        }
    }
}

?>