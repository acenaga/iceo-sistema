<!DOCTYPE html>
<html>
<head>
	<title>Contactos</title>
<?php
      include 'include/head_frontend.php';
      include 'include/nav_frontend.php';

       echo cabecera();
    ?>
</head>

<body class="home">
<?php echo nav_frontend(); ?>
<!--Seccion+Form contacto-->
<div id="contacto" class="container-fluid">
      <div class="row">
        <div class="col-lg-12" style="vertical-align: middle; text-align: center; margin-bottom: 10%;">
          <h1 class="titulo2">CONTACTANOS</h1>
        </div>
      </div>
      <form method="post" action="">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <input name="nombre" placeholder="NOMBRE" type="text"/>
          </div>
          <div class="form-group">
              <input name="correo" placeholder="CORREO" type="text"/>
          </div>
          <div class="form-group">
              <input name="telefono" placeholder="TELEFONO" type="number"/>
          </div>         
        </div>
        <div class="col-md-6">
          <div class="form-group">
          <textarea name="mensaje" placeholder="ESCRIBA SU MENSAJE"></textarea>
          </div>      
          <div class="col-md-12">
             <input type="submit" class="btn btn-default btn-circle btn-xl" value="ENVIAR" style="margin-bottom: 15%;"/>
          </div>
          <div class="col-md-4" aling="center"  style="margin-bottom: 10%;">
                    <h4 class="service-heading">Dirección</h4>
                    <p class="text-muted">Av. 8 con calle 86A - Edificio Central Park, piso 4</p>
          </div>
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