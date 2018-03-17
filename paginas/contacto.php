<!doctype html>
<?php setcookie('pagina','contacto'); ?>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <script type="application/javascript" src="../js/jquery-3.3.1.min.js"></script>
  </head>

  <body>
      <div class="container">
      <?php include_once("librerias.php"); ?>
      <?php include_once("opciones.php"); ?>
      <form action="Mensaje.php" method="post">
          <div class="form-group">
            <label for="exampleTextarea">Example textarea</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          </div>
      </form>
    
      </div>
    

  </body>

    
 
    
 
    
</html>