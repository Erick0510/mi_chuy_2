<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_REQUEST['id'];
    $name=$_POST['nombre'];
    $image = $_POST['image']; 
    $precio=$_POST['precio'];
    $status = $_POST['status'];
    $descripcion=$_POST['descripcion'];

}
$in = json_encode(array("nombre"=>"$name", "image"=>"$image", "precio"=>"$precio", "status"=>"$status", "descripcion"=>"$descripcion", "id"=>"$id"));

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'http://localhost/mi_chuy_2/controllers/productos.php?op=update',
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
window.location.href = '../productos.php'
</script>";

?>