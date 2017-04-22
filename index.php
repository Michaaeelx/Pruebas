<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Michael León">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Novedades Joalice León</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Carousel -->
    <link href="css/carousel.css" rel="stylesheet">

    <!-- Estilos -->
    <link href="css/estilos.css" rel="stylesheet">

    <?php

    $informacion = "&iexcl;Uso excl&uacute;sivo para los mensajes de información de la empresa!";

    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Novedades Joalice León</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-globe"></span> Inicio</a></li>
                <li><a href="#nosotros"><span class="glyphicon glyphicon-tag"></span> Nosotros</a></li>
                <li><a href="#contacto"><span class="glyphicon glyphicon-envelope"></span> Contacto</a></li>
                </ul>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" id="inicio">
      <!-- Indicators -->
      <ol class="carousel-indicators">
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="imagenes/1.jpg">
          <div class="container">
          <div class="carousel-caption">
              <h2>Novedades Joalice León, F.P. <h4>(J-11764444-4)</h4></h2>
              <p><h5>Somos una empresa autónoma venezolana dedicada a la venta de artículos de oficina, papelería y otras cosas más.</h5></p>
              <div class="informacion">
              <img src="imagenes/1a.png">
              <div class="title">
              <span>¡Novedades Joalice León, F.P. tiene un mensaje para tí!</span>
              </div>
              <marquee><?php echo $informacion ?></marquee>
              </div>
              <p><a class="btn btn-lg btn-danger" href="#contacto" role="button">¡Contáctanos!</a></p>
            </div>
          </div>
        </div>
    </div>
    </div>
    <!-- /.carousel -->

    <div class="container marketing" id="nosotros">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="imagenes/1h.png" width="64" height="64">
          <h2>¡Una buena atención!</h2>
          <p><b>Novedades Joalice León, F.P.</b> es atendido por la Licenciada en Administración <b>Joalice León</b>, propietaria de la empresa venezolana.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imagenes/2h.png" width="60" height="60">
          <h2>¿Nuestros horarios?</h2>
          <p>Días de semana: 9:30 a.m. a 4:30 p.m.
          <br>Fines de semana: 10:00 a.m. a 4:00 p.m.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imagenes/3h.png" width="64" height="64">
          <h2>¡Te ofrecemos!</h2>
          <p>Una gran variedad en artículos de oficina, tales como: bolígrafos, engrapadoras, lapiceros, reglas y otros detalles esenciales.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <?php
      header('Content-Type: text/html; charset=UTF-8'); 

      if(isset($_POST['correo'])) {

      // Debes editar las prÃ³ximas dos lÃ­neas de cÃ³digo de acuerdo con tus preferencias
      $destinatario = "leonmmichaell@gmail.com";
      $asunto = "Contacto: Novedades Joalice León";
  
      // AquÃ­ se deberÃ­an validar los datos ingresados por el usuario
      if(!isset($_POST['nombre']) ||
      !isset($_POST['correo']) ||
      !isset($_POST['comentarios']))  {
        header("location: index.php");
        echo "<script languaje='javascript'>alert('Exitoso')</script>";
        }


      //AquÃ­ Se arma el mensaje completo
      $mensaje = "Detalles del formulario de contacto:\n\n";
      $mensaje .= "Nombre: " . $_POST['nombre'] . "\n";
      $mensaje .= "Correo electronico: " . $_POST['correo'] . "\n";
      $mensaje .= "Mensaje: " . $_POST['comentarios'] . "\n\n";

      // Ahora se envÃ­a el e-mail usando la funciÃ³n mail() de PHP
      $cabeceras = 'From: '.$email_from."\r\n".
      'Reply-To: '.$email_from."\r\n" .
      'X-Mailer: PHP/' . phpversion();

      if(mail($destinatario, $asunto, $mensaje, $cabeceras)){
      echo "<script languaje='javascript'>alert('Exitoso')</script>";
      }else{
      echo "<script languaje='javascript'>alert('Fallido')</script>";
        }
      }

      ?>

      <hr class="featurette-divider">
      <div class="contacto" id="contacto">
      <form action="index.php">
      <div class="col-md-6">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="correo">E-mail:</label>
        <input type="email" name="correo" id="correo" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="comentarios">Mensaje</label>
        <textarea for="comentarios" rows="3" class="form-control" required></textarea>
      </div>
      <div>
        <center><button type="submit" class="btn btn-danger">Contactar</button></center>
      </div>
      </div>
      <div class="col-md-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15628.190784952536!2d-70.2109592!3d11.6910323!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa792bbadb1a750ae!2sNovedades+Joalice+Le%C3%B3n!5e0!3m2!1ses!2sve!4v1492828314265" width="540" height="250" frameborder="0" style="border:0"></iframe>
      </div>
    </form>
    </div>
    </div>
    <hr class="featurette-divider">
    <div class="container marketing">
    <footer>
        <div class="col-md-8">
          <div class="footer-right"><span>Todos los derechos han sido reservados, empresa registrada ante el estado venezolano. </span><span><div style="text-align: right">&copy; <?php echo date('Y');?>, desarrollado por <a href="https://www.facebook.com/maicorlee" target="_blank">Michael León.</div></a></span></div></div>

          <div class="social-icons col-md-4">
          <a href="#" target="_blank" class="facebook-ico"></a>
          <a href="#" target="_blank" class="twitter-ico"></a>
          <a href="#" target="_blank" class="youtube-ico"></a>
          </div>
          </span>
    </footer>

    <a href="#" id="pull-right" style="display: block;"><span id="pull-right" style="opacity: 0;"></span> <span id="pull-right" style="opacity: 1;">top </span></a>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>