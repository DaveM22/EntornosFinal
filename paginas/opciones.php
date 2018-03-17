<nav class="navbar navbar-expand-md bg-dark navbar-dark">

  <a class="navbar-brand" href="index.php">Navbar</a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item <?php ResaltarOpcion("usuarios") ?>">
        <a class="nav-link" href="<?php AsignarPagina("usuarios"); ?>">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php AsignarPagina("conceptos"); ?>">Conceptos</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Enlaces</a>
      </li>
      <li class="nav-item">
          
        <a class="nav-link <?php ResaltarOpcion("contacto") ?>" href="<?php AsignarPagina("contacto"); ?>" >Contacto</a>
      </li> 
    </ul>
  </div> 

</nav>

    <?php echo $_COOKIE['pagina'];?>
   
<?php
function AsignarPagina($pagina)
{
    if($_COOKIE["pagina"] == "")
        echo "paginas/".$pagina.".php";
    else 
        echo $pagina.'.php';
}
?>

<?php 

function ResaltarOpcion($pagina)
{
    if($_COOKIE["pagina"] == $pagina) 
    {
        echo 'active';
    }
    else
        echo '';
}



?>