<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_REQUEST['id'];
    $nom=$_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $password=$_POST['password'];
    $privilegio=$_POST['privilegio'];
}
$in = json_encode(array("nombre"=>"$nom", "correo"=>"$correo", "password"=>"$password", "telefono"=>"$telefono","privilegio"=>"$privilegio", "id"=>"$id"));

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'http://localhost/mi_chuy_2/controllers/usuarios.php?op=insert',
CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $in,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

echo "<script>alert('Registro actualizado exitosamente')
window.location.href = '../login.php'
</script>";

?>