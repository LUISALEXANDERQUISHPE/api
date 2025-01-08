<?php
//REQUESTMETHOD---> me devuelve si estoy en (get,post,put,delete)
//respuesta de un servidor
$opc = $_SERVER['REQUEST_METHOD'];  //se envian estas variables  a travez de un server
//echo $opc;
include_once('../models/acceder.php');
include_once('../models/guardar.php');
include_once('../models/borrar.php');
include_once('../models/editar.php');
include_once('../models/buscar.php');

switch ($opc) {
    case 'GET':
        if (isset($_GET['cedula'])) {
            crudBUSCAR::buscarCedula($_GET['cedula']);
        } else {
            crudS::seleccionarEstudiantes(); // Retrieves all students
        }
        break;
        // crudS cs= new crudS();
        //cs->seleccionarEstudiantes();
    case 'POST':
        crudG::insertarEstudiante();
        break;
    case 'DELETE':
        crudD::borrar();
        //crudD::borrarParametro($cedula);
        // $cedula=$_GET($cedula);
        break;
    case 'PUT':
        crudE::editar();
        break;
}
