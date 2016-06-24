<!DOCTYPE html>
<html>
<head>
<title>Grupo ICEO</title>
<?php
      include 'include/head_frontend.php';
      include 'include/nav_frontend.php';

       echo cabecera();
    ?>
</head>
<body class="home">
    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger"> <h4 class="center">Error en datos de acceso</h4></div>
    <?php endif ?>
    <?php if (isset($_GET['permiso'])): ?>
        <div class="alert alert-danger"> <h4 class="center">No tiene acceso a ese modulo</h4></div>
    <?php endif ?>
<?php echo nav_frontend(); ?>
<!--Slides de imágenes-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
   </ol>
  <!-- Imágenes del Slide -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/slide-1.png">
    </div>
    <div class="item">
      <img src="img/slide-2.png">
    </div>
    <div class="item">
      <img src="img/slide-3.png">
    </div>
    <div class="item">
      <img src="img/slide-4.png">
    </div>
  </div>
<!-- Controladores del Slide -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--Secciones-->
<!--seccion1-->
  <div class="container">
      <div class="row tam1">
        <div class="col-sm-3">
        <img class="img-circle circulo" src="img/tips.jpg" /></img>
        </div>

        <div class="col-sm-9">
        <p class="parr2"><a href="img/tips.jpg">Sabes como conformar un Comité de Seguridad y Salud Laboral?</a></p>
        <p class="parr1">Para ayudarte a cumplir con los requerimientos de la normativa en GRUPO ICEO diseñamos un flujograma del proceso de conformación del Comité para ayudarte a comprender como hacerlo.</p>
        </div>
  </div>
</div>
<!--seccion2-->
  <div class="container-fluid">
      <div class="row tam2">
        <div class="col-sm-9">
        <p class="parr3">La importancia de mantener una buena postura corporal</p>
        <p class="parr4">Mantener una buena postura corporal nos beneficia tanto desde el punto de vista de la salud como de la estética. Si nos mantenemos erguidos y con la espalda recta evitaremos problemas musculares y de columna, una buena oxigenación y una apariencia esbelta. Para ello podemos ayudarnos con algunos consejos. Postura correcta
Una postura correcta se define como la alineación simétrica y proporcional de los segmentos corporales alrededor del eje de la gravedad. La postura ideal de una persona es la que no se exagera o aumenta la curva lumbar, dorsal o cervical; es decir, cuando se mantienen las curvas fisiológicas de la columna vertebral.</p>
        </div>

        <div class="col-sm-3">
          <img class="img-circle circulo" src="img/mano.jpg"/></img>
        </div>
  </div>
</div>

<!--seccion4-->
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-12" style="vertical-align: middle; text-align: center;" >
        <h1 class="titulo1">CLIENTES</h1>
        <h4 class="titulo4">Y COLABORACIONES</h4>
        </div>
  </div>
</div>

<!--2do Slides de imágenes-->
<div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel2" data-slide-to="1"></li>
   </ol>
  <!-- Imágenes del 2do Slide -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/clientes-3.png">
    </div>

    <div class="item">
      <img src="img/clientes-2.png">
    </div>

  <!-- Controladores del 2do Slide -->
  <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!--Seccion+Form Integrate-->
<div id="integra" class="container-fluid">
      <div class="row">
        <div class="col-sm-12" style="vertical-align: middle; text-align: center;">
          <h1 class="titulo2">INTÉGRATE</h1>
        </div>
      </div>
      <form method="post" action="">
        <div class="row">
          <div class="col-sm-4">
              <input name="nombre" placeholder="NOMBRE" type="text"/>
          </div>
          <div class="col-sm-4">
              <input name="correo" placeholder="CORREO" type="text"/>
          </div>
          <div class="col-sm-8">
              <br>
              <textarea name="mensaje" placeholder="ESCRIBA SU MENSAJE"></textarea>
              <br><br><br>
          </div>
          <div class="col-sm-4">
             <input type="submit" class="btn btn-default btn-circle btn-xl" value="ENVIAR"/>
          </div>
        </div>
      </form>
</div>

<!--Footer--> 

  <div class="container-fluid">
      <div class="row tam2">
        <div class="col-lg-12">
        <div class="col-md-8">
        <p class="parrfoo">Grupo ICEO C.A. - Todos los derechos e izquierdos reservados.  /  Desarrollado por: <strong>Grupo # 4 WEBMASTER</strong>
        </p>
  </div>
      <div class="row tam2">
        <div class="col-md-4">
        <button type="button" class="btn btn-default btn-circle" style="margin-left: 27%;"><i class="fa fa-facebook"></i></button>
        <button type="button" class="btn btn-default btn-circle"><i class="fa fa-twitter"></i></button>
        <button type="button" class="btn btn-default btn-circle"><i class="fa fa-instagram"></i></button>
        </div>
      </div>
      </div>
      </div>
 </div>
</body>
</html>