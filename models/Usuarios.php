<?php 
//Clase que se utiliará para crear l modelo que interactua con la BD api_restful...
class Usuarios extends Conectar
{
    //Funcón para traer todos los registros de la tabla categría
    public function getUsuarios()
    {
        //Llamar la cadena de conexión a la BD
        $conectar=parent::Conexion();

        //String para la consulta
        $sql="select * from usuarios";

        //Preparar la conexión con el String
        $sql=$conectar->prepare($sql);

        //Ejecutar la consulta
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUsuarios_id($id)
    {
        $conectar=parent::Conexion();
        $sql="select * from usuarios where id=?";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function postUsuarios($nombre, $correo, $password, $telefono, $privilegio)
    {
        $conectar=parent::Conexion();
        $sql="insert into usuarios values(NULL, ?,?,?,?,?)";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$correo);
        $sql->bindValue(3,$password);
        $sql->bindValue(4,$telefono); 
        $sql->bindValue(5,$privilegio); 
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function putUsuarios($nombre, $correo, $password, $telefono, $privilegio, $id)
    {
        $conectar=parent::Conexion();
        $sql="update usuarios set nombre=?, correo=?, password=?, telefono=?, privilegio=? where id=?";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$correo);
        $sql->bindValue(3,$password);
        $sql->bindValue(4,$telefono);
        $sql->bindValue(5,$privilegio);
        $sql->bindValue(6,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteUsuarios($id)
    {
        $conectar=parent::Conexion();
        $sql="delete from usuarios where id=?";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
