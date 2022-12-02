<?php
   //Crear el Controlador para interactuar con la tabla de productos

   header('Content-Type:application/json');

   require_once("../config/conexion.php");
   require_once("../models/InicioSesion.php");

   $usuario=new Usuarios();

   $body=json_decode(file_get_contents("php://input"),true);

   switch($_GET["op"]){
      
        case "sesion":  $datos=$usuario->getUsuarios_sesion($body["correo"],$body["password"]);
                        echo json_encode($datos);
                        break;                 
   }

?>