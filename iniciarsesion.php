<!DOCTYPE html>
<html>
<head>
	<title>Inciar Seison</title>
<?php
      include 'include/head_frontend.php';
      include 'include/nav_frontend.php';

       echo cabecera();
    ?>
</head>

<body class="home">
<?php echo nav_frontend(); ?>

<div id="integra" class="container-fluid">
      <div class="row">
        <div class="col-sm-12" style="vertical-align: middle; text-align: center;">
          <h1 class="titulo2">Inicia Sesion</h1>
        </div>
      </div>
      <form method="post" action="system/inicio_sesion.php">
        <div class="row">
          <div class="col-sm-4">
              <input name="usuario" placeholder="usuario" type="text"/>
          </div>
          <div class="col-sm-4">
              <input name="password" placeholder="clave" type="password"/>
          </div>      
          <div class="col-sm-4">
             <input type="submit" class="btn btn-default btn-circle btn-xl" value="iniciar"/>
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