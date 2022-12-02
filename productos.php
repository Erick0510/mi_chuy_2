<?php
$endpoint="http://localhost/APIs/mi_chuy_2/controllers/productos.php?op=selectall";
$datos=json_decode(file_get_contents($endpoint), true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/logo2.png">
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi chuy</title>
  
</head>
<body>
<!-- Barra de navegacion -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning" >
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"> <img  class="logo" src=".//img/logo2.png" alt=""> </a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link active fw-bold" href="Index.php">Inicio</a>  
          <a class="nav-link active fw-bold" href="usuarios_2.php">Usuarios</a>        
          <a class="nav-link active fw-bold" href="productos.php">Productos</a>   
        </div>

        <!-- CERRAR SESION -->
        <!-- Icono para cerrar sesion -->
        <!-- <i class="fa-solid fa-right-from-bracket"> -->
      </div>
      <a href="login.php" id="login_button">Cerrar sesión</i></a>
    </div>
  </nav> 
  <table class="table table-responsive table-hover table-bordered border-black table-grey table-dark table-striped" >
      <thead>
        <tr class="table-dark" style="text-align: center;">
        <th scope="col" style="width: 5%;">ID</th>
          <th scope="col" style="width: 5%;">Titulo</th>
          <th scope="col" style="width: 5%;">Imagen</th>
          <th scope="col">Precio</th>
          <th scope="col">status</th>
          <th scope="col" style="width: 5%;">Descripcion</th>
          <th scope="col" style="width: 10%;">Acciones</th>
          
        </tr>
      </thead>
      <tbody>
        <?php for ($i=0;$i<count($datos);$i++){ ?>
        <tr style="text-align: center;">
          <th><?php echo $datos[$i]['id']?></th>
          <th><?php echo $datos[$i]['name']?></th>
          <th><?php echo $datos[$i]['image']?></th>
          <td><?php echo $datos[$i]['price']?></td>
          <td><?php echo $datos[$i]['status']?></td>
          <td><?php echo $datos[$i]['description']?></td>
          
         
          <td><a href="consumer/actualizarProductos.php?id=<?php echo $datos[$i]['id']?>&name=<?php echo $datos[$i]['name']?>&image=<?php echo $datos[$i]['image']?>&price=<?php echo $datos[$i]['price']?>&status=<?php echo $datos[$i]['status']?>&description=<?php echo $datos[$i]['description']?>">Actualizar</a> 
          <a href="consumer/eliminarProductos.php?id=<?php echo $datos[$i]['id']?>">Eliminar</a></td>
        </tr>
        
        <?php 
      } ?>
      </tbody>
    </table>
</body>