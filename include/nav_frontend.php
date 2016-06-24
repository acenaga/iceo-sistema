<?php
function nav_frontend(){
return '
  
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">
        <img alt="ICEO" src="img/logoiceo.png">
      </a>
    </div>
  </div>
    <div class="container">
       <ul class="nav navbar-nav navbar-right">
       <li role="presentation"><a href="index.php">INICIO</a></li>
       <li role="presentation"><a href="nosotros.php">NOSOTROS</a></li>
       <li role="presentation"><a href="servicios.php">SERVICIOS</a></li>
       <li role="presentation"><a href="contacto.php">CONTACTOS</a></li>
       <li role="presentation" class="yellow"><a href="iniciarsesion.php"><span class="glyphicon glyphicon-user">
       </span> INICIAR SESIÓN</a></li>
       </ul>
    </div>
  </nav>

  ';}

 ?>