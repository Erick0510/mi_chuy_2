<?php
session_start();

if(!isset($_SESSION['correo'])){
   header("location:login.php");
}
else{
    $cor=$_SESSION['correo'];
    // $password=$_SESSION['pass'];
    $priv=$_SESSION['privilegio'];
}
?>