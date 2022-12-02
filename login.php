<?php 

// Agregar el codigo para verificar en la BD que el usuario y pass sean validos
session_start();

   if (isset($_SESSION))
   {
       session_destroy();
   }

    if ($_SERVER["REQUEST_METHOD"]=="POST")
      {
            $correo=$_POST['correo'];
            $password=$_POST['pass'];

            $ins = json_encode(array("correo" => "$correo", "password" => "$password"));
            
            $curl = curl_init();

            curl_setopt_array($curl, array(
                    CURLOPT_URL => 'http://localhost/mi_chuy_2/controllers/inicioSesion.php?op=sesion',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_POSTFIELDS =>$ins,
                    CURLOPT_HTTPHEADER => array(
                      'Content-Type: text/plain'
                    ),
                  ));
            
            $response = curl_exec($curl);
            curl_close($curl);
            $data = json_decode($response, true);

            if (count($data)>0)
            {
                session_start();
                $_SESSION['correo'] = $data[0]['correo'];
                $_SESSION['privilegio'] = $data[0]['privilegio'];


                echo "<script>
                         alert('.:: - B I E N V E N I D O - :: ');
                         location.href='index.php'; //redireccionar a otro archivo 
                       </script>";
            }
            else
            {
                echo "<script>
                        alert('.:: - Verificar Usuario y Contraseña - :: ');
                        location.href='login.php';
                      </script>";
            }    
            
      }

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN DE ACCESO</title>
    <link rel='stylesheet' href='estilos.css'>
 

</head>
<body>
    <h3 align="center">MI CHUY</h3>
    <hr>
    

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table align="center">
            <tr>
                <td><label for="us">Correo Electronico</label></td>
                <td><input type="text" name="correo" id="correo" required></td>
            </tr>
            <tr>
                <td><label for="ps">Contraseña:</label></td>
                <td><input type="password" name="pass" id="password" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Entrar" name="entrar"></td>
                <td><input type="reset" value="Borrar" name="borrar"></td>
            </tr>

            <tr>
                <a href="consumer/nuevo_usuario.php">Registrarse</a>
            </tr>

        </table>
    </form>

    <hr>
 

</body>
</html>