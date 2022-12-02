<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contacto.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/favicon.png">
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <title>Document</title>
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
          <!-- Cerrar sesion -->

        </div>
        <a href="login.php" id="login_button">Iniciar Sesion</i></a>
      </div>
    </nav> 
<!-- formulario de contacto -->
<div class="content">

    <h1 class="logo">Contacto <span>Us</span></h1>

    <div class="contact-wrapper animated bounceInUp">
        <div class="contact-form">
            <h3>Contactanos</h3>
            <form action="https://formspree.io/f/myyvbaqg" method="POST">
                <p>
                    <label>Nombre completo</label>
                    <input type="text" name="fullname" required>
                </p>
                <p>
                    <label>Email</label>
                    <input type="email" name="email" required>
                </p>
                <p>
                    <label>Numero de telefono</label>
                    <input type="tel" name="phone" required>
                </p>
                <p>
                    <label>Asunto</label>
                    <input type="text" name="affair" required>
                </p>
                <p class="block">
                   <label>Mensaje</label> 
                    <textarea name="message" rows="3"></textarea>
                </p>
                <p class="block">
                    <button>
                        Enviar
                    </button>
                </p>
            </form>
        </div>
        <div class="contact-info">
            <h4 style="color:#fff">Más información</h4>
            <ul>
                <li><i class="fas fa-map-marker-alt"></i> UTD</li>
                <li><i class="fas fa-phone"></i> (677) 123 456 789</li>
                <li><i class="fas fa-envelope-open-text"></i> michuy@gmail.com</li>
            </ul>
            <p style="color:#fff">¿Tienes sugerencias? háznoslas saber...</p>
            <p style="color:#fff">Tacosmichuy.com</p>
        </div>
    </div>
    
<!-- Burbujas Whatsapp y Phone -->
<div class="callbutton">
        <div id="WAButton"></div>
        <div class="llamada">
           <a href="tel:6183210822" class="fas fa-phone-alt"></a> 
        </div>
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