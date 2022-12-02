<?php
//CLASE PARA ESTABLECER LA CONEXIÓN CON LA BD API_RESTFUL
class Conectar
{
    protected $dbh;

    protected function Conexion()
    {
        try
        {
            $conectar=$this->dbh=new PDO("mysql:local=localhost;dbname=codeat21","root","");
            return $conectar;
        }
        catch (Exception $e)
        {
            print "Error en la base de datos".$e->getMessage()."<br>";
            die("Verifica por favor ...");
        }
    }
}

?>