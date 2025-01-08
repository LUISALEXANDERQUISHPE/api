<?php
include_once "conexion.php";
class crudBUSCAR {
    public static function buscarCedula($cedula) {
        // Prepare and execute the SQL statement
        
        $selectEstudiantes = "SELECT * FROM estudiantes WHERE cedula = :cedula"; 
        $objetoconexion = new conexion();
        $conn = $objetoconexion->conectar();
        
        $result = $conn->prepare($selectEstudiantes);
        $result->bindParam(':cedula', $cedula, PDO::PARAM_STR); 
        $result->execute();
        
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        $dataJson = json_encode($data);
        
        // Return or echo the JSON data
        echo $dataJson;
    }
}

?>
