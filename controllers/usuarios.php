<?php
//CREAR EL CONTROLADOR QUE SE COMUNIQUE CON EL MODELO PARA ACCEDER A LOS MÉTODOS DEL MODELO A TRAVÉS DE LOS ENDPOINT

//Agregar la siguiente línea para que la aplicación sepa que se utilizarán JSON
header('Content-Type: application/json');

require_once("../config/conexion.php");
require_once("../models/Usuarios.php");

//CREAR UN OBJETO DE TIPO CATEGORÍA PARA INSTANCIAR LOS MÉTODOS DEL MODELO

$usuario=new Usuarios();

//Recibir la información en JSON que hay que preparar en el objeto body
$body=json_decode(file_get_contents("PHP://input"), true);

//Crear un switch para navegar entre los diferentes servicios que ofrece el API a través de los endpoint
switch($_GET["op"])
{
    //Case para regresar todos los registros de la tabla de categorías
    case "selectall": $datos=$usuario->getUsuarios();
                      echo json_encode($datos); break;
    //Case para regresar un registro en particular de categoría
    case "selectid": $datos=$usuario->getUsuarios_id($body["id"]);
                     echo json_encode($datos); break;
    case "insert": $datos=$usuario->postUsuarios($body["nombre"],$body["correo"], $body["password"], $body["telefono"], $body["privilegio"]);
                    echo json_encode("El registro ha sido ingresado exitosamente"); break;
    case "update": $datos=$usuario->putUsuarios($body["nombre"],$body["correo"], $body["password"], $body["telefono"], $body["privilegio"], $body["id"]);
                    echo json_encode("El registro ha sido actualizado exitosamente"); break;
    case "delete": $datos=$usuario->deleteUsuarios($body["id"]);
                    echo json_encode("El registro ha sido eliminado exitosamente"); break;
}
?>