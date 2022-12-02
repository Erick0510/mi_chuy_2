<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
</head>
<body style="background-color:white;">
    <br>
    <a class='btn btn-outline-dark' style='margin-left: 2rem; margin-bottom: 1rem;' href='administrarProductos.php'>Volver</a>
        <div class="container" style="background-color:#BBC7EE; padding-inline: 2rem; padding-block: 1rem; border-radius:0.2rem">
        <h2 style="text-align:center">Actualizar Producto (<?php echo $_REQUEST['id']  ?>)</h2>
        <hr>
                <form action="putProductos.php" method="post" style="width:50%; margin-inline: auto; justify-content: space-around;">
                            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']?>">
                        <div class="">
                        <label for="nombre" class="">Nombre </label>
                            <input type="text" placeholder="" name="nombre" class="form-control">
                            
                        </div>

                        <div class="">
                            <input name="image" type="file" size="70" maxlength="70">  
                           
                        </div>

                        <div class="">
                        <label for="telefono" class="">Precio</label>
                            <input type="number" placeholder="" name="precio" class="form-control">
                           
                        </div>

                        <div class="">
                        <label for="password" class="">Status</label>
                            <input type="text" placeholder="" name="status" class="form-control">
                            
                        </div>

                        <div class="">
                        <label for="correo" class="">Descripción</label>
                            <input type="text" placeholder="" name="descripcion" class="form-control">
                            
                        </div>

                        <div style="display:flex; justify-content: space-between;" class="mt-3">
                            <input class="btn btn-success" type="submit" name="enviar">
                            <input class="btn btn-warning" type="reset" name="borrar">
                        </div>
                </form>
        <hr>
        </div>
</body>
</html>