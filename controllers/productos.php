<?php
//CREAR EL CONTROLADOR QUE SE COMUNIQUE CON EL MODELO PARA ACCEDER A LOS MÉTODOS DEL MODELO A TRAVÉS DE LOS ENDPOINT

//Agregar la siguiente línea para que la aplicación sepa que se utilizarán JSON
header('Content-Type: application/json');

require_once("../config/conexion.php");
require_once("../models/Productos.php");

//CREAR UN OBJETO DE TIPO CATEGORÍA PARA INSTANCIAR LOS MÉTODOS DEL MODELO

$producto=new Productos();

//Recibir la información en JSON que hay que preparar en el objeto body
$body=json_decode(file_get_contents("PHP://input"), true);

//Crear un switch para navegar entre los diferentes servicios que ofrece el API a través de los endpoint
switch($_GET["op"])
{
    //Case para regresar todos los registros de la tabla de categorías
    case "selectall": $datos=$producto->getProductos();
                      echo json_encode($datos); break;
    //Case para regresar un registro en particular de categoría
    case "selectid": $datos=$producto->getProductos_id($body["id"]);
                     echo json_encode($datos); break;
    case "insert": $datos=$producto->postProductos($body["name"],$body["image"], $body["price"], $body["status"], $body["description"]);
                    echo json_encode("El registro ha sido ingresado exitosamente"); break;
    case "update": $datos=$producto->putProductos($body["name"],$body["image"], $body["price"], $body["status"], $body["description"], $body["id"]);
                    echo json_encode("El registro ha sido actualizado exitosamente"); break;
    case "delete": $datos=$producto->deleteProductos($body["id"]);
                    echo json_encode("El registro ha sido eliminado exitosamente"); break;
}
?>