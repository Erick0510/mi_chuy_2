<?php 
//Clase que se utiliará para crear l modelo que interactua con la BD api_restful...
class Productos extends Conectar
{
    //Funcón para traer todos los registros de la tabla categría
    public function getProductos()
    {
        //Llamar la cadena de conexión a la BD
        $conectar=parent::Conexion();

        //String para la consulta
        $sql="select * from products";

        //Preparar la conexión con el String
        $sql=$conectar->prepare($sql);

        //Ejecutar la consulta
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductos_id($id)
    {
        $conectar=parent::Conexion();
        $sql="select * from products where id=?";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function postProductos($name, $image, $price, $status, $description)
    {
        $conectar=parent::Conexion();
        $sql="insert into products values(NULL, ?,?,?,?,?)";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$name);
        $sql->bindValue(2,$image);
        $sql->bindValue(3,$price);
        $sql->bindValue(4,$status);
        $sql->bindValue(5,$description); 
        
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function putProductos($name, $image, $price, $status, $description, $id)
    {
        $conectar=parent::Conexion();
        $sql="update products set name=?, image=?, price=?, status=?, description=? where id=?";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$name);
        $sql->bindValue(2,$image);
        $sql->bindValue(3,$price);
        $sql->bindValue(4,$status);
        $sql->bindValue(5,$description);
        $sql->bindValue(6,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteProductos($id)
    {
        $conectar=parent::Conexion();
        $sql="delete from products where id=?";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>