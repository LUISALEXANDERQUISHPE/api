<?php
/*
class conexion{

    /*public function conectar(){
        define("server","localhost");
        define("db","soa");
        define("user","root");
        define("password","root");

        try{

            $conn= new PDO("mysql:host=".server.";dbname=".db,user,password);
           //$conn = new PDO("mysql:host=" .serverName. ";dbname=".db, user,password);
            echo "estas conectado";
            return $conn;
        }catch(Exception $e){
            die("error en la conexion: ".$e->getMessage());
        }
    }

}*/
   /*     class Conexion
        {
            public function conectar()
            {
                define('server', '|:3387');
                define('db', 'soa');
                define('user', 'root');
                define('password', '');


                try {
                    $conn=new PDO("mysql:host=".server.";dbname=".db,user,password);
                    //echo"\n <br>Estas conectado a la base de datos <br>";//
                    return $conn;
                } catch (Exception $e) {
                    die("error al conectar" . $e->getMessage());
                }
        }
    }*/
 class Conexion {
        public function conectar(): PDO {
            // Definir los parámetros de conexión
            $host = 'ep-bitter-firefly-a5d47g9h.us-east-2.aws.neon.tech';
            $dbname = 'estudiantesDB';
            $user = 'estudiantesDB_owner';
            $password = 'Uor4sliwEM6H';
    
            try {
                // Cadena de conexión en formato PDO para PostgreSQL con SSL activado
                $dsn = "pgsql:host=$host;dbname=$dbname;sslmode=require";
                
                // Crear la conexión PDO
                $conn = new PDO($dsn, $user, $password);
                
                // Configurar el modo de error de PDO para excepciones
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                // Retornar la conexión
                return $conn;
    
            } catch (PDOException $e) {
                die("Error al conectar: " . $e->getMessage());
            }
        }
    }
    
    

?>