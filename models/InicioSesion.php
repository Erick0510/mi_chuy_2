<?php
  
  class Usuarios extends Conectar{

       public function getUsuarios_sesion($correo,$password)
       {
        $conectar=parent::Conexion();
          
        $sql="select * from usuarios where correo=? and password=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$correo);
        $sql->bindValue(2,$password);   
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
       }

  }


?>