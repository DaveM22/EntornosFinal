<!doctype html>
<?php setcookie("pagina","usuarios"); ?>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <?php include_once('librerias.php'); ?>
  </head>

  <body>
      <div class="container">
            <?php include_once('opciones.php'); ?>
          
            <input type="button" id="Nuevo Usuario" class="btn btn-primary" value="Nuevo usuario" />
            <?php include_once('Usuarios/usuariosbd.php'); ?> 
      </div>   
  </body>

</html>