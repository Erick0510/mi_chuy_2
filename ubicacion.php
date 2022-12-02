<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mi chuy</title>
    <link rel="shortcut icon" href="../img/logo2.png">
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css"> 
</head>
<body style="background-color: #f6e8b1">

  <nav class="navbar navbar-expand-lg navbar-light bg-warning" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img  class="logo" src=".//img/logo2.png" alt=""> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active fw-bold"  aria-current="page" href="Index.php">Menú</a>
          <a class="nav-link active fw-bold" href="ubicacion.php">Ubicación</a>
          <a class="nav-link active fw-bold" href="contacto.php">Contacto</a>

        </div>

      </div>
      <a href="login.php" id="login_button">Iniciar Sesion</i></a>
    </div>
  </nav> 


  <!--            AQUI VA AL API DE GEOLOCALICACION          -->

  <script>
    function iniciarMap(){
    var coord = {lat:24.0617838 ,lng: -104.6179559};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 50,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}
  </script>
  <div id="map" style="height: 500px; width: 100%;">
<script src="script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLJdkDe4edPXzvPqYaoM-cYUeUfJWh1rs&callback=iniciarMap"></script>
</div>




<!-- Burbujas Whatsapp y Phone -->
<div class="callbutton">
        <div id="WAButton"></div>
        <div class="llamada">
           <a href="tel:6183210822" class="fas fa-phone-alt"></a> 
        </div>
    </div>

 

    <script src="https://kit.fontawesome.com/de98b419ed.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

    <style>

    .burbuja-whatsapp{
        width: 7vmin;   
    }

    .burbujas{
        text-align: center;
    }

    </style>

<script>
        $(function() {
            $('#WAButton').floatingWhatsApp({
                phone: '5216183210822', //Número de telefono (Con prefijo 521 para México)
                headerTitle: '¡Envíanos un mensaje!', //Título de la ventana
                popupMessage: '¿Que tal?, Bienvenido a Tacos ¡Mi Chuy! ¿Que se le ofrece?', //Mensaje de la ventana
                showPopup: true, //Permite que esté visible el botón flotante
                buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" class="imgpop" />', //Button Image
                position: "right"
            });
        });
    </script>
</body>
</html>

<script src="https://kit.fontawesome.com/de98b419ed.js" crossorigin="anonymous"></script>